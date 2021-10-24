<?php

namespace App\Http\Controllers;

use App\Models\AppointmentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'link'=>'required',
            'note'=>'string | required',
        ]);

        if($validated){
            try{
                DB::beginTransaction();
                $app_reply = new AppointmentReply;
                    $app_reply->link = $request->link;
                    $app_reply->note = $request->note;
                    $app_reply->appointment_id = $request->appointment_id;
                    $app_reply->save();
                    if (!empty($app_reply)) {
                        DB::commit();
                        return redirect()->route('appointment.index')->with('success', 'Appointment Reply Added Successfully');
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
