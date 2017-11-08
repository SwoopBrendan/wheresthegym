<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Throwable;

class UserController extends Controller
{
    /**
     * @var $service
     */
    protected $service;

    /**
     * UserController constructor
     *
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function index()
    {
        $user = User::find(Auth()->user()->id);

        return view('profile')->with(['user' => $user]);
    }

    /**
     * Update User Profile
     *
     * @param UpdateUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUserRequest $request)
    {
        try {

            $user = $this->service->updateProfile($request);

            return redirect('/profile')->with([
                'success' => 'Profile Updated'
            ]);

        } catch (Throwable $t) {

            return redirect('/profile')->with([
                'error' => 'Profile failed to update: ' . $t->getMessage()
            ]);

        }
    }
}
