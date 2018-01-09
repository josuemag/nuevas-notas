<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $fillable = [
        
        'title', 'content'
    ];
    
    protected $hidden = [
        
        'updated_at'
    ];
    
    protected $table = 'notes';
    protected $primaryKey = 'id';
}
