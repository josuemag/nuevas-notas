<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $fillable = [
        
        'title', 'content', 'updated_at', 'created_at'
    ];
    
    protected $hidden = [
        
        'updated_at'
    ];
    
    protected $table = 'notes';
    protected $primaryKey = 'id';
}
