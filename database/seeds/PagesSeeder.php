<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Page::create(
                    [
                        'name' => 'home',
                        'alias' => 'hame',
                        'text' => ' <h2>We create <strong>awesome</strong> web templates</h2>',
                        'images' => 'main_device_image.png' 
                    ],
                    [
                        'name' => 'about us',
                        'alias' => 'aboutUs',
                        'text' => ' <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br/><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>',
                        'images' => 'abiut-img.jpg' 
                    ]
         );
    }
}
