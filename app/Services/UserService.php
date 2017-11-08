<?php namespace App\Services;

use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;

/**
 * Class UserService
 *
 * @package App\Services
 */
class UserService extends BaseService
{
    /**
     * UserService constructor.
     */
    public function __construct()
    {

    }

    public function updateProfile(Request $request, $userId)
    {
        $user = User::find($userId);
    }

    public function updateProfileImage(Request $request, $user)
    {

    }
}