<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','user_id'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

   /**
     * 
     *
     * @var bool
     */
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
