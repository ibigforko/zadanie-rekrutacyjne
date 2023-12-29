<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tax_no',
        'address',
        'country'
    ];

    public function logos(): HasMany
    {
        return $this->hasMany(ClientLogo::class, 'client_id', 'id')
                    ->orderBy('created_at', 'desc');
    }
}
