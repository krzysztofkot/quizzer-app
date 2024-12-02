<?php

namespace App\Models;

use App\Models\QuizItem;
use App\Traits\GenerateUniqueSlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use GenerateUniqueSlugTrait, HasFactory;
    protected $table = 'Quizes';
    protected $fillable = ['title', 'description', 'slug', 'user_id'];
    //

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function quizItems(): HasMany
    {
        return $this->hasMany(QuizItem::class);
    }
}
