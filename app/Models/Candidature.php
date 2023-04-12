<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'lien',
        'user_id',
        'enterprise_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }
}
