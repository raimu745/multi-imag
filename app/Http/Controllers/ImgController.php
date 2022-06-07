<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ImgController extends Controller
{
    function index(){

        return view('multi');
    }

    function store(Request $request){
         
        // $request->validate([
        //      'file' => 'required'
        // ]);
         

          try{
            DB::beginTransaction();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $files =[];
        foreach( $request->file('file') as $k => $file ) {

            $name=time() . '-' . $file->getClientOriginalName();
           $file->move('uploads/',$name);
            $images[]=$name;
            $data = collect([
                'file' => $images[$k],
            ]);
            $files[] = $data->toArray();
        }
        $user->images()->createMany($files);
        DB::commit();
        return redirect()->route('img');
    }
        catch(Exception $ex){
            DB::rollBack();
            dd($ex->getMessage());
        }
        
    }

    function show(){

        // $user = User::with('images')->get();
        $user = User::all();
        // dd($user);
        return view('table',compact('user'));
    } 
}
