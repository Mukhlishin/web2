<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;


class Barang extends Model
{
    use Hasfactory;

    protected #table = 'barang';
    protected $guarded = ['id']
    public $timestamps = false;
}
