<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $primaryKey = 'id_task';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'task_name',
        'task_description',
        'task_status',
        'task_due_date'
    ];
}
