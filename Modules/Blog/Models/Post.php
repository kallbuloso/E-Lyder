<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ["author_id","title","slug"];
    protected $dates = ['published_at'];
    // protected $dates = [
    //     'expires_at',
    //     'outro_campo_do_tipo_timestamp',
    // ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";
        if (! is_null($this->image))
        {
            $imagePath = public_path() . "/vendors/images/" . $this->image;
            
            if (file_exists($imagePath)) $imageUrl = asset("vendors/images/" . $this->image);
        }
        return $imageUrl;
    }
    
    public function getDateAttribute($value)
    {   
        // \Carbon\Carbon::setLocale(str_replace('_', '-', app()->getLocale()));
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    public function scopeLatestFirst($query)
    {       
        return $query->orderBy('published_at', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->where("published_at", "<=",Carbon::now());
    }

}
