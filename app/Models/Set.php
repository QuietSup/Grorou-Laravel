<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

/**
 * App\Models\Set
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Set newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Set newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Set query()
 * @method static \Illuminate\Database\Eloquent\Builder|Set whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Set whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Set whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Set whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Set whereUserId($value)
 * @mixin \Eloquent
 */
class Set extends Model
{
    use HasFactory;

    protected $table = 'sets';
    protected $fillable = ['name', 'user_id'];

    public function flashcards()
    {
        return $this->hasMany(Flashcard::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function savedSet()
    {
        return $this->hasMany(Saved::class);
    }

    public function flashcardsNum()
    {
        return $this->flashcards()->count();
    }

    public function getSets()
    {
        $userId = Auth::id();
        $cacheKey = "sets_except{$userId}";

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $sets = Set::query()
            ->whereNot('User_id', $userId)
            ->orderByDesc('updated_at')
            ->limit(100)
            ->get();
        Cache::put($cacheKey, $sets, now()->addDay());
        return $sets;
    }
}
