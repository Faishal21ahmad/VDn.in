<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catat extends Model
{
    use HasFactory;
    protected $fillable = ['catat_id','timevid','catat','video_id','created_at','updated_at'];

    // ForeignRelation
    public function video(): BelongsTo{
        return $this->belongsTo(Video::class, 'video_id');
    }
}
