<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function form01()
    {
        return view('html-workshop/form01');
    }
    public function form02()
    {
        return view('html-workshop/form02');
    }
    public function form03()
    {
        return view('html-workshop/form03');
    }
    public function form04()
    {
        return view('html-workshop/form04');
    }
    public function form05()
    {
        return view('html-workshop/form05');
    }
    public function form06()
    {
        return view('html-workshop/form06');
    }
    public function css01()
    {
        return view('css-workshop/css01');
    }
    public function css02()
    {
        return view('css-workshop/css02');
    }
    public function css03()
    {
        return view('css-workshop/css03');
    }
    public function php01()
    {
        return view('PHP01-Workshop/php01');
    }
    public function php02()
    {
        return view('PHP01-Workshop/php02');
    }
    public function php03()
    {
        return view('PHP01-Workshop/php03');
    }
    public function php04()
    {
        return view('PHP01-Workshop/php04');
    }
}

