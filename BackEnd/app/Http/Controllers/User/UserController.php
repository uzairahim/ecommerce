<?php

namespace App\Http\Controllers\User;

use App\Core\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Users\UserRepository;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\User\UserRequest;
use App\Http\Resources\User\UserLoginResource;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    use ResponseTrait;

    protected $userRepository;

    public function __construct()
    {
//        $this->middleware('auth:api', ['except' => []]);
        $this->userRepository = new UserRepository();
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->token()->revoke();
            return $this->responseGet('User Logout successfully');

        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            $userAuthenticate = $this->userRepository->authenticate($request);
            return $this->responseGet('User login successfully', UserLoginResource::make($userAuthenticate));

        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function addUser(UserRequest $request)
    {
        try {
            $user = $this->userRepository->getUserQuery(null, $request->email)->first();
            if (!empty($user)) {
                throw new \Exception('User already exist!!');
            }
            $addedUser = $this->userRepository->manageUser($request);
            return $this->responseGet('User Added successfully', UserResource::make($addedUser));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function updateUser(UserRequest $request, int $id)
    {
        try {
            $user = $this->userRepository->getUserQuery($id)->first();
            if (empty($user)) {
                throw new \Exception('User not found!!');
            }
            $updatedUser = $this->userRepository->manageUser($request, $user);
            return $this->responseGet('User updated successfully', UserResource::make($updatedUser));
        } catch (\Exception $e) {

            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function sendResetPasswordEmail(Request $request)
    {
        try {
            $user = $this->userRepository->sendResetPasswordEmail($request->get('email'));
            return $this->responseGet('Reset-Password Email Sent successfully', UserResource::make($user));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }

    }

    public function changePassword(Request $request)
    {
        try {
            $passwordReset = $this->userRepository->changePassword($request);
            return $this->responseGet('Password Changed successfully', UserResource::make($passwordReset));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function tokenVerification(Request $request)
    {
        try {
            $passwordReset = $this->userRepository->verifiyUserToken($request)->first();
            if (empty($passwordReset)) {
                throw new \Exception('Token Not Found/Expired! Reset Again');
            }
            return $this->responseGet('Token existed', null);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function sendInquery(Request $request)
    {
        try {
            $data = $request->all();
            $subject = $data['subject'];
            Mail::send('email', ['data' => $data], function ($message) use ($subject) {
                $message->from(config('mail.mailers.smtp.username'), 'Super Air Horns');
                $message->to(config('mail.mailers.smtp.mail_to'))->subject($subject);
            });
            return $this->responseGet('Your Message has been Received.Thank you', $data);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }


}
