<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $without = ['bookmark'];

    public function bookmark()
    {
        return $this->hasMany(Bookmark::class);
    }

    public function textbook()
    {
        return $this->hasOne(Textbook::class);
    }

    public function magazine()
    {
        return $this->hasOne(Magazine::class);
    }

    public function paper()
    {
        return $this->hasOne(Paper::class);
    }

    public function thesis()
    {
        return $this->hasOne(Thesis::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
