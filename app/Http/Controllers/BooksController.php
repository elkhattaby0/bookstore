<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(){

        $dashboard = Dashboard::orderByDesc('created_at')->get();
        $count = Dashboard::count();



        
        $books = [
            (object)["id" => 1, 'title' => 'Book_1', 'author' => 'Author_1', 'price' => 10.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 2, 'title' => 'Book_2', 'author' => 'Author_2', 'price' => 11.99, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 3, 'title' => 'Book_3', 'author' => 'Author_3', 'price' => 15.20, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 4, 'title' => 'Book_4', 'author' => 'Author_4', 'price' => 09.60, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 5, 'title' => 'Book_5', 'author' => 'Author_5', 'price' => 17.75, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 6, 'title' => 'Book_6', 'author' => 'Author_6', 'price' => 14.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 7, 'title' => 'Book_7', 'author' => 'Author_7', 'price' => 20.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 8, 'title' => 'Book_8', 'author' => 'Author_8', 'price' => 16.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 9, 'title' => 'Book_9', 'author' => 'Author_1', 'price' => 10.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 10, 'title' => 'Book_10', 'author' => 'Author_2', 'price' => 11.99, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 11, 'title' => 'Book_11', 'author' => 'Author_3', 'price' => 15.20, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 12, 'title' => 'Book_12', 'author' => 'Author_4', 'price' => 09.60, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 13, 'title' => 'Book_13', 'author' => 'Author_5', 'price' => 17.75, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 14, 'title' => 'Book_14', 'author' => 'Author_6', 'price' => 14.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823'],
            (object)["id" => 15, 'title' => 'Book_15', 'author' => 'Author_7', 'price' => 20.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823'],
            (object)["id" => 16, 'title' => 'Book_16', 'author' => 'Author_8', 'price' => 16.00, 'img' => 'https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823']
        ];

        return view('components.book', compact('books', 'dashboard', 'count'));
    }



    public function details(Request $request, $id)  {
        $books = Dashboard::where('id', $id)->get();
        return view('components.details', compact('books'));
    }
}
