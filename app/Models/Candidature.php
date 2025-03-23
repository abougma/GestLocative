<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $table = 'candidatures';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'candidat_id',
        'bien_id',
        'statut',
    ];

    public function candidat()
    {
        return $this->belongsTo(User::class, 'candidat_id');
    }

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }

    public function documents()
    {
        return $this->hasMany(DocumentCandidature::class, 'candidature_id');
    }

    public function garant()
    {
        return $this->hasOne(Garant::class, 'candidature_id');
    }
}
