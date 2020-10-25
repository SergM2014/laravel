<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Reply;
//use App\Models\User;

class Conversation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function setBestReply(Reply $replay)
    {
        $this->best_replay_id = $replay->id;
        $this->save();
    }

    public function replies()
    {
        return $this->hasMany(Replay::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
