<?php

namespace Database\Seeders;

use App\Models\Request;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@site.com',
        ]);
        User::factory()->create([
            'name' => 'Writer',
            'email' => 'writer@site.com',
            'role' => 'writer'
        ]);
        User::factory()->create([
            'name' => 'Editor',
            'email' => 'editor@site.com',
            'role' => 'editor'
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@site.com',
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'super@site.com',
            'role' => 'super'
        ]);

        Request::factory()->create([
            'user_id' => 1
        ]);

        User::factory(10)->create();
        Request::factory(10)->create();
        Resource::factory(10)->create();
    }
}
