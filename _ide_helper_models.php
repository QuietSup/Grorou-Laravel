<?php
//
//// @formatter:off
///**
// * A helper file for your Eloquent Models
// * Copy the phpDocs from this file to the correct Model,
// * And remove them from this file, to prevent double declarations.
// *
// * @author Barry vd. Heuvel <barryvdh@gmail.com>
// */
//
//
//namespace App\Models{
///**
// * App\Models\Flashcard
// *
// * @property int $id
// * @property string $term
// * @property string $definition
// * @property int $set_id
// * @property \Illuminate\Support\Carbon|null $created_at
// * @property \Illuminate\Support\Carbon|null $updated_at
// * @property-read \App\Models\Set|null $set
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard newModelQuery()
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard newQuery()
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard query()
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereCreatedAt($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereDefinition($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereId($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereSetId($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereTerm($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Flashcard whereUpdatedAt($value)
// */
//	class Flashcard extends \Eloquent {}
//}
//
//namespace App\Models{
///**
// * App\Models\Saved
// *
// * @method static \Illuminate\Database\Eloquent\Builder|Saved newModelQuery()
// * @method static \Illuminate\Database\Eloquent\Builder|Saved newQuery()
// * @method static \Illuminate\Database\Eloquent\Builder|Saved query()
// */
//	class Saved extends \Eloquent {}
//}
//
//namespace App\Models{
///**
// * App\Models\Set
// *
// * @property int $id
// * @property string $name
// * @property int $user_id
// * @property \Illuminate\Support\Carbon|null $created_at
// * @property \Illuminate\Support\Carbon|null $updated_at
// * @method static \Illuminate\Database\Eloquent\Builder|Set newModelQuery()
// * @method static \Illuminate\Database\Eloquent\Builder|Set newQuery()
// * @method static \Illuminate\Database\Eloquent\Builder|Set query()
// * @method static \Illuminate\Database\Eloquent\Builder|Set whereCreatedAt($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Set whereId($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Set whereName($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Set whereUpdatedAt($value)
// * @method static \Illuminate\Database\Eloquent\Builder|Set whereUserId($value)
// */
//	class Set extends \Eloquent {}
//}
//
//namespace App\Models{
///**
// * App\Models\User
// *
// * @property int $id
// * @property string $name
// * @property string $email
// * @property \Illuminate\Support\Carbon|null $email_verified_at
// * @property string $password
// * @property string|null $remember_token
// * @property \Illuminate\Support\Carbon|null $created_at
// * @property \Illuminate\Support\Carbon|null $updated_at
// * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
// * @property-read int|null $notifications_count
// * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
// * @property-read int|null $tokens_count
// * @method static \Database\Factories\UserFactory factory(...$parameters)
// * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
// * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
// * @method static \Illuminate\Database\Eloquent\Builder|User query()
// * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
// * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
// * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
// * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
// * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
// * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
// * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
// * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
// */
//	class User extends \Eloquent {}
//}
//
