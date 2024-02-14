<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function ScopeLive($q){
        $q->where('p_status',1);
    }
}