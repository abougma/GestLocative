<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    use HasFactory;

    protected $table = 'locataires';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'bien_id',
        'date_debut',
        'date_fin',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }

    public function quittances()
    {
        return $this->hasMany(Quittance::class, 'locataire_id');
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class, 'locataire_id');
    }
}
