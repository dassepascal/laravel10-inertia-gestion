<?php

namespace App\Models;

use App\Models\User;
use App\Models\Enterprise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poste extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','lien','user_id', 'enterprise_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
        public function enterprise()
        {
            return $this->belongsTo(Enterprise::class);
        }
}
