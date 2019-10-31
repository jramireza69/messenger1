<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    //definimos un accesor metodo  getAtributte

    //definimos propiedad que adjunte  https://laravel.com/docs/6.x/eloquent-serialization#appending-values-to-json

    protected $appends = ['contact_name'];  //contact_name campo calculado

    public function getContactNameAttribute () {
                return  $this->contact()->first(['name'])->name;
    }

    public function contact() {
    	// conversation N 1 user
    	return $this->belongsTo(User::class);
    }
}
