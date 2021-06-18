<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function checkExistEmail(Request $request)
    {
        $isCheck = DB::table('users')->where('email', $request['email'])->count();
        if ($isCheck > 0){
            return response()->json(['isExist' => true]);
        }
        return response()->json(['isExist' => false]);
    }

    public function index()
    {
        $data = User::query()->get();
        if (empty($data)){
            return response()->json(['status' => true, 'data' => []]);
        }
        return response()->json(['status' => true, 'data' => $data]);
    }
}
