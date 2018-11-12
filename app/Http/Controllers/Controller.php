<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User; 
use App\Twitter;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        $count_twitters = $user->twitters()->count();
        $count_followings = $user->followings()->count();
        $count_followers = $user->followers()->count();

        return [
            'count_twitters' => $count_twitters,
            'count_followings' => $count_followings,
            'count_followers' => $count_followers,
        ];
    }
}
