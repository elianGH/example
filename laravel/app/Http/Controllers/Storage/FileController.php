<?php
namespace App\Http\Controllers\Storage;

use App\Http\Controllers\Controller;
use Storage;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Displays a file inline.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $uuid File UUID
     *
     * @return \Illuminate\Http\Response
     */
    public function inline(Request $request, string $uuid)
    {
        return $this->stream($uuid, false);
    }

    /**
     * Forces to download a file.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $uuid File UUID
     *
     * @return \Illuminate\Http\Response
     */
    public function download(Request $request, $uuid)
    {
        return $this->stream($uuid, true);
    }

    /**
     * Stream the file content.
     *
     * @param string $uuid File UUID.
     * @param boolean $download Forces to download a file.
     *
     * @return \Illuminate\Http\Response
     */
    public function stream(string $uuid, bool $download)
    {
        try {
            $file_path = Storage::disk('local')->get($uuid);

            if($download) {
                return response()->download($file_path);
            } else {
                return response()->file($file_path);
            }
        } catch(\Exception $e) {
            return abort(404);
        }
    }
}
