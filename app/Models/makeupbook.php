<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makeupbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' ,'description' ,'image', 'price'
   ];

   public function clients(){
    return $this->hasMany(claint::class, 'makeupbook_id', 'id');
   }
   

}
