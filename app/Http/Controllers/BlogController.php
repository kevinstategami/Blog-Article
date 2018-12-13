<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Kategori;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog.index')->with('blog', $blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.blog.create')->with('kategori', $kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new Blog;
        $post->judul = $r->input('judul');
        $post->id_kategori = $r->input('id_kategori');
        $post->pembuat = $r->input('pembuat');
        $post->isi = $r->input('isi');
        $post->save();

        return redirect(url('blog'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Blog::find($id);
        $kategori = Kategori::all();
        return view('admin.blog.edit')->with('edit', $edit)->with('kategori', $kategori);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $update = Blog::find($r->input('id'));
        $update->judul = $r->input('judul');
        $update->id_kategori = $r->input('id_kategori');
        $update->pembuat = $r->input('pembuat');
        $update->isi = $r->input('isi');
        $update->update();

        return redirect(url('blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Blog::find($id);
        $delete->delete();
        return redirect(url('blog'));
    }
}
