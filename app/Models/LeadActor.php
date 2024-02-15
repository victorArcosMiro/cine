<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadActor extends Model
{
    public function leadActor()
    {
        return $this->belongsTo(LeadActor::class);
    }
}
