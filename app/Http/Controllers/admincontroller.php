<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Blog;
use App\Models\leads;
use App\Models\doc_req;

use App\Models\User;
use App\Models\BlogCategory;
use App\Models\labels;
use App\Models\package_price;
use App\Models\fix_plain;
use App\Models\service_categories;
use App\Models\psetting;
use App\Models\monthly_tran;
use App\Models\availble_service;
use App\Models\lsetting;
use App\Models\service_subcategories;
use Illuminate\Support\Str;
use File;
use DB;
use Auth;
class admincontroller extends Controller
{
    function bookeeping($slug)
    {
        $subid = service_subcategories::where('slug', $slug)->first()->id;
        return view('admin.bookeeping', compact('subid'));
    }
    public function dashboard()
    {
        return view('adminDashboard');
    }

    function allcategory()
{


    if (Auth::guard('admin')->check() or Auth::guard('subadmins')->check()) {
        return view('admin.category');
    } else {
        return redirect()->route('admin.login');
    }


}

public function editblog($id)
{

    $data=blog::where('id',$id)->first();




    return view('admin.editblog',compact('data'));
}


public function updateblog(Request $request,$id)
{

    $validated=$request->validate([

 

        
        
        
        ]);
    //dd($request);

    $slug = Str::of($request->tile)->slug('-');

    $bannerData = blog::find($id);


if ($request->hasFile('f_img')){
    $image_path = public_path("featured_image".$bannerData->f_image);
    if (File::exists($image_path)) {
        File::delete($image_path);
    }
    $bannerImage = $request->file('f_img'); 
    $fileName = $bannerImage->getClientOriginalName();

    $destinationPath = public_path('featured_image');
    $bannerImage->move($destinationPath, $fileName);
  } else {
    $fileName =  $bannerData->f_image;
  }


if ($request->hasFile('f_video')){
    $image_path = public_path("featured_video".$bannerData->f_video);
    if (File::exists($image_path)) {
        File::delete($image_path);
    }
    $bannerImage = $request->file('f_video'); 
    $videoname = $bannerImage->getClientOriginalName();

    $destinationPath = public_path('featured_video');
    $bannerImage->move($destinationPath, $fileName);
  } else {
    $videoname =  $bannerData->f_video;
  }


if ($request->hasFile('banner_img')){
    $image_path = public_path("banner_image".$bannerData->banner_image);
    if (File::exists($image_path)) {
        File::delete($image_path);
    }
    $bannerImage = $request->file('banner_img'); 
    $bannername = $bannerImage->getClientOriginalName();

    $destinationPath = public_path('banner_image');
    $bannerImage->move($destinationPath, $fileName);
  } else {
    $bannername =  $bannerData->banner_image;
  }


blog::where('id',$id)->update([
    'tile' => $request->tile,
    'description' => $request->description,
    'f_image' =>  $fileName,    
    'banner_image'=>$bannername,
    'f_video'=>$videoname,
    'slug' => $slug,
    'status' => 0,
    'keywords' => $request->keywords,
    'meta_tag' => $request->meta_tag,
    'summary' => $request->summary,

    ]);
       
    
    return redirect()->back()->with('message', 'Sucessful done !');
       



}

public function monthly_transaction_name(Request $request)
{
    $validatedData = $this->validate($request, ['trn_name' => 'required', ]);
//dd($validatedData);

    monthly_tran::create(['trn_name' => $request->trn_name ]);


    return redirect()->back()->with('message', 'Sucessful done !');

}

    public function addlabel()
    {
        return view('admin.label');
    }

    public function uploaddoc()
    {

//$doc=doc_req::all();

        return view('admin.upload_doc');
    }

    public function misreport()
    {
        return view('admin.misreport');
    }

    public function servicecategory()
    {
        return view('admin.service_category');
    }
    function ourservice()
    {
        $service_categories = service_categories::get();
        return view('admin.ourservice', compact('service_categories'));
    }
    function postedblog()
    {

        $blogs=blog::all()->sortByDesc('id');

        return view('admin.postedblog',compact('blogs'));
    }

    function admin_dashboard()
    {
        return view('admin.dashboard');
    }


    function leads()
    {

$leads=leads::all();
        return view('admin.leads',compact('leads'));
    }
    function addservicesubcategory(request $request)
    {
        $validatedData = $this->validate($request, ['subcategory' => 'required|unique:service_subcategories', 'cat_id' => 'required', ]);
        $slug = Str::of($request->subcategory)
            ->slug('-');
        //dd($validatedData);
        service_subcategories::Create(['category_id' => $request->cat_id, 'subcategory' => $request->subcategory, 'slug' => $slug, ]);
        return redirect()->back()
            ->with('message', 'Subcategory Created Successfully.');
    }

    function addfixplain(request $request)
    {
        $validatedData = $this->validate($request, ['plain_name' => 'required', 'monthly_tran_id' => 'required', ]);
        //$slug = Str::of($request->subcategory)->slug('-');
       // dd($validatedData);
        fix_plain::Create([
            'monthly_tran_id' => $request->monthly_tran_id, 
            'plain_name' => $request->plain_name, ]);
        return redirect()->back()
            ->with('message', 'Fix Plain Created Successfully.');
    }

    function postlabel(request $request)
    {
        foreach ($request->label_names as $key1 => $label)
        {
            $slabels = explode(',', $label['l_name']);
            $ldatas = explode(',', $label['ldata_id']);
            foreach ($slabels as $key => $slabel)
            {
               
                if ($slabel)
                {
                    $data = array(
                        'label_id' => $label['lab_id'],
                        "a" => $slabel
                    );
                    DB::table('lsetting')->insert($data);
                }
            }

            
            psetting::destroy($ldatas);
        }
        
        return redirect()->back()
            ->with('message', 'Subcategory Created Successfully.');
    }
   
    function psetting(request $request)
    {
        $order = package_price::create(['monthly' => $request->mprice, 'quartely' => $request->qprice, 'yearly' => $request->yprice, 'price' => $request->price, 'doc' => $request->doc, 'sub_id' => $request->subid, ]);
        $package_id = package_price::latest()->first()->id;
        foreach ($request->orderlabel as $label)
        {
            //dd($label);
            lsetting::Create(['book_id' => $label['label_id'], 'legal' => $label['label'], 'sub_id' => $label['subcat_id'], 'package_id' => $package_id]);
        }
        return redirect()->back()
            ->with('message', 'Subcategory Created Successfully.');
    }
    function uploadblog()
    {
        $categories = category::all();
        return view('admin.uploadblog', compact('categories'));
    }


    function plaintype()
    {
        
        return view('admin.plaintype');
    }


    function blogfaq()
    {

        return view('admin.blog_faq');
    }
    function storeblog(Request $request)
    {
        //dd($request);
        $photoName=time().'.'.$request->f_img->getClientOriginalExtension();
        $request->f_img->move(public_path('featured_image'),$photoName);


        $bannerName=time().'.'.$request->banner_img->getClientOriginalExtension();
        $request->banner_img->move(public_path('banner_image'),$bannerName);


        $f_vdo=time().'.'.$request->f_video->getClientOriginalExtension();
        $request->f_video->move(public_path('f_video'),$f_vdo);

$summary=$request->input('summary');
$description=$request->input('description');
        $slug = Str::of($request->tile)
            ->slug('-');
        $Blog = new Blog;
        $Blog->tile = $request->tile;
        $Blog->f_image = $photoName;
        $Blog->banner_image=$bannerName;
        $Blog->f_video=$f_vdo;
        $Blog->slug = $slug;;
        $Blog->status = 0;
        $Blog->keywords = $request->keywords;
        $Blog->meta_tag = $request->meta_tag;
        $Blog->summary = $summary;
        $Blog->description = $description;
        $Blog->save();
        $post_id = Blog::latest()->first();
        $BlogCategory = new BlogCategory;
        $BlogCategory->category_id = $request->category;
        $BlogCategory->sub_id = $request->subcat;
        $BlogCategory->blog_id = $post_id->id;
        $BlogCategory->save();
        return redirect(route('uploadblog'))
            ->with('blogmsg', ' Created Successfully');
    }



public function complete(blog $blog)
{
    $blog->update(['status' => true]);
    
    return redirect()->back()->with('message', 'Activate successfully');
}

public function incomplete(blog $blog)
{
    //dd($todo);
    $blog->update(['status' => false]);
    return redirect()->back()->with('delmessage', 'Deactivate successfully');
}

public function subcategory()
{
return view('admin.subcategory');

}

public function destroy(blog $blog)
    {
      
        $blog->delete();
        return redirect()->back()->with('message', 'Deleted Sucessful!');
    }

    public function package_list()
    {

        return view('admin.package_list');
    }
 

    public function add_new_package()
    {

       $monthly_transaction_name=monthly_tran::all();

  return view('admin.add_new_package',compact('monthly_transaction_name'));


    }


public function package_setting(){




    return view('admin.package_setting');
  
}

public function fix_plain_service_label(){


  
    return view('admin.fix_plain_service_label');  
}

public function alluser(){

$leads=User::all();
  
    return view('admin.alluser',compact('leads'));  
}


public function allclient(){

    $leads=User::all();
  
    return view('admin.allclient',compact('leads'));  
}

public function package_store(Request $request)
{
 
    
    $product = availble_service::create($request->all());
    
    return redirect()->back()->with('message', 'save Sucessful!');

}


}

