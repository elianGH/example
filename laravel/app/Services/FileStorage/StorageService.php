<?php
namespace App\Services\FileStorage;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Str;
use App\Models\Manager\File\File;

class StorageService
{
    /**
     * @var Storage $storage
     */
    protected $storage;

    /**
     * @var string $uuid
     */
    protected $uuid;

    /**
     * @var UploadedFile| \Illuminate\Http\File
     */
    protected $file;

    /**
     * @var string $path
     */
    protected $path;

    /**
     * Get a filesystem instance.
     *
     * @param  string $name
     * @return $this
     */
    public function disk(string $name): StorageService
    {
        $this->storage = Storage::disk($name);

        return $this;
    }

    /**
     * Store the uploaded file on the disk.
     *
     * @param  string  $path
     * @param  \Illuminate\Http\File|UploadedFile  $file
     * @return $this
     */
    public function putFile(string $path, UploadedFile $file): StorageService
    {
        $this->file = $file;
        $this->path = $path;
        $this->storage->putFileAs($path, $file, $this->fileName());

        return $this;
    }

    /**
     * Get file path
     *
     * @param string $uuid
     * @return string
     */
    public function get(string $uuid): string
    {
        $file = File::uuid($uuid)->firstOrFail();
        $diskPath = $this->storage->getDriver()->getAdapter()->getPathPrefix();

        return $diskPath . $file->path . DIRECTORY_SEPARATOR . $file->uuid . '.' . $file->extension;
    }

    /**
     * Store the file to the database
     *
     * @param bool $public
     * @param int|null $user
     * @return integer
     */
    public function store(int $user = null, bool $public = false): int
    {
        $file = new File([
            'name' => $this->file->getClientOriginalName(),
            'extension' => $this->file->guessExtension(),
            'mime_type' => $this->file->getMimeType(),
            'size' => $this->file->getSize(),
            'public' => $public,
            'uuid' => $this->uuid,
            'path' => $this->path
        ]);

        if($user) {
            $file->user()->associate($user);
        }

        $file->save();

        return $file->id;
    }

    /**
     * Generate file name with uuid and extension
     *
     * @return string
     */
    protected function fileName(): string
    {
        $this->uuid = (string)Str::uuid();

        return $this->uuid . '.' . $this->file->guessExtension();
    }
}
