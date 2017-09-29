<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    //
    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable = [
    'id','name','price','marks_id'
    ];
    public function product()
    {
        return $this->belongsto(Product::class);
    }
}
