<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
    $newProject = new Project();
    $newProject->title = $faker->word();
    $newProject->slug = $faker->word();
    $newProject->description = $faker->sentence();
    $newProject->image = $faker->imageUrl();
    $newProject->project_url = $faker->url();
    $newProject->type = $faker->word();
    $newProject->technologies = $faker->word();
    $newProject->is_published = $faker->boolean();
    $newProject->save();

    }
}
}