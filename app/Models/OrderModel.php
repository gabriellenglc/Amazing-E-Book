<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    public $table = 'order';
    public $timestamps = false;
    public $primaryKey = 'order_id';
 
    public function user(){
        return $this->belongsTo(User::class, 'account_id');
    }
 
    public function ebook(){
        return $this->belongsTo(EbookModel::class, 'ebook_id');
    }
}
