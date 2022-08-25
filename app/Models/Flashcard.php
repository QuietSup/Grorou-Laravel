<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Flashcard
 *
 * @property int $id
 * @property string $term
 * @property string $definition
 * @property int $set_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Set|null $set
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard query()
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereDefinition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereSetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Flashcard extends Model
{
    use HasFactory;

    protected $table = 'flashcards';

    public function set()
    {
        return $this->belongsTo(Set::class);
    }
}
