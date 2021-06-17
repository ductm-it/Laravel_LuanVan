<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'url_category_detail';

    public function product()
        {
            return $this->belongsTo( Product::class, 'id_url_category_detail');
        }
}
