<?php

namespace App\Http\Controllers;

use App\Developer;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developers = Developer::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.developer.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.developer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $developer = Developer::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            
            
        ]);

        if($request->hasFile('developer_image')){
            $developer_image = $request->developer_image;
            $developer_image_new_name = time() . '.' . $developer_image->getClientOriginalExtension();
            $developer_image->move(public_path('images/developer_images/'), $developer_image_new_name);
            $developer->developer_image = $developer_image_new_name;
            $developer->save();
        }

        

        Session::flash('success', 'Developer created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $developer)
    {
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function edit(Developer $developer)
    {
       
        return view('admin.developer.edit', compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Developer $developer)
    {

        $developer->title = $request->title;
        $developer->slug = Str::slug($request->title);

        if($request->hasFile('developer_image')){
            $developer_image = $request->developer_image;
            $developer_image_new_name = time() . '.' . $developer_image->getClientOriginalExtension();
            if(!empty($developer->developer_image)){
                unlink(public_path('images/developer_images/'.$developer->developer_image));
            }
            
            $developer_image->move(public_path('images/developer_images/'), $developer_image_new_name);
            $developer->developer_image = $developer_image_new_name;
        }

       
        

        $developer->save();

        Session::flash('success', 'Developer updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Developer $developer)
    {
        if($developer){
            if(!empty($developer->developer_image)){
                unlink(public_path('images/developer_images/'.$developer->developer_image));
            }

            $developer->delete();

            Session::flash('success', 'Developer deleted successfully');
        }

        return redirect()->back();
    }
}
