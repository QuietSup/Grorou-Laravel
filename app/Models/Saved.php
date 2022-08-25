<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Saved
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Saved newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Saved newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Saved query()
 * @method static \Illuminate\Database\Eloquent\Builder|Saved whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saved whereSetId($value)
 * @mixin \Eloquent
 */
class Saved extends Model
{
    use HasFactory;

    protected $table = 'saved';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function set()
    {
        return $this->belongsTo(Set::class);
    }
}
