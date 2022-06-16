<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Website
 * @package App\Models
 */
class Website extends Model
{
    use HasFactory;

    protected $table = 'websites';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
