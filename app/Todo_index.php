<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo_index extends Model
{
    protected $table = 'todo_index';

    public function user()
    {
        return $this->belongsTo(User::class,'todo_owner');
    }
    public function content()
    {
        return $this->hasMany(Todo_content::class,'todo_id');
    }
}
