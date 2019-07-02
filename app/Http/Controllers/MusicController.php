<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Music::orderBy('id', 'DESC')->paginate(3);
      return view('index', ['posts' => $posts]);
        //return view('new');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:3|max:20',
            'author' => 'required|min:3|max:40',
            'ganer' => 'required|min:3|max:40',
        ]);

        $music = new Music;
        $music->name = request('name');
        $music->author = request('author');
        $music->genre = request('ganer');
        $music->date = time();
        $music->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Music::where('id', $id)->first();
        if (!isset($post)) return redirect('/');
        return view('edit', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post = Music::where('id', $id)->first();
      if (!isset($post)) return redirect('/');

      $this->validate(request(), [
          'name' => 'required|min:3|max:20',
          'author' => 'required|min:3|max:40',
          'ganer' => 'required|min:3|max:40',
      ]);
      
        Music::where('id', $id)->update([
          'name' => request('name'),
          'author' => request('author'),
          'genre' => request('ganer'),
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Music::where('id', $id)->first();
        if (!isset($post)) return redirect('/');
        $post->delete();
        return redirect('/');
    }
}
