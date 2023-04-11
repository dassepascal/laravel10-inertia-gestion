<?php

namespace App\Models;

use App\Models\User;
use App\Models\Poste;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'user_id'];

   
        public function postes(){
            return $this->hasMany(Poste::class);
        }
}
