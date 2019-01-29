<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $fillable = [
        'street',
        'city',
        'zip',
        'country',
        'state',
        'price',
        'description'
    ];
    /*
     * Find the images at a given address
     */

    public static function LocatedAt( $zip, $street)
    {
        $street = str_replace('-', '', $street);
        return static::where(compact('zip', 'street'))->first();

    }
    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
