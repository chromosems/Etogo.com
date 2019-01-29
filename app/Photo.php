<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = ['path'];
    protected $baseDir = 'images/photos';

    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }

    public static function saveAs(UploadedFile $file)
    {
        dd($file);
//        $photo = new static;
        $name = time() . $file->getClientOriginalName();
        $this->path = $this->baseDir . '/' . $name;
        $file->move($this->baseDir, $name);
        return $this;
    }
}

