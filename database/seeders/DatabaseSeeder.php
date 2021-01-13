<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Property;
use App\Models\Tag;
use App\Models\Type;
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
        // Création des types de propriété
        Type::create(['title' => 'Maison individuelle', 'description' => 'Une maison est un bâtiment d\'habitation, souvent de taille moyenne destiné au logement d\'une famille, ou encore plus imposante divisée en plusieurs résidences ou appartements. Une maison est, en droit civil français, un immeuble, mot qui désigne aussi couramment un édifice de plusieurs étages divisé en plusieurs appartements occupés par diverses familles. On parle alors d\'immeuble collectif. ']);
        Type::create(['title' => 'Appartement', 'description' => 'Un appartement est une unité d’habitation, comportant un certain nombre de pièces et qui n’occupe qu’une partie d’un immeuble, situé généralement dans une ville. ']);
        Type::create(['title' => 'Enclos à dinosaure', 'description' => 'Un enclos est un espace de terrain entouré d\'une clôture qui sert à contenir des dinosaure, à délimiter un monument commémoratif. ']);

        // Création des catégories d'article
        Category::create(['title' => 'Maison individuelle', 'description' => 'Une maison est un bâtiment d\'habitation, souvent de taille moyenne destiné au logement d\'une famille, ou encore plus imposante divisée en plusieurs résidences ou appartements. Une maison est, en droit civil français, un immeuble, mot qui désigne aussi couramment un édifice de plusieurs étages divisé en plusieurs appartements occupés par diverses familles. On parle alors d\'immeuble collectif. ']);
        Category::create(['title' => 'Appartement', 'description' => 'Un appartement est une unité d’habitation, comportant un certain nombre de pièces et qui n’occupe qu’une partie d’un immeuble, situé généralement dans une ville. ']);
        Category::create(['title' => 'Enclos à dinosaure', 'description' => 'Un enclos est un espace de terrain entouré d\'une clôture qui sert à contenir des dinosaure, à délimiter un monument commémoratif. ']);


        // Création des articles auquelles on attache des tags
//        Post::factory(50)->hasTags(rand(1, 10))->create();
        Post::factory(50)->has(Tag::factory()->count(rand(1, 10)))->create();


        // Création des biens auquelles on attache des images
//        Property::factory()->count(50)->hasImages(rand(1, 10))->create();
        Property::factory(50)->has(Image::factory()->count(rand(1, 10)))->create();
    }
}
