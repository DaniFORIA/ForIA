<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Poll_option;

class Poll_answer extends Model
{
    use HasFactory;

    
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'poll_option_id',
        'user_id',
    ];

    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    
    public function poll_option(){
        return $this->belongsTo(Poll_option::class,'poll_option_id');
    }
}
