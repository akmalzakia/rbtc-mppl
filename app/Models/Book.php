<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Book extends Model
{
    use HasFactory, Sluggable;
    

    protected $guarded = ['id'];

    protected $without = ['bookmark'];

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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['sort'] ?? false, function($query, $sort) {
            return $query->orderBy('created_at', $sort);
        });

        $query->when($filters['book_type'] ?? false, function($query, $type) {
            $query->when($type[0] ?? false, function($query) {
                return $query->where('book_type', 'textbook');
            });

            $query->when($type[1] ?? false, function($query) {
                return $query->where('book_type', 'magazine');
            });

            $query->when($type[2] ?? false, function($query) {
                return $query->where('book_type', 'paper');
            });
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
