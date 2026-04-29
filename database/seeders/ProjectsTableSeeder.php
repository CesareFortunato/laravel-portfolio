<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
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
    $newProject->slug = Str::slug($newProject->title) . '-' . $i;
    $newProject->description = $faker->sentence();
    $newProject->image = 'https://picsum.photos/400/300';
    $newProject->type_id = rand(1,7);
    $newProject->project_url = $faker->url();
    
    $newProject->is_published = $faker->boolean();
    $newProject->save();

    }
}
}