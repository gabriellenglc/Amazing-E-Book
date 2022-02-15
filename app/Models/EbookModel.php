<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EbookModel extends Model
{
    use HasFactory;
    public $table = 'ebook';
    public $timestamps = false;
    public $primaryKey = 'ebook_id';
 
    public function buyed(){
        return $this->hasMany(OrderModel::class, 'ebook_id');
    }
}
