<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    PROTECTED $FILLABLE=['nom', 'prenom', 'filiere'];
}
