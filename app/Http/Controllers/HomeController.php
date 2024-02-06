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

        $books = [
            (object)["id" => 1, 'title' => 'Book_1', 'author' => 'Author_1', 'price' => 10.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 2, 'title' => 'Book_2', 'author' => 'Author_2', 'price' => 11.99, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 3, 'title' => 'Book_3', 'author' => 'Author_3', 'price' => 15.20, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 4, 'title' => 'Book_4', 'author' => 'Author_4', 'price' => 09.60, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 5, 'title' => 'Book_5', 'author' => 'Author_5', 'price' => 17.75, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 6, 'title' => 'Book_6', 'author' => 'Author_6', 'price' => 14.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 7, 'title' => 'Book_7', 'author' => 'Author_7', 'price' => 20.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 8, 'title' => 'Book_8', 'author' => 'Author_8', 'price' => 16.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823']
        ];

        return view('components.home', compact('sectionTwo', 'category', 'books'));
    }
}
