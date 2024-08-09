<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmenityImage extends Model
{
    protected $table = 'amenities_images';
    protected $guarded = ['id'];

    public function scopeImageIdFromSettingId($query, $id)
    {
        $query->select(['id','name'])
        ->where('setting_id', $id);
    } 

}