<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['quantity','totat','produit_id'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shops';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
