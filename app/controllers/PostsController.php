<?php

class PostsController extends \BaseController {


	public function __construct(){

		parent::__construct();

		$this->beforeFilter('auth', array('except'=> array('index', 'show')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');

		$var = Input::get('search');

		if(Input::has('search')){

			//searches in title or body
			$query->where('title', 'LIKE', "%$var%")
				  ->orWhere('body', 'LIKE', "%$var%");

			$posts = $query->orderBy('created_at', 'DESC')->paginate(4);

		} else {
			$posts = Post::with('user')->paginate(4);
		}

		return View::make('posts.index')->with('posts', $posts);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('posts.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$post = new Post();
		// call the validator function
		return $this->savePost($post);
	}//end store

	protected function savePost(Post $post)
	{
			$validator = Validator::make(Input::all(), Post::$rules);

			 // attempt validation
		    if ($validator->fails()) {
		        // validation failed, redirect to the post create page with validation errors and old inputs
				Session::flash('errorMessage', "Your message was not saved. Please try again.");

		        return Redirect::back()->withInput()->withErrors($validator);
			}

		    // validation succeeded, create and save the post
		    $post->user_id = Auth::id();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Session::flash('successMessage', "You saved sucessfully.");

			return Redirect::action('PostsController@show', $post->id);

	}//end check

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
		//$data = array('name' => $name);
        //return View::make('my-first-view')->with($data);
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);

		} catch (Exception $e){
			App::abort(404);
		}

	}//end show


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$post = Post::find($id);

		return View::make('posts.edit')->with('post', $post);
	}//end edit



	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//

		$post = Post::find($id);
		return $this->savePost($post);

	}//end update

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$post = Post::findOrFail($id);

		$post->delete();

		return Redirect::action('PostsController@index');
	}


}
