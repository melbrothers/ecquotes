<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Resources\User as UserResource;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return new UserResource($request->user());
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
       $user->mobile = $validated['mobile'];
       $user->landline = $validated['landline'];
       $user->abn = $validated['abn'];
       $user->licence = $validated['licence'];
       $user->address1 = $validated['address1'];
       $user->address2 = $validated['address2'] ?? null;
       $user->suburb = $validated['suburb'];
       $user->state = $validated['state'];
       $user->postcode = $validated['postcode'];
       $user->save();

       return new UserResource($request->user());
    }
}
