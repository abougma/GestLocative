<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $table = 'demandes';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'locataire_id',
        'type_demande',
        'description',
        'statut',
    ];

    public function locataire()
    {
        return $this->belongsTo(Locataire::class, 'locataire_id');
    }
}
