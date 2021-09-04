<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPlan extends Model
{
    use HasFactory;

    protected $fillable = ['plan_id', 'reference_transaction'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class;
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
