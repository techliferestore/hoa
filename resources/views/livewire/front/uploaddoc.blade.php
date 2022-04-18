<div>
    @if (session()->has('message'))
    <div class="text-success">
        {{ session('message') }}
    </div>
@endif

<h3>  @isset( $comment)
    {{ $comment}}
 @endisset   </h3>
    @forelse ($doc as $req_doc )

    <div class="accordion-item px-lg-4 mb-2">
        <h2 class="accordion-header" id="flush-headingOne-{{$req_doc->id}}">
            <button class="accordion-button powerblogs_button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{$req_doc->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
                <h4 class="deshboard_powetext"> {{$req_doc->doc_required}} </h4>
            </button>
        </h2>
        <div id="flush-collapseOne-{{$req_doc->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne-{{$req_doc->id}}" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-UploadFiles-tab" data-bs-toggle="pill" data-bs-target="#pills-UploadFiles-{{$req_doc->id}}" type="button" role="tab" aria-controls="pills-UploadFiles" aria-selected="true">Upload
                            files</button>
                    </li>
                    <li class="nav-item ms-md-3 mt-3 mt-md-0" role="presentation">
                        <button class="nav-link" id="pills-BillDescription-tab" data-bs-toggle="pill" data-bs-target="#pills-BillDescription-{{$req_doc->id}}" type="button" role="tab" aria-controls="pills-BillDescription" aria-selected="false">Bill Description</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-UploadFiles-{{$req_doc->id}}" role="tabpanel" aria-labelledby="pills-UploadFiles-tab">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div style="display: flex;">
                                    <span class="jpegImage_blogs">
                                        <img src="../assets/icons/jpegfile_icon.svg"
                                            class="img-fluid" alt=""></span>
                                    <input type="file" wire:model="file_name" class="chooseyour_textblogs" id="attachment"
                                        />
                                        <input type="button" wire:click.prevent="store($doc_id='{{$req_doc->id}}')" style="    float: right;
                                        font-family: Inter;
                                        font-size: 14px;
    font-style: normal;
    font-weight: 700;
                                        line-height: 14px;
                                        letter-spacing: 0px;
                                        text-align: center;
                                        color: #f8f9fa;
                                        border: 2px solid #FA9836;
                                        padding: 10px 20px;
                                        border-radius: 5px;
                                        background-color: #fba43f;
                                        height: 41px;
                                        margin-top: 8px;" value="Add file" >
                                </div>
                                <div class="">
                                    <h5 class="uploading_zipText">Zip files, PDF files,
                                        Jpeg
                                        files </h5>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5 mt-md-0">
                                <div style="display: flex;">
                                    <span class="jpegImage_blogs">
                                        <img src="../assets/icons/excel_icon.svg" class="img-fluid"
                                            alt=""></span>
                                            @if ($req_doc->template == 0)

@else
<a href="{{asset('/')}}storage/{{$req_doc->template}} " download="{{asset('/')}}storage/{{$req_doc->template}}"><button class="learn_mOre download_brochure"> <button class="chooseyour_textblogs">Download
    Template</button> </button></a>

@endif
                                   
                                </div>
                                <div class="">
                                    <h5 class="uploading_zipText">Excel file </h5>
                                </div>
                            </div>
                        </div>
            @php
               $uploaded_file= App\Models\upload_doc::where('doc_req_id',$req_doc->id)->get();
            @endphp

@forelse ($uploaded_file as $file )


<div class="row mb-2">
    <div class="col-12">
        <div class="breadCblogs_text pink-bg">
            <div class="row">
                <div class="col-lg-6 col-md-3">
                    <div class="col-lg-3 me-auto">
                        <span class="blogsIncome_text">
                            <img src="../assets/icons/Subtract.svg" class="img-fluid image_filezep" alt="">
                            {{$file->id}}_{{$file->name}}  
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="col-lg-10 ms-md-auto">
                        <div class="flieapprovel_text">
                            <span class="flleIncome_taxt text-pink">
                                File not
                                approved
                            </span>
                            <img src="../assets/icons/apporved_redicon.svg" class="img-fluid" alt="">
                        </div>

                        <div class="approvel_hoverbutton ms-auto" id="Button-hoverglogs">
                            <a href="#" wire:click="edit($fielid='{{$file->id}}')" class="button_hover text-pink" data-bs-toggle="modal" >View
                                remark
                            </a>

                           
                            <a href="#" class="button_hover text-pink ms-2">Resend
                            </a>
                            <a href="#" class="button_hover text-pink ms-2">Remove
                            </a>
                            <a class="ms-3"><img src="../assets/icons/three-dots.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@empty
    
@endforelse
                      

                       
                    </div>

                    <div class="tab-pane fade" id="pills-BillDescription" role="tabpanel" aria-labelledby="pills-BillDescription-tab">
                        <div class="row mt-5">
                            <ul class="description1">The file should include all these
                                Bills
                                <li class="description2">Bill 1 | water bill | 21 june
                                    2012 -<span style="font-style: italic;"> “send two
                                        copies”</span></li>
                                <li class="description2">Bill 1 | water bill | 21 june
                                    2012 -<span style="font-style: italic;"> “send two
                                        copies”</span></li>
                                <li class="description2">Bill 1 | water bill | 21 june
                                    2012 -<span style="font-style: italic;"> “send two
                                        copies”</span></li>
                                <li class="description2">Bill 1 | water bill | 21 june
                                    2012 -<span style="font-style: italic;"> “send two
                                        copies”</span></li>
                                <li class="description2">Bill 1 | water bill | 21 june
                                    2012 -<span style="font-style: italic;"> “send two
                                        copies”</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    @empty
        
    @endforelse
   
</div>
