<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }
}
