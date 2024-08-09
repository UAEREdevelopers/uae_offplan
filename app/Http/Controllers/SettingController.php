<?php

namespace App\Http\Controllers;

use Session;
use App\Setting;
use App\AmenityImage;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        $setting = Setting::first();
        $amenity_images = AmenityImage::all();
        
        return view('admin.setting.edit', compact('setting','amenity_images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',

        ]);

        $setting = Setting::first();
        //$setting->update($request->all());
        $setting->email = $request->email;
        $setting->phone = $request->phone;

        if($request->hasFile('site_logo')){
            $image = $request->site_logo;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/setting/', $image_new_name);
            $setting->site_logo = '/storage/setting/' . $image_new_name;
            $setting->save();
        }

        $settingID = 1;
        $oldMedia = AmenityImage::ImageIdFromSettingId($settingID)->get();
        $old = $request->old;
        foreach ($oldMedia as $media) {
            if (!in_array($media->id, $old)){
                unlink(public_path('website/images/amenities_images/'.$media->name));
                AmenityImage::find($media->id)->delete();
            } 
            
        }

        if($files=$request->file('photos')){
            foreach($files as $key=>$file){
                $image_new_name = time() .'_'. $key .'.'. $file->getClientOriginalExtension();
                $file->move(public_path('website/images/amenities_images/'), $image_new_name);
                $im = new AmenityImage;
                $im->setting_id = 1;
                $im->name = $image_new_name;
                $im->save();


            }
        }

        $setting->save();

        Session::flash('success', 'Setting updated successfully');
        return redirect()->back();
    }
}
