<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['description']; // dizer quais campos podem ser salvos;
    protected $table = 'categories'; // dizer qual tabela do banco de dados esse model representa;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
