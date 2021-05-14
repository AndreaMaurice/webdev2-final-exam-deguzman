<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BibleRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'bdate',
        'religion',
        'bsdate',
        'bstime',
        'location'
    ];

    public function store(
        $fname,
        $phone,
        $bsdate,
        $bstime
    )
    {
        $this->fname = $fname;
        $this->phone = $phone;
        $this->bsdate = $bsdate;
        $this->bstime = $bstime;
    }
}
