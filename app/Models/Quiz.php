<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quiz extends Model
{
    protected $table = 'Quizes';
    protected $fillable = ['title', 'description', 'slug'];
    //

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
