<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function endereco() {
        return $this->hasOne('App\Endereco');
    }

    //ACIMA FUNCIONA, POIS SEGUE O PADRÃO DE CONVENÇÃO DO LARAVEL, ONDE ELE ENCONTRA OS CAMPOS CLIENTE_ID E ID.
    //SE OS CAMPOS TIVESSEM NOMENCLATURAS DIFERENTES, O CORRETO SERIA DA SEGUINTE FORMA:
    // public function endereco() {
    //     return $this->hasOne('App\Endereco', 'cliente_id', 'id');
    // }
}
