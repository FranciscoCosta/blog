<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

       return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'image' => ['required', 'max:2028', 'image'],
            'title' => [ 'required', 'max:255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ],[
            'image.required' => 'Imagem é obrigatória',
            'image.max' => 'Imagem deve ter no máximo 2028 bytes',
            'image.image' => 'Imagem inválida',
            'title.required' => 'Título é obrigatório',
            'title.max' => 'Título deve ter no máximo 255 caracteres',
            'category_id.required' => 'Categoria é obrigatória',
            'category_id.integer' => 'Categoria inválida',
            'description.required' => 'Descrição é obrigatória'
        ]);
    
        
        
        $fileName = time().'_'.$request->image->getClientOriginalName();
        
        $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
        
        
        $post = new Post();
    
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->image = 'storage/'. $filePath;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {

        $categories = Category::all();


        $post = Post::find($id);
        return view('update', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
