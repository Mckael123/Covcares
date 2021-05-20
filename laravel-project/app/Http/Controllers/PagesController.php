<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PagesController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('index');
    }

    public function landproduk()
    {
        return view('landproduk');
    }
    public function news()
    {
        return view('news');
    }
    public function about()
    {
        return view('about');
    }
    public function covinfo()
    {
        return view('covinfo');
    }

    public function Login()
    {
        return view('Login');
    }
    
    function indexlogin(){
        return view('indexlogin');
    }

    function home(){
        return view('home');
    }

    function admin(){
        return view('admin');
    }

    function about(){
        return view('about');
    }

    function about2(){
        return view('about2');
    }

    function login(){
        return view('login');
    }

    function registrasi(){
        return view('registrasi');
    }

    function editnews(){
        return view('editnews');
    }

    function verifyadmin(){
        return view('verifyadmin');
    }

    function verifylist(){
        return view('verifylist');
    }

    function editproduct(){
        return view('editproduct');
    }
}
