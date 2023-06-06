<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assign extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded  = [];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
