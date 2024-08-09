<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $guarded = ['id'];


    public function scopeHomeProperty($query)
    {
        $query->select(['id','title','no_of_beds', 'price', 'short_description', 'thumbnail_image', 'link','brochure_pdf'])
        ->addSelect([
          'developer_title'=> Developer::select('title')->whereColumn('developer_id', 'developers.id'),
          'developer_image'=>Developer::select('developer_image')->whereColumn('developer_id' , 'developers.id')->take(1)
        ])
        ->orderBy('updated_at', 'desc');
    } 



}
