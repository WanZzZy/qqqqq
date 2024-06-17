<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimModel extends Model
{
    use HasFactory;

    protected $table = 'claims';


    public function getAuthor()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->first();
    }


    public function getStatus()
    {
        switch ($this->status_id) {
            case 1:
                return 'Новое';
                break;
            case 2:
                return 'Подтверждено';
                break;
            case 3:
                return 'Отклонено';
                break;
            default:
                # code...
                break;
        }
    }
    
    // protected $fillable = [
    //     'user',
    //     'noties'
    // ];

}
