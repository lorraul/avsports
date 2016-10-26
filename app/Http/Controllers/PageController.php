<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function home(){
        $title = 'Home';
        $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
        return view('staticPage', compact('title', 'text'));
    }
    public function contact(){
        $title = 'Contact';
        $text = 'Contact information.';
        return view('staticPage', compact('title', 'text'));
    }
    public function products(){
        $title = 'Products';
        $categories = ['Category 1', 'Category 2', 'Category 3'];
        $text = '<ul>';
        foreach ($categories as $key => $category) {
            $text .= '<li><a href="/category/'.$key.'">'.$category.'</a></li>';
        }
        $text .= '</ul>';
        
        return view('staticPage', compact('title', 'text'));
    }
    public function category($id){
        $title = 'Category #'.$id;
        $text = '<ul>';
        for ($i = 0; $i <= 10; $i++) {
            $text .= '<li><a href="/product/'.$i.'">Product #'.$i.'</a></li>';
        }
        $text .= '</ul>';
        return view('staticPage', compact('title', 'text'));
    }
    public function product($id){
        $name = 'Product #'.$id;
        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $size = '23';
        $image = 'hatizsak.jpg';
        $category = 1;
        return view('productPage', compact('name', 'description', 'size', 'image', 'category'));
    }
}
