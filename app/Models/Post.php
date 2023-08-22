<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    protected $casts = [
        'body' => 'array',
    ];

    // Accessor (the old way)
    // Post::first()->title_upper_case
    // public function getTitleUpperCaseAttribute()
    // {
    //     return strtoupper($this->title);
    //     // return Str::upper($this->title);
    // }

    // Accerssor and Mutator (new way)
    // the get will run when getting the title of the model
    // the set will run before inserting the data into the database so title will be all lowercase
    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
            set: fn(string $value) => strtolower($value)
        );
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
