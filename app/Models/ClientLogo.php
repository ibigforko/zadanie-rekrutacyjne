<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ClientLogo extends Model
{
    use HasFactory;

    protected $table = 'clients_logos';

    protected $fillable = [
        'client_id',
        'path'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(fn ($logo) => File::delete(public_path($logo->path)));
    }
}
