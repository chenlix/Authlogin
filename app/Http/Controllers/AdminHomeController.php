<?php namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
/**
 * Created by PhpStorm.
 * User: Flemming
 * Date: 23/06/2015
 * Time: 16:57
 */
class AdminHomeController extends Controller
{

    public function index()
    {
        print_r(Auth::admin()->user()->email);
        echo Auth::admin()->get()->email;
        return view('admin.pages.home');
    }
}