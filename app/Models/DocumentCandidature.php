<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentCandidature extends Model
{
    use HasFactory;

    protected $table = 'documents_candidatures';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'candidature_id',
        'type_document',
        'chemin_document',
    ];

    public function candidature()
    {
        return $this->belongsTo(Candidature::class, 'candidature_id');
    }
}
