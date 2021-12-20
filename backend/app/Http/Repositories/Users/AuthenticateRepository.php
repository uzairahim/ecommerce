<?php

namespace App\Http\Repositories\Users;


use App\Core\Repositories\Repository;
use App\Models\PushToken;
use App\Models\Role;
use App\Models\SocialUser;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticateRepository extends Repository
{

    /**
     * @return void
     */
    public function __construct()
    {

    }

    public function authenticate($request)
    {
        $user = $request->get('userAuth');
        $user->token = $user->createToken($user->email)->accessToken;
        return $user;
    }
}
