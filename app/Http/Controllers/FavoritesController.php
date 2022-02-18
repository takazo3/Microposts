<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;

class FavoritesController extends Controller
{
    public function store($micropost)
    {
        
        \Auth::user()->favorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }


    public function destroy($micropost)
    {
        
       
        \Auth::user()->unfavorite($micropost);
        // 前のURLへリダイレクトさせる
           
           return back();
    }
}    //

