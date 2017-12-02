<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pedidos extends Eloquent
{
    protected $collection = 'pedidos';//Nome do banco
    protected $connection = 'mongodb';
    protected $guarded = [];
    protected $dateFormat = 'Y-m-d\TH:i:sP';
}
