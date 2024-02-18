<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Dashboard;
use App\Models\Language;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class BooksController extends Controller
{
    public function index(Request $request){
        // Bag
        $bag = DB::table('cache')->count();
        
        $dashboard = Dashboard::paginate(20);
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

        //category
        $categories = Categorie::all();
        if(isset($request->byCategory)){
            $dashboard = Dashboard::where('catigory_id', $request->byCategory)->paginate(20);
        };

        //format
        if(isset($request->byFormat)){
            $dashboard = Dashboard::where('format', $request->byFormat)->paginate(20);
        };
        //Price
        switch ($request->byPrice) {
            case '1':
                $dashboard = Dashboard::where('price', '<', 15)->paginate(20);
                break;
            case '2':
                $dashboard = Dashboard::where('price', '>=', 15)
                ->where('price', '<', 25)
                ->paginate(20);
                break;
            case '3':
                $dashboard = Dashboard::where('price', '>=', 25)
                ->where('price', '<', 50)
                ->paginate(20);
                break;
            case '4':
                $dashboard = Dashboard::where('price', '>', 50)->paginate(20);
                break;
        }

        // Language
            $language = Language::all();
            if(isset($request->byLanguage)){
                $dashboard = Dashboard::where('language_id', $request->byLanguage)->paginate(20);
            };
        
        
        return view('components.book', compact('dashboard', 'categories', 'language', 'bag'));
    }


    public function details(Request $request, $id)  {
        // Bag
        $bag = DB::table('cache')->count();
        $books = Dashboard::where('id', $id)->get();
        return view('components.details', compact('books', 'bag'));
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
        
        

        if( Cache::get('bag'.$id) == null){
            Cache::put('bag'.$id, $bag, 60*60);
        } else {
            $cache = Cache::get('bag'.$id);
            $bag = [
                'book_id' => $id,
                'quantity' => $request->count + $cache['quantity'],
                'date' => date("Y-m-d h:i")
            ];
            Cache::put('bag'.$id, $bag, 60*60);   
        }
        
        return redirect()->back();
        
    }
}
