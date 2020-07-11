<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Wecome to laravel';
        return view('pages.index',compact('title'));
    }

    public function about()
    {
        $title = 'About page';
        return view('pages.about')->with('title',$title);
    }

    public function services()
    {
        $data = [
            'title'=>'Services',
            'services'=>['web design','programming','SEO']
        ];
        return view('pages.services')->with($data);
    }
}
