<?php

namespace App\Models\Traits;

use App\Models\Gig;

trait HasGigs
{
    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }
}
