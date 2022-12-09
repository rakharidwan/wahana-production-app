<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalogs';
    protected $fillable = ['uploader_by','cover_artwork','title','gendre','sub_gendre','record_label','produced_by','production_year','first_release_date','release_date','lyric_language','lyric_url','description'];

    public function status()
    {
        return $this->hasOne(CatalogStatus::class);
    }

    public function uploader()
    {
        return $this->belongsTo(User::class);
    }

    public function trackCatalogs()
    {
        return $this->hasMany(TrackCatalog::class);
    }
}
