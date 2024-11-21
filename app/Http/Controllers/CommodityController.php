<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Post;
use App\Models\Varietas;
use App\Models\Komoditas;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function index()
    {
        return view('home', ['title' => 'Dinas Perkebunan Jawa Barat']);
    }

    public function about()
    {
        return view('about', ['title' => 'About']);
    }

    public function posts()
    {   
    $query = Post::with(['varietas.item.komoditas']);

    if(request('search')) {
        $query->where('title','like','%' . request('search') . '%');
    }

    $posts = $query->paginate(8);

    return view('posts', ['title' => 'Produk Olahan', 'posts' => $posts]);
    }

    public function showPost(Post $post)
    {
        $post->load('varietas.item.komoditas');
        return view('post', ['title' => 'Single Post', 'post' => $post]);
    }

    public function varietas(Varietas $varietas)
    {
        $posts = $varietas->post()->with('varietas.item.komoditas')->get();
        return view('posts', [
            'title' => count($posts) . ' produk : varietas ' . $varietas->nama_varietas,
            'posts' => $posts
        ]);
    }

    public function komoditas(Komoditas $komoditas)
    {
        $posts = $komoditas->item()->with('varietas.post')->get()->flatMap(function ($item) {
            return $item->varietas->flatMap(function ($varietas) {
                return $varietas->post;
            });
        });
        
        return view('posts', [
            'title' => count($posts) . ' produk : ' . $komoditas->nama_komoditas,
            'posts' => $posts
        ]);
    }

    public function contact()
    {
        return view('contact', ['title' => 'Contact']);
    }

    public function strategis()
    {
        $strategis = Item::with('komoditas')->where('id_komoditas', 1)->get();
        return view('strategis', ['title' => 'Komoditas Strategis', 'strategis' => $strategis]);
    }

    public function prosfektif()
    {
        $prosfektif = Item::with('komoditas')->where('id_komoditas', 2)->get();
        return view('prosfektif', ['title' => 'Komoditas Prosfektif', 'prosfektif' => $prosfektif]);
    }

    public function unggul()
    {
        $unggul = Item::with('komoditas')->where('id_komoditas', 3)->get();
        return view('unggul', ['title' => 'Komoditas Unggul Lokal', 'unggul' => $unggul]);
    }

// app/Http/Controllers/CommodityController.php


public function showVarietasByItemStrategis(Item $item)
{
    $varietas = $item->varietas; // Ensure this is correctly retrieving the varietas
    return view('varietas', [
        'title' => 'Varietas dari ' . $item->nama_item,
        'varietas' => $varietas,
        'item' => $item,
    ]);
}

public function showVarietasByItemProsfektif(Item $item)
{
    $varietas = $item->varietas;
    return view('varietas', [
        'title' => 'Varietas dari ' . $item->nama_item,
        'varietas' => $varietas,
        'item' => $item,
    ]);
}

public function showVarietasByItemUnggul(Item $item)
{
    $varietas = $item->varietas;
    return view('varietas', [
        'title' => 'Varietas dari ' . $item->nama_item,
        'varietas' => $varietas,
        'item' => $item,
    ]);
}

// Show detail Varietas

public function showDetailVarietas(Varietas $varietas)
{
    // Memuat produk terkait varietas
    $varietas->load('post'); // Memuat relasi post yang terkait dengan varietas
    return view('details_varietas', [
        'title' => 'Detail Varietas ' . $varietas->nama_varietas,
        'varietas' => $varietas,
        'posts' => $varietas->post, // Mengirimkan produk yang terkait dengan varietas
    ]);
}




    
}