<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        //return view("blogs.show", compact("blogs"));
        return view("blogs.index", ['blogs' => $blog]);
    }


    public function create()
    {
        return view("blogs.create");
    }


    public function store(Request $request)
    {
        $authorId = Auth::id();

        $request->validate([
            'name' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'author_id' => 'nullable',
        ]);
        // Create a new post
        $blog = Blog::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $authorId,
        ]);

        return redirect()->route('blogs.show', ['id' => $blog->id])
        ->with('success', 'Blog agregado con éxito.');

        // $validatedData = $request->validate([
        //     'title' => 'required|min:5|max:255',
        //     'body' => 'required',
        //     'author_id' => 'required|exists:users,id',
        // ]);
        // try {
        //     $blog = Blog::create($validatedData);
        //     return redirect()->route('blogs.show', $blog)->with('success', 'Blog agregado con exito.');
        // } catch (\Exception $e) {
        //     return back()->with('error', 'Ocurrio un error al crear el blog. Por favor, reintente.');
        // }
    }
    public function show($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->route('blogs.index')->with('error', 'Blog no encontrado.');
        }

        return view('individualBlogs', compact('blog'));
    }

    // public function individualBlogs(Blog $blog)
    // {
    //     return view('individualBlogs', compact('blog'));
    // }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required|min:5|max:255',
            'description' => 'required',
            'author_id' => 'required|exists:users,id',
        ]);
        try {
            $blog->update($validatedData);
            return redirect()->route('blogs.show', $blog)->with('success', 'Blog actualizado con exito.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrio un error al actualizar el blog. Por favor, reintente.');
        }
    }

    public function destroy(Blog $blog)
    {
        try {

            $blog->delete();
            return redirect()->route('blogs.index')->with('success', 'Blog eliminado con exito.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrio un error al eliminar el blog. Por favor, reintente.');
        }
    }
}
