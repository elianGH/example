<?php

use Illuminate\Database\Seeder;
use App\Models\Manager\User\Team;

class TestTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Team::class, 50)
            ->create()
            ->each(function($user) {
                $user->assignRole(Team::ROLE_ADMIN);
            });
    }
}
