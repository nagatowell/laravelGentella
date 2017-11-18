<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class MongoExemple extends Eloquent
{
    protected $collection = 'mongo';//Nome do banco
    protected $connection = 'mongodb';
    protected $guarded = [];
    protected $dateFormat = 'Y-m-d\TH:i:sP';
}
