<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::where('user_id', Auth::id())->get();
        return view('user.appointment.index', compact('appointments'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//'name','phone','email','age','user_id','date','time','doctor_id','note','status',
        $validated = $request->validate([
            'name'=>'string |required | max:30 | min:2 ',
            'phone'=>'required',
            'email'=>'required',
            'age'=>'required',
            'date'=>'required',
            'time'=>'required',
            'doctor_id'=>'required',
            'note'=>'required',
        ]);
        if($validated){
            try{
                DB::beginTransaction();
                $app = new Appointment;
                    $app->name = $request->name;
                    $app->phone = $request->phone;
                    $app->email = $request->email;
                    $app->age = $request->age;
                    $app->user_id = Auth::id();
                    $app->date = $request->date;

                    $app->time = $request->time;
                    $app->doctor_id = $request->doctor_id;
                    $app->note = $request->note;
                    $app->save();
                    if (!empty($app)) {
                        DB::commit();
                        return redirect('/')->with('success', 'Appointment Added Successfully');
                    }
                    throw new \Exception('Invalid About Information');
                }catch(\Exception $ex){
                    DB::rollBack();
                }
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
        $item = Appointment::find($id);
        $reply = AppointmentReply::where('appointment_id', $id)->first();
        return view('user.appointment.show', compact('item','reply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
