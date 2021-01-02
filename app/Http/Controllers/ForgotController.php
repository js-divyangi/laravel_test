<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotController extends Controller
{
    //
    public function forgot1()
    {

        $page_title = 'forgot1.';
        $page_description = 'some description of the page';

        return view('pages.forgot.forgot1');
    }

    public function forgot2()
    {

        $page_title = 'forgot2.';
        $page_description = 'some description of the page';

        return view('pages.forgot.forgot2');
    }
    public function forgot3()
    {

        $page_title = 'forgot3.';
        $page_description = 'some description of the page';

        return view('pages.forgot.forgot3');
    }
    public function forgot4()
    {

        $page_title = 'forgot4.';
        $page_description = 'some description of the page';

        return view('pages.forgot.forgot4');
    }
    public function forgot5()
    {

        $page_title = 'forgot5.';
        $page_description = 'some description of the page';

        return view('pages.forgot.forgot5');
    }
    public function forgot6()
    {

        $page_title = 'forgot6.';
        $page_description = 'some description of the page';

        return view('pages.forgot.forgot6');
    }
}
