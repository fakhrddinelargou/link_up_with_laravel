<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;



class ProfileController extends Controller
{



  public function index(){
    return view('profile');
  }


    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

   public function search(Request $request)
{
    
     $username = $request->query('username');

     $users = DB::table('users')
        ->where('username', 'LIKE', $username . '%')
        ->limit(10)
        ->get();

    // return $users;
//     return response()->json([
//     'ok' => true
// ]);

    return response()->json($users, 200);

}


  public function find()
{
    $profile = Profile::with('user')->findOrFail(1);

    return $profile->user;
}


public function show(Request $request){
    
   $lens = ['js','PHP','REACT'];
    return view('salam',compact('lens'));
}

}
