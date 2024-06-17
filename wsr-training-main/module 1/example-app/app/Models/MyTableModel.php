<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyTableModel extends Model
{
    use HasFactory;

    protected $table = 'my_table';

    public function getFlagText()
    {
        if ($this->flag) {
            return 'Всё хорошо';
        } else {
            return 'Всё плохо';
        }
    }
    

}
