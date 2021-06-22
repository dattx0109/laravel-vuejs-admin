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

    public function index(Request $request)
    {
        $data = User::query();
        $keyword = $request['keyword'];
        if (!empty($keyword)){
            $data->where('name', 'like', '%'.$keyword.'%')
            ->orWhere('email', 'like', '%'.$keyword.'%')
            ;
        }
        $data = $data->get();
        if (empty($data)){
            return response()->json(['status' => true, 'data' => []]);
        }
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function delete($userId)
    {
        $user = User::findOrFail($userId);
        $delete = $user->delete();
        if ($delete){
            return response()->json(['status' => true]);
        }
        return response()->json(['status' => false]);
    }

    public function getInfoUser($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }
}
