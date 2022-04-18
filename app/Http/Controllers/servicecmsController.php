<?php

namespace App\Http\Controllers;
use App\Models\service_cms;
use File;
use Illuminate\Http\Request;

class servicecmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $data=service_cms::all();

    return view('admin.service_cms',compact('data'));  



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service_add');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $photoName=time().'.'.$request->s_image->getClientOriginalExtension();
        $request->s_image->move(public_path('s_image'),$photoName);
        $service_cms = new service_cms;
        $service_cms->s_image = $photoName;
        $service_cms->s_detail = $request->s_detail;
        $service_cms->s_title = $request->s_title;

        $service_cms->save();
        return redirect()->back()->with('message', 'save Sucessful!');

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
        $data = service_cms::find($id)->first();

        return view('admin.service_edit',compact('data'));  
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


        $bannerData = service_cms::find($id);


        if ($request->hasFile('s_image')){
            $image_path = public_path('s_image'.$bannerData->s_image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $bannerImage = $request->file('s_image'); 
            $bannername = $bannerImage->getClientOriginalName();
        
            $destinationPath = public_path('s_image');
            $bannerImage->move($destinationPath, $bannername);
          } else {
            $bannername =  $bannerData->s_image;
          }

          service_cms::where('id',$id)->update([
            's_detail' => $request->s_detail,
            's_image' =>  $bannername,      
                 
            ]);
               
            
            return redirect()->back()->with('message', 'Sucessful done !'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
          
            service_cms::find($id)->delete();
            return redirect()->back()->with('message', 'Deleted Sucessful!');
        
    }
}
