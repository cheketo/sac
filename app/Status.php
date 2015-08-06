<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'status';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['es_name', 'en_name', 'fr_name', 'it_name', 'ge_name', 'jp_name', 'pt_name', 'ru_name'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }    
}
