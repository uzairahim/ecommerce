<?php

namespace App\Http\Repositories\Users;

use App\Core\Repositories\Repository;
use App\Core\Traits\ResponseTrait;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserRepository extends Repository
{
    use ResponseTrait;
    public function getUserQuery(int $id = null, string $email = null)
    {
        $query = User::query();
        if (!empty($id)) {
            $query->where('id', $id);
        }
        if (!empty($email)) {
            $query->where('email', $email);
        }
        return $query;
    }

    public function manageUser(Request $request, User $user = null)
    {
        if (empty($user)) {
            $user = new User;
        }
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return $user;
    }

    public function sendResetPasswordEmail($email)
    {
        $user = $this->getUserQuery(null, $email)->first();
        if (empty($user)) {
            throw new \Exception('Email Not Registered!!');
        }
        $forget_key = str_replace('/', '', Hash::make(random_int(1000000, 9999999)));
        $user->forget_key = $forget_key;
        $user->forget_date = date('Y-m-d H:i:s', strtotime(' +1 day'));

        Mail::send('emails.resetPassword', ['data' => ['key' => $forget_key]], function ($message) use ($user) {
            $message->to($user->email, $user->name)->subject('Full Picture Math Reset Password');
            $message->from(env('MAIL_USERNAME'), 'Password Reset');
        });
        $user->save();
        return $user;
    }

    public function changePassword($request)
    {
        $user = $this->verifiyUserToken($request)->first();
        if (empty($user)) {
            throw new \Exception('Invalid Data. Try Again!!');
        }
        $user->forget_key = null;
        $user->forget_date = null;
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
        return $user;
    }

    public function verifiyUserToken($request)
    {
        if ($request->has('email')) {
            $user = $this->getUserQuery(null, $request->get('email'));
        } else {
            $user = new User;
        }
        $userEmail = $user->where('forget_key', $request->get('token'))->where('forget_date', '>', date('Y-m-d H:i:s'));
        return $userEmail;
    }

    public function authenticate($request)
    {
        $password = $request->get('password');
        $email = filter_var($request->email, FILTER_SANITIZE_EMAIL);
        $user = User::where('email', $email)->first();
        if (empty($user)) {
            return $this->error('invalid email', null, 400);
        }
        if (!Hash::check($password, $user->password)) {
            return $this->error('invalid password', null, 400);
        }
        $user->token = $user->createToken($user->email)->accessToken;
        return $user;
    }


}
