<?php
namespace App\Http\Controllers\Super;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('super.sidenav');
    }


    public function dashboard(Request $request)
    {
        return view('super.admin.dashboard');
    }


    public function provedores(Request $request)
    {
        return view('super.admin.provedores.index');
    }


    public function tokens(Request $request)
    {
        return view('super.admin.tokens');
    }


    public function produtos(Request $request)
    {
        return view('super.admin.produtos');
    }
}
