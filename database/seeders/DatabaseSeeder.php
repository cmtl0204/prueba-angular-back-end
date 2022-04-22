<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Area;
use App\Models\Author;
use App\Models\Book;
use App\Models\Client;
use App\Models\Magazine;
use App\Models\Modality;
use App\Models\Movie;
use App\Models\Person;
use App\Models\Position;
use App\Models\Project;
use App\Models\Zoo;
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
        for ($i = 0; $i < 100; $i++) {
            Movie::factory()->count(rand(1, 5))->for(Client::factory())->create();
        }

        for ($i = 0; $i < 100; $i++) {
            Animal::factory()->count(rand(1, 5))->for(Zoo::factory())->create();
        }

        for ($i = 0; $i < 100; $i++) {
            Person::factory()->count(rand(1, 5))->for(Position::factory())->create();
        }

        for ($i = 0; $i < 100; $i++) {
            Book::factory()->count(rand(1, 5))->for(Author::factory())->create();
        }

        for ($i = 0; $i < 100; $i++) {
            Magazine::factory()->count(rand(1, 5))->for(Area::factory())->create();
        }

        for ($i = 0; $i < 100; $i++) {
            Project::factory()->count(rand(1, 5))->for(Modality::factory())->create();
        }
    }
}
