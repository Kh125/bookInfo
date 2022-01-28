<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display the user's profile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile(User $user)
    {
        $books = $user->books;
        return view('user.profile', [
            'books'=> $books,
            'user'=> $user
        ]);
    }

    public function editProfile(User $user, Request $request){   
        $validator = $request->validate([
            'name'=> 'bail|required|max:255',
            'username'=> ['required', Rule::unique('users')->ignore($user)],
            'file_path'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',            
        ]);                                   
        $user_b  = User::find($user->id);
        $user_b->name = $request->name;
        $user_b->username = $request->username;        
        if($request->file_path != null){            
            $this->deleteOldFile($user->file_path);
            $request->file_path->store('/public/images');
            $image = $request->file_path->hashName();             
            $user_b->file_path = $image;
        }
        $user_b->save();  
        return redirect()->route('user.profile', $user_b);
    }

    private function deleteOldFile($file){        
        // dump(base_path('\storage\images\\' . $file));
        $file_path = public_path('\storage\images\\' . $file);
        if(File::exists($file_path)){
            File::delete($file_path);
        }
    }
}    