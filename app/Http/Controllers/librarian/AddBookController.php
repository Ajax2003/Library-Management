<?php

namespace App\Http\Controllers\librarian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddBookController extends Controller
{
    public function viewAdd(){
        return view ('librarian.add');
    }

    public function addBook(Request $request){


        $inserted = DB::table('books')->insert([
            'book_name' => $request->input('bname'), // Assuming the application date should be set to the current date and time
            'category' => $request->input('cate'),
            'author' => $request->input('author'),
            'published_date' => $request->input('pdate'),
            'is_borrowed' => 0,
            'updated_at' => now(),
        ]);
        if ($inserted) {
            return redirect('librarian/dashboard')->with('success', 'Book Added successfully!');
        }
        else {
            return redirect('librarian/add')->withError('error', 'Error');
        }
       /* naka comment out to ah wala pa tayong homepage para sa admin if ($inserted) {
            return redirect('/homepage');->route('home.view')->with('success', 'Adoption application submitted successfully!');
        } else {
            return redirect('/register');
        }*/
    }
}
