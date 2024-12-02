<?php

namespace App\Models;

use App\Traits\GenerateUniqueSlugTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quiz extends Model
{
    use GenerateUniqueSlugTrait;
    protected $table = 'Quizes';
    protected $fillable = ['title', 'description', 'slug', 'user_id'];
    //

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
