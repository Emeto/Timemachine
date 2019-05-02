<?php
namespace Emeto\Timemachine\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'saved_states';

    protected $casts = [
        'state_content' => 'array',
    ];
}