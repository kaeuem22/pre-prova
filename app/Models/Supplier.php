<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'phone',
        'address',
        'district',
        'city',
        'state',
        'zipcode',
]; // dizer quais campos podem ser salvos;
    protected $table = 'suppliers'; // dizer qual tabela do banco de dados esse model representa;
}
