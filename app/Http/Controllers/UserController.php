<?php   
namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use JWTAuth;
    use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
    $credentials = $request->only('email', 'password');
    $validator= Validator::make($credentials,[
        'email' => 'required|string|email',
        'password' => 'required|string|min:6'
    ]);

    if(!$validator->fails()){
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'status'=>false,
                    'error' => 'credenciales invalidas'
                    ]);
            }
        } catch (JWTException $e) {
            return response()->json([
                'status'=>false,
                'error'=>$e->getMessage(),
                'message' => 'credenciales invalidas'
                ]);
        }
        return response()->json([
            "status"=>true,
            "token"=>compact(['token']),
            "errors"=>$validator->errors()
          ]);
    }else{
        return response()->json([
          "status"=>false,
          "errors"=>$validator->errors()
        ]);
    }
    
    return response()->json(compact('token'));
    }

    public function getAuthenticatedUser()
    {
    try {
        if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
        }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
                return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }


        public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
      }
}