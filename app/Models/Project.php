<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task; // ← リレーション先のモデルを忘れずにインポート

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'due_date'];

    // 🔽 ここが正しくクラスの中
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
