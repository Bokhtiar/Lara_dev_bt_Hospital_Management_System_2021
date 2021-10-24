<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
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
    { //'service_name', 'service_image', 'service_short_description', 'status',
        $validated = $request->validate([
            'service_name'=>' string |required | unique:services| max:30 | min:2 ',
            'service_short_description'=>'string | required',
        ]);

        if($validated){
            try{
                DB::beginTransaction();
                $service = new Service;
                    $service->service_name = $request->service_name;
                    $service->service_short_description = $request->service_short_description;

                    $service_image = array();
                    if ($request->hasFile('service_image')) {
                        foreach ($request->service_image as $key => $photo) {
                            $path = $photo->store('uploads/service/photos');
                            array_push($service_image, $path);
                        }
                        $service['service_image']=json_encode($service_image);
                    }
                    $service->save();
                    if (!empty($service)) {
                        DB::commit();
                        return redirect()->route('service.index')->with('success', 'Service Added Successfully');
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
        $edit = Service::find($id);
        $services = Service::all();
        return view('admin.service.index', compact('services', 'edit'));
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
        //'service_name', 'service_image', 'service_short_description', 'status',
        $validated = $request->validate([
            'service_name' => [
                'required', Rule::unique('services', 'service_name')->ignore($request->id),
            ],
        ]);

        if($validated){
            try{
                DB::beginTransaction();
                $service = Service::find($id);
                    $service->service_name = $request->service_name;
                    $service->service_short_description = $request->service_short_description;
                    if($request->service_image){
                        $service_image = array();
                        if ($request->hasFile('service_image')) {
                            foreach ($request->service_image as $key => $photo) {
                                $path = $photo->store('uploads/service/photos');
                                array_push($service_image, $path);
                            }
                            $service['service_image']=json_encode($service_image);
                        }
                    }else{
                        $service['service_image']=$service->service_image;
                    }

                    $service->save();
                    if (!empty($service)) {
                        DB::commit();
                        return redirect()->route('service.index')->with('success', 'Service Added Successfully');
                    }
                    throw new \Exception('Invalid About Information');
                }catch(\Exception $ex){
                    DB::rollBack();
                }
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
        Service::find($id)->delete();
        return redirect()->route('service.index')->with('success', 'Delete Successfully');
    }
}
