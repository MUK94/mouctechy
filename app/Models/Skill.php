<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Skill extends Model
{
    /*
        Skills Attributes
        * $this->attributes['id'] - int - contains the skill primary key
        * $this->attributes['title'] - string - contains the skill title
        * $this->attributes['image'] - string - contains the skill image
        * $this->attributes['created_at'] - timestamp - contains the skill creation date
        * $this->attributes['updated_at'] - timestamp - contains the skill update date

    */
    public static function validate($request)
    {
        $request -> validate([
            'title' => 'required|max:255',
            'image' => 'required',
        ]);
    }
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getTitle()
    {
        return $this->attributes['title'];
    }
    
    public function setTitle($title)
    {
        $this->attributes['title'] = $title;
        $slug = Str::slug($title, '-');
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}
