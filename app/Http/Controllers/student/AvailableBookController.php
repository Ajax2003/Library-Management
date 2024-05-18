<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AvailableBookController extends Controller
{
    public function viewAvailable(){
        $books = DB::table('books')
            ->where('is_borrowed',0 )
            ->get();
        return view('user.available', compact('books'));
    }
}