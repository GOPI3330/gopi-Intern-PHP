<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
        
    }

   
     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

{
    $data = new blog();
    $data->title=$request->Title;
    $data->description=$request->Textarea;
    $data->save();    // var_dump($request->Title);
    return redirect()->route('home.views') ->withMessage('The blog created successfully...');
    // Validate the request data
    
    // $data = $request->validate([
    //     'title' => 'required|string|max:255',
    //     'description' => 'required|string'
    // ]);
    

    // try {
    //     // Create the blog post
    //     Blog::create($data);

    //     // Return a success response
    //     return response()->json(['message' => 'Blog post created successfully.'], 201);
    // } catch (\Exception $e) {
    //     // Handle any errors
    //     return response()->json(['error' => 'Failed to create blog post.'], 500);
    // }
}

    
    
     /**
     * Display the specified resource.
     */
    public function views()
    {
        $blog=blog::orderBy('id','desc')->paginate(10);
        return view('views',compact('blog'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        
    }
}
