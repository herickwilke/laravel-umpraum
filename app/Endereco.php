<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $primaryKey = "cliente_id";

    //ACIMA FUNCIONA, POIS SEGUE O PADRÃO DE CONVENÇÃO DO LARAVEL, ONDE ELE ENCONTRA OS CAMPOS CLIENTE_ID E ID.
    //SE OS CAMPOS TIVESSEM NOMENCLATURAS DIFERENTES, O CORRETO SERIA DA SEGUINTE FORMA:
    function cliente(){
        return $this->belongsTo('App\Cliente');
        //return $this->belongsTo('App\cliente', 'cliente_id', 'id);
    }
}
