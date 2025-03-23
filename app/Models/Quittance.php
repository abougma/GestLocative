<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quittance extends Model
{
    use HasFactory;

    protected $table = 'quittances';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'locataire_id',
        'montant',
        'date_paiement',
        'chemin_quittance',
    ];

    public function locataire()
    {
        return $this->belongsTo(Locataire::class, 'locataire_id');
    }
}
