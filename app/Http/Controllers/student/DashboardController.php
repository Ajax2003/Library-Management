<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    //This method will show the dashboard page for users
    public function index() {
        return view('user.dashboard');
    }

    public function viewList(){
        $books = DB::table('books') ->get();
        return view('user.list', compact('books'));
    }

}
