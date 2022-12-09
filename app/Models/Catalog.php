<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalogs';
    protected $fillable = ['uploader_by','cover_artwork','title','gendre','sub_gendre','record_label','produced_by','production_year','first_realease_date','realease_date','lyric_language','lyric_url','description'];

}
