<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function moreActivity()
    {
        return $this->hasMany(Activity::class, 'parent_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(ActivityPicture::class);
    }

    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 80);
    }

    public function getPortadaAttribute()
    {
        $images = $this->images;

        if (isset($images[0])) {
            return $images[0]->src;
        } else {
            return asset('assets/images/default_portada.png');
        }
    }
}
