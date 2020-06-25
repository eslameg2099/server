<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
		protected $guarded = [];

	public function services()
    {
        return $this->hasMany(service::class);

    }//end

    //
}
