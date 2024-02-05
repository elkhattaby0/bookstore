<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sectionTwo = [
            (object)["id"=> 1, "nbr"=> "8M+", "txt"=> "Reader", "img"=> '
                https://cdn-icons-png.flaticon.com/512/1830/1830769.png
            '],
            (object)["id"=> 2, "nbr"=> "53K+", "txt"=> "Author", "img"=> '
                https://cdn-icons-png.flaticon.com/512/206/206906.png
            '],
            (object)["id"=> 3, "nbr"=> "164K+", "txt"=> "Books", "img"=> '
                https://cdn-icons-png.flaticon.com/512/130/130304.png
            '],
            (object)["id"=> 4, "nbr"=>  "40K+", "txt"=> "Library", "img"=> '
                https://cdn-icons-png.flaticon.com/512/1164/1164620.png
            '],
        ];

        $category = [
            (object)['id' => 1, 'name' => 'Sports', 'bgcolor' => 'orange'],
            (object)['id' => 2, 'name' => 'Finance', 'bgcolor' => 'purple'],
            (object)['id' => 3, 'name' => 'Romance', 'bgcolor' => 'pink'],
            (object)['id' => 4, 'name' => 'Travel', 'bgcolor' => 'blue'],
            (object)['id' => 5, 'name' => 'Law', 'bgcolor' => 'gray'],
            (object)['id' => 6, 'name' => 'Nutrition', 'bgcolor' => 'red'],
        ];

        return view('components.home', compact('sectionTwo', 'category'));
    }
}
