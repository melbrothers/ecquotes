<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(['data' => $request->user()]);
    }

    public function store(ProfileRequest $request)
    {
       $validated = $request->validated();

       $user = $request->user();

       $user->first_name = $validated['firstName'];
       $user->last_name = $validated['lastName'];
       $user->title = $validated['title'];
       $user->gender = $validated['gender'];
       $user->dob = $validated['dob'];
       $user->abn = $validated['abn'];

       return response()->json([], 200);
    }
}
