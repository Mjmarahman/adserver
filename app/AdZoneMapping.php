<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdZoneMapping extends Model
{
    public function getadzone()
    {
        return $this->hasOne('App\AdZone', 'id', 'adzone');
    }

    public function getadsense()
    {
        return $this->hasOne('App\Adsense', 'id', 'add_id');
    }

    public function getlsm()
    {
        return $this->hasOne('App\LSM', 'id', 'add_id');
    }

    public function getmopub()
    {
        return $this->hasOne('App\MoPub', 'id', 'add_id');
    }

    public function getliberty()
    {
        return $this->hasOne('App\Liberty', 'id', 'add_id');
    }

    public function getother()
    {
        return $this->hasOne('App\CustomAdd', 'id', 'add_id');
    }
}
