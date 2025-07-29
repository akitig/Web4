<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // フィルアブルな属性（mass assignment 用）
    protected $fillable = [
        'project_id',
        'title',
        'description',
        'due_date',
        'status',
    ];

    // タスクが属するプロジェクト
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
