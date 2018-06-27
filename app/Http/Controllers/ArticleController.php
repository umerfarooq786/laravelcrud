<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles= Article::all();

        return view('home',['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request , [
            'title' => 'required',
            'description' => 'required'
        ]);
        $articles= new Article;
        $articles->title=$request->input('title');
        $articles->description=$request->input('description');
        $articles->save();

        return redirect('/')->with('info','Article Saved Successfully !');
    }
    public function read($id)
    {
        $articles= Article::find($id);
        return view('read',['articles' => $articles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $this->validate($request , [
            'title' => 'required',
            'description' => 'required'
        ]);
        $data=array(
            'title'=> $request->input('title'),
            'description'=> $request->input('description')
        );
        Article::where('id',$id)->update($data);



        return redirect('/')->with('info','Article Updated Successfully !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $articles= Article::find($id);
        //print_r($articles);
        return view('update',['articles' => $articles]);
    }

    public function delete($id)
    {
        Article::where('id',$id)->delete();
        return redirect('/')->with('info','Article Deleted Successfully !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
