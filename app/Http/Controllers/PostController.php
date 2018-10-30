<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posted;

use Illuminate\Support\Facades\Session;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Create a variable and store all the posts from the database in it.
        $allPosts = Posted::all();

        //return the view and pass in the above variable.
        return view('posts.index')->with('allpost', $allPosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'message' => 'required'
        ));

        //Store data into database.
        $post = new Posted;
        $post->title = $request->title;
        $post->message = $request->message;
        $post->save();

        //Send message to users using session
        Session::flash('success', 'The blog post was successfully saved!');

        //redirect to another page.
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //The poster variable is created to find the primary id in the database by using find method of the model.
        $poster = Posted::find($id);
        //This the page where it's redirected after saving data into the database.
        return view('posts.show')->with('postShow', $poster);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and store it into the a variable.
        $postEdit = Posted::find($id);

        //return the view and pass the variable to it.
        return view('posts.edit')->with('editPost', $postEdit);
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
        //validate the data
        $this->validate($request, array('title' => 'required|max: 255', 'message' => 'required'));

        //find the post and Store into the database
        $updatePost = Posted::find($id);

        $updatePost->title = $request->input('title');
        $updatePost->message = $request->input('message');
        $updatePost->save();

        //send flash message to user by through session
        Session::flash('success', 'The blog post was successfully updated!');

        //return to view posts.show
        return redirect()->route('posts.show', $updatePost->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find the post in the database.
        $deletePost = Posted::find($id);
        //Delete post from the database.
        $deletePost->delete();
        //send message using session flash.
        Session::flash('success', "The post was successfully deleted.");
        //redirect to the index page.
        return redirect()->route('posts.index');
    }
}
