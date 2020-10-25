<?php

namespace App\Http\Controllers;

use \App\Models\Example;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public function home()
    {
        //ddd(resolve('\App\Models\Example'), resolve('\App\Models\Example'));
        //return View::make('welcome');
        //return \Request::input('name');
        \Cache::remember('foo', 60, fn() => 'foobar');
        return \Cache::get('foo');
    }
}
