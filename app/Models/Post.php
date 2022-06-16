<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App\Models
 */
class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'website_id',
        'title',
        'description',
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
