<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable =[
        'product_name',
        'id_kategori',
        'owner',
        'price',
        'url',
        'desc',
        'image',
        'contact',
    ];
    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
