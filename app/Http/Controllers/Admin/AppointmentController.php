<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentReply;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointment.index', compact('appointments'));
    }

    public function show($id)
    {
        $item = Appointment::find($id);
        $reply = AppointmentReply::where('appointment_id', $id)->first();
        return view('admin.appointment.detail', compact('item', 'reply'));
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
    public function status($id)
    {
        $s = Appointment::find($id);
        if($s->status == 1){
            $s->status = 0;
            $s->save();
            return redirect()->route('appointment.index')->with('success', 'Appointment Status Successfully');
        }else{
            $s->status = 1;
            $s->save();
            return redirect()->route('appointment.index')->with('success', 'Appointment Status Successfully');
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
        Appointment::find($id)->delete();
        return redirect()->route('appointment.index')->with('success', 'Appointment Delete Successfully');
    }
}
