<?php

namespace App\Http\Controllers;

use Session;
use App\Property;
use App\Developer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developers = Developer::all();
        return view('admin.property.create', compact(['developers']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
           
        ]);

        $property = Property::create([
            'title' => $request->title,
            'link' => $request->link,
            'developer_id' => $request->developer_id,
            'no_of_beds' => $request->no_of_beds,
            'price' => $request->price,
            'short_description' => $request->short_description,
        ]);

        

        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->thumbnail_image;
            $thumbnail_image_new_name = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move(public_path('images/thumbnail_images/'), $thumbnail_image_new_name);
            $property->thumbnail_image = $thumbnail_image_new_name;
            $property->save();
        }

        if($request->hasFile('brochure_pdf')){
            $brochure_pdf = $request->brochure_pdf;
            $brochure_pdf_new_name = time() . '.' . $brochure_pdf->getClientOriginalExtension();
            $brochure_pdf->move(public_path('images/brochure_pdfs/'), $brochure_pdf_new_name);
            $property->brochure_pdf =$brochure_pdf_new_name;
            $property->save();
        }


        

        Session::flash('success', 'Property created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $developers = Developer::all();
        return view('admin.property.edit', compact('property','developers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        
        $this->validate($request, [
            'title' => "required",
        ]);
        
        $property->title = $request->title;
        $property->link = $request->link;
        $property->developer_id = $request->developer_id;
        $property->no_of_beds = $request->no_of_beds;
        $property->price = $request->price;
        

        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->thumbnail_image;
            $thumbnail_image_new_name = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            if(!empty($property->thumbnail_image)){
                unlink(public_path('images/thumbnail_images/'.$property->thumbnail_image));
            }
            
            $thumbnail_image->move(public_path('images/thumbnail_images/'), $thumbnail_image_new_name);
            $property->thumbnail_image = $thumbnail_image_new_name;
        }


        if($request->hasFile('brochure_pdf')){
            $brochure_pdf = $request->brochure_pdf;
            $brochure_pdf_new_name = time() . '.' . $brochure_pdf->getClientOriginalExtension();
            if(!empty($property->brochure_pdf)){
                unlink(public_path('images/brochure_pdfs/'.$property->brochure_pdf));
            }
            $brochure_pdf->move(public_path('images/brochure_pdfs/'), $brochure_pdf_new_name);
            $property->brochure_pdf = $brochure_pdf_new_name;
        }

        $property->short_description = $request->short_description;


        $property->save();


        Session::flash('success', 'Property updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        if($property){

            if(!empty($property->thumbnail_image)){unlink(public_path('images/thumbnail_images/'.$property->thumbnail_image));}
            if(!empty($property->brochure_pdf)){unlink(public_path('images/brochure_pdfs/'.$property->brochure_pdf));}

            $property->delete();

            Session::flash('success', 'Property deleted successfully');
            return redirect()->route('property.index');
        }
    }
}
