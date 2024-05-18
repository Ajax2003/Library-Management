<?php

namespace App\Http\Controllers\librarian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ViewBorrowedController extends Controller
{
    public function viewBorrowed(){
        $books = DB::table('books')
            ->where('is_borrowed',1)
            ->get();
        return view('librarian.borrowed', compact('books'));
    }
}
