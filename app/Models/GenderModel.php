<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenderModel extends Model
{
    use HasFactory;
    public $table = 'gender';
    public $timestamps = false;
    public $primaryKey = 'gender_id';
 
    public function user(){
        return $this->hasMany(User::class, 'gender_id');
    }

}
