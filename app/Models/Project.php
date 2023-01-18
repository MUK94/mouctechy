<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    /*
        Project Attributes
        * $this->attributes['id'] - int - contains the project primary key (id)
        * $this->attributes['title'] - string - contains the project title
        * $this->attributes['slug'] - string - contains the project title-slug
        * $this->attributes['description'] - string - contains the project description
        * $this->attributes['stack'] - string - contains the project stack
        * $this->attributes['image'] - string - contains the project image
        * $this->attributes['github'] - string/url - contains the project github link
        * $this->attributes['demo'] - string/url - contains the project youtube or website link
        * $this->attributes['created_at'] - timestamp - contains the project creation date
        * $this->attributes['updated_at'] - timestamp - contains the project update date

    */
    public static function validate($request)
    {
        $request -> validate([
            'title' => 'required|max:255',
            'stack' => 'required',
            'github' => 'required|max:255',
            'demo' => 'required|max:255',
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

    public function getSlug()
    {
        return $this->attributes['slug'];
    }

    public function setSlug($slug)
    {
        $this->attributes['slug'] = $slug;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getStack()
    {
        return $this->attributes['stack'];
    }

    public function setStack($stack)
    {
        $this->attributes['stack'] = $stack;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getGithub()
    {
        return $this->attributes['github'];
    }

    public function setGithub($github)
    {
        $this->attributes['github'] = $github;
    }

    public function getDemo()
    {
        return $this->attributes['demo'];
    }

    public function setDemo($demo)
    {
        $this->attributes['demo'] = $demo;
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
