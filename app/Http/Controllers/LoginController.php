<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    
    public function login1() {
 
         $page_title = 'login1.';
         $page_description = 'some description of the page';
    
         return view('pages.login.login1');
        
    }

    public function login2() {
 
        $page_title = 'login2.';
        $page_description = 'some description of the page';
   
        return view('pages.login.login2');
       
   }

   public function login3() {
 
    $page_title = 'login3.';
    $page_description = 'some description of the page';

    return view('pages.login.login3');
   
}
public function login4() {
 
    $page_title = 'login4.';
    $page_description = 'some description of the page';

    return view('pages.login.login4');
   
}
public function login5() {
 
    $page_title = 'login5.';
    $page_description = 'some description of the page';

    return view('pages.login.login5');
   
}
public function login6() {
 
    $page_title = 'login6.';
    $page_description = 'some description of the page';

    return view('pages.login.login6');
   
}

public function test() {
 
    $page_title = 'test.';
    $page_description = 'some description of the page';

    return view('pages.login.test');
   
}



    
}
