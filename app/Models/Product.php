<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFormatedPriceAttribute()
    {
        return "Rp" . number_format($this->price, 2, ',', '.');
    }

    public function getImageProductAttribute()
    {

        if (is_null($this->image_path)) {
            return 'https://placehold.co/400x225';
        }

        return asset('/storage/'. $this->image_path);
    }

    public function getLastUpdateAttribute()
    {
        return $this->updated_at->diffForHumans();
    }

    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->description, 100, '...');
    }
}
