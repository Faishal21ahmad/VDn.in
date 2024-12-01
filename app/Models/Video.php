<?php

namespace App\Models;

use App\Models\User;
use App\Models\Catat;
use App\Models\Playlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['video_id','codevideo','namevideo','user_id','playlist_id','created_at','updated_at'];
    // ForeignRelation
    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
    public function playlist(): BelongsTo{
        return $this->belongsTo(Playlist::class, 'playlist_id');
    }
     // PrimaryRelation
    public function catats(): HasMany {
        return $this->hasMany(Catat::class, 'video_id');
    }

    public static function getFirstVideoPerPlaylist($userId)
    {
        return self::select('playlist_id', 'codevideo')
            ->where('user_id', $userId)
            ->whereIn(
                'id',
                self::selectRaw('MIN(id) as id')
                    ->where('user_id', $userId)
                    ->groupBy('playlist_id')
            )
            ->get();
    }
}
