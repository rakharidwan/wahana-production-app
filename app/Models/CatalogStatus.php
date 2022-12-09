<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogStatus extends Model
{
    use HasFactory;

    protected $table = 'catalog_statuss';
    protected $fillable = ['status'];
}
