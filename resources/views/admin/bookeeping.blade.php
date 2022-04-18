@extends('admin.newlayout')
@section('content')
    

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">

           

            <div class="col-12">
                <div class="row hoa_admin-servBookkeeping-rightRow">
                    <div> <span><img src="assets/icons/arrowAddBlog.svg" /> </span><span class="mx-2">
                            Services /
                            {{request()->slug}}</span>
                    </div>
                </div>

                <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Basic Detais</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Price setting</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Label Setting</a>
                  </li>
                 
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                  @livewire('bookeeping-basic',['sub_id' =>$subid ])                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  @livewire('bookeeping-price',['sub_id' =>$subid ])
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  @livewire('bookeeping-label',['sub_id' =>$subid ])
                  </div>
                 
                </div>
              </div>
              <!-- /.card -->
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