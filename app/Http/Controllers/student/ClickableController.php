<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClickableController extends Controller
{
    public function clickableCard($id)
    {
        
        $books = DB::table('books')->where('id', $id)->first();

        if (!$books) {
            // If the pet doesn't exist, return a 404 Not Found response
            abort(404);
        }
        return view('user.clickable', ['books' => $books]);
    }
}