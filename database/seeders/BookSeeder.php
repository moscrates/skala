<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lohgarra = User::where('username', 'lohgarra')->firstOrFail();
        $chewbacca = User::where('username', 'chewbacca')->firstOrFail();

        Book::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Adventures on Kashyyyk',
                'description' => 'A thrilling tale of adventures on Kashyyyk.',
                'author_id' => $lohgarra->id,
                'cover_image_url' => null,
                'price' => '9.99',
                'published' => true,
                'deleted_at' => null,
            ]
        );

        Book::updateOrCreate(
            ['id' => 2],
            [
                'title' => 'Life Debt: A Wookie Story',
                'description' => 'The story of a Wookie and his life debt.',
                'author_id' => $lohgarra->id,
                'cover_image_url' => null,
                'price' => '14.99',
                'published' => true,
                'deleted_at' => null,
            ]
        );

        $this->call(BookSeeder::class);


    }
}
