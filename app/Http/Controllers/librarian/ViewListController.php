<?php

namespace App\Http\Controllers\librarian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewListController extends Controller
{
    public function viewList(){
        $books = DB::table('books') ->get();
        return view('librarian.dashboard', compact('books'));
    }
}
