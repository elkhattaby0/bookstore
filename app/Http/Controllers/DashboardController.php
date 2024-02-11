<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Dashboard;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user-dash');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Dashboard $dashboard)
    {
        $catigorie = Categorie::all();
        $language = Language::all();
        return view('dashboard.create-user-dash', compact('catigorie', 'language'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('covers', 'public');
        $title = $request->input('title');
        $price = $request->input('price');
        $details = $request->input('details');
        $language = $request->input('language_id');
        $catigory = $request->input('catigory_id');
        $user_id = Auth::id();
        // dd(Auth::id());
        // dd($request);
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpge,svg|max:10240',
            'title' => 'required|min:5',
            'price' => 'required',
            'details' => 'required|min:5',
            'language_id' => 'required',
            'catigory_id' => 'required'
        ]);
        
        Dashboard::create([
            'image' => $image,
            'title' => $title,
            'price' => $price,
            'details' => $details,
            'user_id' => $user_id,
            'language_id' => $language,
            'catigory_id' => $catigory
        ]);

        return to_route('user-dash');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $books = Dashboard::where('user_id', Auth::id())->get();
        return view('dashboard.show-user-dash', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $id)
    {
        // dd($id);
        $id->delete();
        return to_route('show-user-dash')->with('destroymsg', 'Deleted successfully');
    }
}
