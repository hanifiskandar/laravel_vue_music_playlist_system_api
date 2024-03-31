<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\UserPlaylist;
use App\Http\Resources\UserPlaylistResource;


class UserPlaylistController extends Controller
{
    public function index($id){

        $search = request()->input('filter.search');

        $userPlaylist = UserPlaylist::with('music')
                        ->leftJoin('music','music.id','=', 'user_playlists.music_id')
                        ->when($search, function ($query) use ($search) {
                            return $query->where('music.name', 'LIKE', "%{$search}%")
                                         ->orWhere('music.singer', 'LIKE', "%{$search}%")
                                         ->orWhere('music.genre', 'LIKE', "%{$search}%");
                        })
                        ->where('user_id',$id)
                       ->get();

        return new UserPlaylistResource($userPlaylist);  
    }
}
