<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    //
    protected $table = 'marks';
    protected $primarykey = 'id';
    protected $fillable = [
    'id','name'
    ];
    public function mark()
    {
        return $this->hasmany(Mark::class);
    }
}
