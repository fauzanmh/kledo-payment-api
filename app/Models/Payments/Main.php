<?php

namespace App\Models\Payments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'payments';

    protected $primaryKey = 'id';

    public $keyType = 'int';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = ['payment_name'];
}
