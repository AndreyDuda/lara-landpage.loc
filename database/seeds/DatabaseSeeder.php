<?php

use Illuminate\Database\Seeder;
use App\Service;
use App\Page;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('pages')->insert(
            [
                [
                    'name'   => 'home',
                    'alias'  => 'home',
                    'text'   => ' <h2>We create <strong>awesome</strong> web templates</h2>',
                    'images' => 'main_device_image.png' 
                ],

                [
                    'name'   => 'about us',
                    'alias'  => 'aboutUs',
                    'text'   => ' <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br/><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>',
                    'images' => 'about-img.jpg'
                ]
            ]
 );
        DB::table('service')->insert(
            [
                [
                    'name' => 'Android',
                    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon' => 'fa-android'
                ],
                [
                    'name' => 'Apple IOS',
                    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon' => 'fa-apple'
                ],
                [
                    'name' => 'Design',
                    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon' => 'fa-html5'
                ],
                [
                    'name' => 'Concept',
                    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon' => 'fa-dropbox'
                ],
                [
                    'name' => 'User Research',
                    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon' => 'fa-slack'
                ],
                [
                    'name' => 'User Experience',
                    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon' => 'fa-users'
                ]
            ]
        );

        DB::table('portfolios')->insert(
            [
                [
                    'name'   => 'SMS Mobile App',
                    'image'  => 'portfolio_pic1.jpg',
                    'filter' => 'appleIOS'
                ],
                [
                    'name'   => 'Finance App',
                    'image'  => 'portfolio_pic2.jpg',
                    'filter' => 'design'
                ],
                [
                    'name'   => 'GPS Concept',
                    'image'  => 'portfolio_pic3.jpg',
                    'filter' => 'design'
                ],
                [
                    'name'   => 'Shopping',
                    'image'  => 'portfolio_pic4.jpg',
                    'filter' => 'android'
                ],
                [
                    'name'   => 'Managment',
                    'image'  => 'portfolio_pic5.jpg',
                    'filter' => 'design'
                ],
                [
                    'name'   => 'iPhone',
                    'image'  => 'portfolio_pic6.jpg',
                    'filter' => 'web'
                ],
                [
                    'name'   => 'Nexus Phone',
                    'image'  => 'portfolio_pic7.jpg',
                    'filter' => 'design'
                ],
                [
                    'name'   => 'Android',
                    'image'  => 'portfolio_pic8.jpg',
                    'filter' => 'android'
                ]
            ]
        );
        DB::table('peoples')->insert(
            [
                [
                    'name'     => 'Tom Rensed',
                    'position' => 'Chief Executive Officer',
                    'images'   => 'team_pic1.jpg',
                    'text'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.'
                ],
                [
                    'name'     => 'Kathren Mory',
                    'position' => 'Vice President',
                    'images'   => 'team_pic2.jpg',
                    'text'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.'
                ],
                [
                    'name'     => 'Lancer Jack',
                    'position' => 'Senior Manager',
                    'images'   => 'team_pic3.jpg',
                    'text'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.'
                ]
            ]
        );
    }
}
