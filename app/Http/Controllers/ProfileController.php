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
        $legalEntity = $user->legalEntity;
        $legalEntity->licence = $validated['legal_entity']['licence'];
        $legalEntity->address1 = $validated['legal_entity']['address1'];
        $legalEntity->address2 = $validated['legal_entity']['address2'] ?? null;
        $legalEntity->suburb = $validated['legal_entity']['suburb'];
        $legalEntity->state = $validated['legal_entity']['state'];
        $legalEntity->postcode = $validated['legal_entity']['postcode'];
        $legalEntity->save();
        $user->save();

        return new UserResource($request->user());
    }
}
