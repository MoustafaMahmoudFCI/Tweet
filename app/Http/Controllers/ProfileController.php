<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->latest()->withLikes()->paginate(5)
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => [
                'required', 'string', 'max:255',
            ],
            'username' => [
                'required', 'alpha_dash', 'max:255',
                Rule::unique('users')->ignore($user),
            ],
            'email' => [
                'required', 'email', 'max:255',
                Rule::unique('users')->ignore($user),
            ],
            'avatar' => [
                'image', 'mimes:png,jpg,svg,jpeg',
            ],
            'banner' => [
                'image', 'mimes:png,jpg,svg,jpeg',
            ],
            'bio' => [
                'nullable', 'string', 'max:255',
            ],
            'password' => ['sometimes', 'nullable', 'min:8', 'confirmed'],
        ]);

        if (request()->hasFile('avatar')) {
            Storage::has($user->getAvatar()) ? Storage::delete($user->getAvatar()) : '';
            $data['avatar'] = Storage::putFile('avatars', request('avatar'));
        }
        if (request()->hasFile('profile_img')) {
            Storage::has($user->getProfileImg()) ? Storage::delete($user->getProfileImg()) : '';
            $data['profile_img'] = Storage::putFile('profiles', request('profile_img'));
        }

        $data['password'] = $data['password'] ? Hash::make($data['password']) : $user->password;

        $user->update($data);
        return redirect($user->path('edit'))->with('success', 'Profile updated successfully');
    }
}
