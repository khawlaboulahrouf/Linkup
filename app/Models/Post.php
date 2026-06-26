<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'user_id'];

    //3Ala9a bin yser o post ch7al dyal les post fkola user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
