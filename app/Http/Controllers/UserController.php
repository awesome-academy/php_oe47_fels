<?php

namespace App\Http\Controllers;

use App\Repository\User\UserRepositoryInterface;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(
        UserRepositoryInterface $userRepository
    ) {
        $this->userRepository = $userRepository;
    }

    public function myProfile($id)
    {
        $datas = $this->userRepository->findWhere('id', $id);
        if ($datas) {
            return view('pages.user.profile', compact('datas'));
        }

        return back()->withError('notfound');
    }
}
