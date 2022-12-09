<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackCatalog extends Model
{
    use HasFactory;

    protected $table = 'track_catalogs';
    protected $fillable = ['track_file','title','composer','artist_name'];

    public function catalogs()
    {
        return $this->belongsTo(Catalog::class);
    }
}
