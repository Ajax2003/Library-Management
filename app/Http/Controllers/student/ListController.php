<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ListController extends Controller
{
    public function viewList(){
        $books = DB::table('books') ->get();
        return view('user.list', compact('books'));
}
}