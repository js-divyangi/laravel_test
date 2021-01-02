<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register1()
    {

        $page_title = 'register1.';
        $page_description = 'some description of the page';

        return view('pages.register.register1');
    }

    public function register2()
    {

        $page_title = 'register2.';
        $page_description = 'some description of the page';

        return view('pages.register.register2');
    }
    public function register3()
    {

        $page_title = 'register3.';
        $page_description = 'some description of the page';

        return view('pages.register.register3');
    }
    public function register4()
    {

        $page_title = 'register4.';
        $page_description = 'some description of the page';

        return view('pages.register.register4');
    }
    public function register5()
    {

        $page_title = 'register5.';
        $page_description = 'some description of the page';

        return view('pages.register.register5');
    }
    public function register6()
    {

        $page_title = 'register6.';
        $page_description = 'some description of the page';

        return view('pages.register.register6');
    }

    
}
