<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'category_image'];

    public function getCategoryImage(){
        if($this->category_image != null){
            return url($this->category_image);
        }else{
            return url('no-image.jpg');
        }
    }
    public function getImageAttribute(){
        return $this->getCategoryImage();
    }
}

