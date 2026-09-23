<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'lohgarra'],
            [
                'name' => 'Lohgarra',
                'email' => 'lohgarra@example.com',
                'password' => 'rwaaaaawr',
                'author_pseudonym' => 'Lohgarra',
            ]
        );

        User::updateOrCreate(
            ['username' => 'chewbacca'],
            [
                'name' => 'Chewbacca',
                'email' => 'chewbacca@example.com',
                'password' => 'rrwwwgggh',
                'author_pseudonym' => 'Chewbacca',
            ]
        );

        User::updateOrCreate(
            ['username' => 'darth_vader'],
            [
                'name' => 'Darth Vader',
                'email' => 'darth_vader@example.com',
                'password' => 'iwanttopublish',
                'author_pseudonym' => 'Darth Vader',
            ]
        );
    }
}
