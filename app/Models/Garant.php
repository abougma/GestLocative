<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garant extends Model
{
    use HasFactory;

    protected $table = 'garants';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'candidature_id',
        'nom',
        'info_contact',
    ];

    public function candidature()
    {
        return $this->belongsTo(Candidature::class, 'candidature_id');
    }
}
