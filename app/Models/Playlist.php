<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Playlist extends Model
{
    use HasFactory;
    protected $fillable = ['playlist_id','nameplaylist','user_id','playlist_id','created_at','updated_at'];
    // ForeignRelation
    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
     // PrimaryRelation
    public function videos(): HasMany {
        return $this->hasMany(Video::class, 'playlist_id');
    }

    public static function combinedata($playlists, $firstVideos){
        $combinedData = [];

        foreach ($playlists as $playlist) {
            foreach ($firstVideos as $video) {
                if ($playlist['id'] == $video['playlist_id']) {
                    $combinedData[] = [
                        'id' => $playlist['id'],
                        'nameplaylist' => $playlist['nameplaylist'],
                        'codevideo' => $video['codevideo'],
                        'user_id' => $playlist['user_id']
                    ];
                }
            }
        }
        return $combinedData;
    }
    public static function countVideo($videos, $playlists) 
    {
        foreach ($playlists as $playlist) {
            $totplaylists[] = [
                'id' => $playlist['id'],
                'nameplaylist' => $playlist['nameplaylist'],
                'count' => count($videos->where('playlist_id', $playlist['id'])),
                'user_id' => $playlist['user_id']
            ];
        }

        if (empty($totplaylists)) { 
            $totplaylists = [];
        }
       return $totplaylists;
    }
}
