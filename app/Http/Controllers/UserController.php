<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();

        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);

            //  $this->RespondWithSuccess('user create successful');
           return redirect()-> route('users.index');




        } catch (Exception $e) {
            // return $this->RespondWithEorror('unit not successful  ', $e->getMessage());
            // $this->RespondWithEorror('user not successful  ', $e->getMessage());
           return redirect()-> route('users.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
        return view('admin.users.form',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);

            //  $this->RespondWithSuccess('user update successful');
           return redirect()-> route('users.index');




        } catch (Exception $e) {
            // return $this->RespondWithEorror('unit not successful  ', $e->getMessage());
            // $this->RespondWithEorror('user not successful  ', $e->getMessage());
           return redirect()-> route('users.create');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::find($id)->delete();

            //  $this->RespondWithSuccess('user delete successful');
           return redirect()-> route('users.index');




        } catch (Exception $e) {
            // return $this->RespondWithEorror('unit not successful  ', $e->getMessage());
            // $this->RespondWithEorror('user not delete ', $e->getMessage());
           return redirect()-> route('users.index');

        }
    }

    //active featured
    public function active($id)
    {
        // dd($id);

        User::where('id',$id)->update(['lock'=>0]);
        // $this->RespondWithSuccess('user block successful');
        return redirect()-> route('users.index');


    }
    public function block($id)
    {
        // dd($id);
        User::where('id',$id)->update(['lock'=>1]);
        // $this->RespondWithSuccess('user block successful');
        return redirect()-> route('users.index');


    }
}
