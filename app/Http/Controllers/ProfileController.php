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
        $user->role = 'ROLE_USER';
        $legalEntity = $user->legalEntity;
        $legalEntity->entity_type = 'electrician';
        $legalEntity->licence = $validated['legal_entity']['licence'];
        $legalEntity->address1 = $validated['legal_entity']['address_line_1'];
        $legalEntity->address2 = $validated['legal_entity']['address_line_2'] ?? null;
        $legalEntity->suburb = $validated['legal_entity']['suburb'];
        $legalEntity->state = $validated['legal_entity']['state'];
        $legalEntity->postcode = $validated['legal_entity']['postal_code'];
        $legalEntity->save();
        $user->save();

        return new UserResource($request->user());
    }
}
