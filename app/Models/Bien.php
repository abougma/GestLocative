<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    protected $table = 'biens';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'titre',
        'description',
        'type',
        'adresse',
        'prix',
        'gestionnaire_id',
    ];

    public function gestionnaire()
    {
        return $this->belongsTo(Utilisateur::class, 'gestionnaire_id');
    }

    public function images()
    {
        return $this->hasMany(ImageBien::class, 'bien_id');
    }

    public function candidatures()
    {
        return $this->hasMany(Candidature::class, 'bien_id');
    }

    public function locataires()
    {
        return $this->hasMany(Locataire::class, 'bien_id');
    }
}
