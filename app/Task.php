<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
        protected $fillable = ['content', 'status', 'user_id'];    // 7/25 'status', 'user_id'を加えた。

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
