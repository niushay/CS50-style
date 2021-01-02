<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Exception\UnableToBuildUuidException;

class Style extends Model
{
    protected $fillable = ['title','description', 'style_image','category_id','user_id'];

    public function categories(){
        return $this->hasMany('App\Category');
    }

    public function getStyleImage(){
        if($this->style_image != null){
            return url($this->style_image);
        }else{
            return url('no-image.jpg');
        }
    }

    public function getImageAttribute(){
        return $this->getStyleImage();
    }
}
