<?php

namespace App\Models;

use App\Services\StringProcessor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generatedDevName extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function stringProcessor()
    {
        return $this->belongsTo(StringProcessor::class);
    }
}
