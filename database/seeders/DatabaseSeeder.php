<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        $categories = [
            [
                "name"=>"Tutorial",
                "slug" => "tutorial"
            ],
            [
                "name"=>"Knowledge",
                "slug" => "knowledge"
            ],
            [
                "name"=>"Tools",
                "slug" => "tools"
            ],
            [
                "name"=>"News",
                "slug" => "news"
            ],
        ];
        foreach ($categories as $category) {
            Category::factory()->create([
                "name"=>$category['name'],
                "slug"=>$category['slug']
            ]);
        };
        Blog::factory(5)->create();

    }
}
