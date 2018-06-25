<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPost = Post::all();
        return view('admin/showpost',compact('listPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/post');
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
        $this->validate($request,[
          'tittle'=>'required',
          'subtittle' => 'required',
          'slug' =>'required',
          'textBlog' =>'required'
        ]);
        $post = new Post;
        $post->tittle = $request->tittle;
        $post->subtittle = $request->subtittle;
        $post->slug = $request->slug;
        $post->bodyText = $request->textBlog;
        if($request->status==null){
              $request->status = 'off';
        }
        $post->status = $request->status;
        $post->save();
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin/editpost');
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
        $postEdit = Post::find($id);
        return view('admin/editpost',compact('postEdit'));
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
      $postUpdate = Post::find($id);
      $postUpdate->tittle = $request->tittle;
      $postUpdate->subtittle = $request->subtittle;
      $postUpdate->slug = $request->slug;
      $postUpdate->bodyText = $request->textBlog;
      if($request->status==null){
            $request->status = 'off';
      }
      $postUpdate->status = $request->status;
      $postUpdate->save();
      return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
