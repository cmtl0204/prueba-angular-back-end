<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::firstWhere('email', $request->input('username'));

        if (!isset($user->id)) {
            return response()->json([
                'data' => null,
                'msg' => [
                    'summary' => 'Usuario no encontrado',
                    'detail' => 'Intente de nuevo',
                    'code' => '404'
                ]], 404);
        }

        if (!Hash::check($request->input('password'), $user->password)) {
            return response()->json([
                'data' => null,
                'msg' => [
                    'summary' => 'Contrasaña incorrecta',
                    'detail' => "",
                ]
            ], 401);
        }

        return response()->json([
            'token' => $user->createToken($request->header('User-Agent'))->plainTextToken,
            'msg' => [
                'summary' => 'Acceso correcto',
                'detail' => 'Bienvenido',
            ]
        ], 201);
    }

    public function logout()
    {
        auth()->user()->currentAccessToken()->delete();
        return response()->json([
            'msg' => [
                'summary' => 'Su sesión ha sido cerrada correctamente',
                'detail' => '',
            ]
        ], 201);
    }

}
