<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/user",
     *   tags={"user"},
     *   security={
     *     {"passport": {}},
     *   },
     *   summary="Get user",
     *   @OA\Response(
     *     response=200,
     *     description="Logged in user info"
     *   )
     * )
     */
    public function index()
    {
        return view('app');
    }


}
