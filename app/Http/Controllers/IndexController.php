<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\Service;
use App\People;

class IndexController extends Controller
{
    //
    public function execute(Request $request){

        $pages = Page::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $peoples = People::all();

        $menu = array();

        foreach($pages as $page){
            $item = array(
                'title' => $page->name,
                'alias' => $page->alias
            );
            array_push($menu, $item);
        }

        $item = array(
            'title'=>'Service',
            'alias' => 'service'
        );
        array_push($menu, $item);

        $item = array(
            'title'=>'Portfolio',
            'alias' => 'Portfolio'
        );
        array_push($menu, $item);

        $item = array(
            'title'=>'Team',
            'alias' => 'team'
        );
        array_push($menu, $item);

        $item = array(
            'title'=>'Contact',
            'alias' => 'contact'
        );
        array_push($menu, $item);

        /*dd($menu);*/

        return view('site.index',array(
            'menu' => $menu,
            'pages' => $page,
            'services' => $services,
            'portfolios' => $portfolios,
            'peoples' => $peoples
        ));

    }
}
