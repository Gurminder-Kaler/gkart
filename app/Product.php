<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['id','photo_id','product_name','product_id','description', 'product_price','is_active','created_at','updated_at'];

//public function users()
//{
//    return $this->belongsTo('App\User');
//}
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
