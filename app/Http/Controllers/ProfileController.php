<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class ProfileController extends Controller
{
    public function show(User $user)
{
    $following = $user->following;
    $followedBy = $user->followedBy; // Add this line
    $tweets = $user->tweet;

    return view('profiles.show', compact('user', 'following', 'followedBy','tweets')); // Pass both $following and $followedBy to the view
}

    public function edit(User $user){

        $this->authorize('edit',$user);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user, UserStoreRequest $request)
{
    // Validate the incoming request
    $validatedData = $request->validated();

    // Update user's attributes with validated data
    $user->name = $validatedData['name'];
    $user->username = $validatedData['username'];
    $user->email = $validatedData['email'];

    // Handle the avatar upload
    if ($request->hasFile('avatar')) {
        // Store the uploaded avatar and update the user's avatar path
        $user->avatar = $request->file('avatar')->store('avatars', 'public');
    }

    // Update the password if provided
    if ($request->filled('password')) {
        $user->password = bcrypt($validatedData['password']); // Hash the password
    }

    // Save the updated user
    $user->save();

    // Redirect back to the user's profile page
    return redirect($user->path());
}


    

}
