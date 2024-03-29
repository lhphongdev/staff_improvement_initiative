<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsLikeDislike extends Model
{
    use HasFactory;

    protected $table = 'like_dislike';
    protected $primaryKey = 'id';

    protected $fillable = [
        'post_id',
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post()
    {
        return $this->belongsTo(IdeaPosts::class, 'post_id');
    }
}
