<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
class Project extends Model
{
    use HasFactory;    public $table = 'projects';

    public $fillable = [
        'title',
        'description'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
