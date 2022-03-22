<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'priority', 'file'];

    public $rules = [
        'title' => 'required|min:5|max:30',
        'priority' => 'required',
        'description' => 'required|min:10|max:180',
    ];
    
    public $messages = [
        'title.required' => 'O titulo é obrigatório',
        'title.min' => 'O campo titulo deve ter no mínimo 5 caracteres',
        'title.max' => 'O campo titulo deve ter no máximo 30 caracteres',
        'priority.required' => 'A prioridade é obrigatória',
        'description.required' => 'A descrição é obrigatória',
        'description.min' => 'A descrição deve ter no mínimo 10 caracteres',
        'description.max' => 'A descrição deve ter no máximo 180 caracteres',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
