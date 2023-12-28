<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'client_id',
        'deadline',
        'description',
    ];
    function customerName()
    {
        if (!$this->client_id) {
            return null;
        }
        $client = Client::find($this->client_id);
        if (!$client) {
            return null;
        }
        return $client->name;
    }
}
