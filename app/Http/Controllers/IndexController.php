<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\Service;
use App\People;
use DB;
use Mail;


class IndexController extends Controller
{
    //
    public function execute(Request $request){

        $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'email'    => 'Поле :attribute должно соответсвовать email адресу'
        ];

        if($request->isMethod('post')){
            $this->validate($request,[
                'name'  => 'required|max:255',
                'email' => 'required|max:255|email',
                'text'  => 'required'

            ], $messages);

           /* $data = $request->all();

            $result = Mail::send('site.email',['data' => $data], function($message) use ($data){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin)->subject('Question');
            });

            if($result){
                return redirect()->route('home')->with('status','Email отрпавлен');
            }*/
        }




        $portfolios = Portfolio::all();
        $services   = Service::all();
        $peoples    = People::all();
        $filters    = DB::table('portfolios')->distinct()->pluck('filter');
        $pages      = Page::all();

        $menu       = array();

        foreach($pages as $page){
            $item = array(
                'title' => $page->name,
                'alias' => $page->alias
            );
            array_push($menu, $item);
        }

        $item = array(
            'title' => 'Service',
            'alias' => 'service'
        );
        array_push($menu, $item);

        $item = array(
            'title' => 'Portfolio',
            'alias' => 'Portfolio'
        );
        array_push($menu, $item);

        $item = array(
            'title' => 'Team',
            'alias' => 'team'
        );
        array_push($menu, $item);

        $item = array(
            'title' => 'Contact',
            'alias' => 'contact'
        );
        array_push($menu, $item);

        /*dd($menu);*/

        return view('site.index',array(
            'portfolios' => $portfolios,
            'services'   => $services,
            'peoples'    => $peoples,
            'filters'    => $filters,
            'pages'      => $pages,
            'menu'       => $menu
        ));

    }
}
