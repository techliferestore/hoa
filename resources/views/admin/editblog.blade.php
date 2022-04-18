
@extends('admin.newlayout')
@section('head')
<link rel="stylesheet" href="{{asset('/')}}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/')}}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/')}}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      @if (session()->has('blogmsg'))
            <div style="color:green ;">
                {{ session('blogmsg') }}
            </div>
        @endif
                      <form method="post" action="{{route('updateblog',['id'=>$data->id])}}" enctype="multipart/form-data">
 
                        @csrf
                    <div class="row" style="margin-left: 0%;">
                        <div class="col-7 hoa_blogs-AddnewBlog-right-leftdiv">
                            <div class="form">
                                <div class="form-group">
                                <label>Title</label>
                                    <input type="text"  class="form-control mt-4" name="tile"
                                        placeholder="Type Blog Title / Heading" value="{{$data->tile}}"  />
                                        <br>
                                        <label>Featured Image</label>
                                    <input type="file"  class="form-control mt-4" name="f_img"
                                        placeholder="thumnail image show front" />
                                        <br>
                                        <label>Featured Video</label>
                                        <input type="file"  class="form-control mt-4" name="f_video"
                                            placeholder="thumnail video" />
                                            <br>
                                            <label>Banner Image</label>
                                            <input type="file"  class="form-control mt-4" name="banner_img"
                                                placeholder="Banner Image" />
                                                <br>
                                        <label>Keywords</label>
                                    <input type="text"  class="form-control mt-4" name="keywords"
                                        placeholder="Reading time of Blog" value="{{$data->keywords}}"  />
                                        <br>
                                        <label>Meta Tag</label>
                                    <input type="text" placeholder="Add Blog Content." class="form-control mt-4"
                                       name="meta_tag" style="line-height: 20em;" value="{{$data->meta_tag}}" />
                                       <br> 
                                       <label>Summary</label>
                                    <textarea  class="form-control" id="sum" rows="3" name="summary" rows="3">
                                        {{$data->summary}}
                                    </textarea>
<br>
                            <label>Description</label>
                            <textarea  class="form-control" id="des" rows="3"  name="description" rows="3">
                                {{$data->description}}
</textarea>
                            


                                       <br>
                            
                                       
                                </div>
                                <button class="btn-primary "  type="submit">Save
                                    blog</button>  <a href="{{route('postedblog')}}" class="text-right">
                        <button class="btn-success "  type="submit">Preview
                                    blog</button>        
                                    
              
                </a>                           
                                   
                            </div>
                          
                        </div>
                       
                        <div class="col-5" style="border: 0.1px solid #828282;">
                            <div class="row">
                        <a href="{{route('postedblog')}}" class="nav-link">
                        <button class="btn-primary "  type="button">Publish
                                    blog</button>  
              
                </a>
                <a href="{{route('dblog',['slug'=>$data->slug]) }}" class="nav-link">
                    <button class="btn-success  "  type="button">Preview
                                blog</button>  
          
            </a>
                            </div>

                 

                            <div class=" hoa_blogs-AddnewBlog-right-selectCategory-p">Select Category head for
                                publishing Blog.</div>
                            <div style="border: 0.3px solid #4F4F4F;opacity: 0.3;" class="mt-4"></div>

                           

                                 @livewire('cat')
                                 @livewire('admin.subcategories')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')


<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('ckfinder/ckfinder.js')}}"></script>

    <script>
            // Note: in this sample we use CKEditor with two extra plugins:
            // - uploadimage to support pasting and dragging images,
            // - image2 (instead of image) to provide images with captions.
            // Additionally, the CSS style for the editing area has been slightly modified to provide responsive images during editing.
            // All these modifications are not required by CKFinder, they just provide better user experience.
            if ( typeof CKEDITOR !== 'undefined' ) {
                    //CKEDITOR.disableAutoInline = true;
                    CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
                    var editor = CKEDITOR.replace( 'sum', 
                    {
                        ckfinder: {
                                uploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json')}}"
                            },
                            extraPlugins: 'uploadimage,image2',
                    removePlugins: 'image',
                    height:300
                    } );
                    CKFinder.setupCKEditor( editor );
            }
            else {
            document.getElementById( 'editor1' ).innerHTML =
                    '<div class="tip-a tip-a-alert">This sample requires working Internet connection to load CKEditor 4 from CDN.</div>'
            }
            
         
          if ( typeof CKEDITOR !== 'undefined' ) {
                    //CKEDITOR.disableAutoInline = true;
                    CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
                    var editor = CKEDITOR.replace( 'agr', 
                    {
                        ckfinder: {
                                uploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json')}}"
                            },
                            extraPlugins: 'uploadimage,image2',
                    removePlugins: 'image',
                    height:300
                    } );
                    CKFinder.setupCKEditor( editor );
            }
            else {
            document.getElementById( 'editor1' ).innerHTML =
                    '<div class="tip-a tip-a-alert">This sample requires working Internet connection to load CKEditor 4 from CDN.</div>'
            }
            
            
          if ( typeof CKEDITOR !== 'undefined' ) {
                    //CKEDITOR.disableAutoInline = true;
                    CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
                    var editor = CKEDITOR.replace( 'des', 
                    {
                        ckfinder: {
                                uploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json')}}"
                            },
                            extraPlugins: 'uploadimage,image2',
                    removePlugins: 'image',
                    height:300
                    } );
                    CKFinder.setupCKEditor( editor );
            }
            else {
            document.getElementById( 'editor1' ).innerHTML =
                    '<div class="tip-a tip-a-alert">This sample requires working Internet connection to load CKEditor 4 from CDN.</div>'
            }
         
            
    </script>

    @endsection