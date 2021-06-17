<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;
    protected $table = 'information_ranking_supplier';
    
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
    
    
}
