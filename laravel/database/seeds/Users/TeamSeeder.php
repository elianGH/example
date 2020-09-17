<?php

use Illuminate\Database\Seeder;
use App\Models\Manager\User\Team;

class TeamSeeder extends Seeder
{
    protected $adminEmail = 'elianyyf@gmail.com';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Team::email($this->adminEmail)->first();

        if(! $user) {
            $this->seedSuperAdmin();
        }
    }
    /**
     * Seed super admin
     * @return void
     */
    protected function seedSuperAdmin()
    {
        factory(Team::class, 1)
            ->create([
                'email' => $this->adminEmail,
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'nickname' => '@super_admin',
                'password' => Hash::make("123123123"),
                'phone' => "0663034992"
            ])
            ->each(function($user) {
                $user->assignRole(Team::ROLE_ADMIN);
            });
    }
}
