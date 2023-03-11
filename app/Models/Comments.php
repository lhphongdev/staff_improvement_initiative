<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IdeaPosts;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'comment_content',
        'post_id',
        'user_id',
    ];

    public function ideaPost()
    {
        return $this->belongsTo(IdeaPosts::class, 'post_id', 'post_id');
    }
}
