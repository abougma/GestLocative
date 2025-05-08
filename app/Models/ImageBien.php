<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ImageBien extends Model
{
    use HasFactory;

    protected $table = 'images_biens';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'bien_id',
        'chemin_image',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($bien) {
            if (empty($bien->id)) {
                $bien->id = (string) Str::uuid(); // Génére un UUID si non défini
            }
        });
    }
    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }
}
