<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class BooksController extends Controller
{
    public function index(Request $request){

        $dashboard = Dashboard::paginate(10);
        $count = Dashboard::count();
        switch($request->category) {
            case '1':
                $dashboard = Dashboard::orderByDesc('created_at')->paginate(20);
                break;
            case '2':
                $dashboard = Dashboard::orderBy('price')->paginate(20);
                break;
            case '3':
                $dashboard = Dashboard::orderByDesc('price')->paginate(20);
                break;
            case '4':
                $dashboard = Dashboard::orderByDesc('created_at')->paginate(20);
                break;
        };

        return view('components.book', compact('dashboard', 'count'));
    }


    public function details(Request $request, $id)  {
        $books = Dashboard::where('id', $id)->get();
        return view('components.details', compact('books'));
    }

    public function addToBag(Request $request , $id) {
        if(!is_numeric($request->count) || $request->count >99 || $request->count < 1){
            return redirect()->back()->with('countMsg', 'Check quantity');
        } else {
            $bag = [
                'book_id' => $id,
                'quantity' => $request->count,
                'date' => date("Y-m-d h:i")
            ];
        }        
        
        Cookie::queue('bag', serialize($bag), 24 * 60);
        return count(unserialize($request->cookie('bag')));
        // return unserialize($request->cookie('bag'));
        // return redirect()->back();
    }
}
