<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::get(['id','status','doctor_name','doctor_image']);
        return view('admin.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create_update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//'doctor_name','doctor_image', 'doctor_designation', 'doctor_details', 'doctor_facebook', 'dcotor_twitter', 'doctor_istagram','status',
        $validated = $request->validate([
            'doctor_name'=>' string |required | max:30 | min:2 ',
            'doctor_image'=>'required',
            'doctor_designation'=>'string | required',
            'doctor_details'=>'string | required',
        ]);

        if($validated){
            try{
                DB::beginTransaction();
                $doctor = new Doctor();
                    $doctor->doctor_name = $request->doctor_name;
                    $doctor->doctor_designation = $request->doctor_designation;
                    $doctor->doctor_details = $request->doctor_details;
                    $doctor->doctor_facebook = $request->doctor_facebook;
                    $doctor->dcotor_twitter = $request->dcotor_twitter;
                    $doctor->doctor_istagram = $request->doctor_istagram;
                    $doctor_image = array();
                    if ($request->hasFile('doctor_image')) {
                        foreach ($request->doctor_image as $key => $photo) {
                            $path = $photo->store('uploads/doctor/photos');
                            array_push($doctor_image, $path);
                        }
                        $doctor['doctor_image']=json_encode($doctor_image);
                    }
                    $doctor->save();
                    if (!empty($doctor)) {
                        DB::commit();
                        return redirect()->route('doctor.index')->with('success', 'Doctor Added Successfully');
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
