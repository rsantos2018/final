<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use SoftDeletes:

    protected $fillable = [
        'id', 'status', 'descricao','usuario_id'
        ];
}
