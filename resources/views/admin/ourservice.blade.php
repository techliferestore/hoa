@extends('admin.newlayout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      
@forelse ($service_categories as $item)
<div class="dropdown text-left" >
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{$item->category}}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  @forelse ($item->sub_name as $sub)
  <a class="dropdown-item"  href="{{route('bookeeping',['slug' => $sub->slug])}}"> {{$sub->subcategory}}</a> 
  @empty
                            No subcategory Found
                        @endforelse
   
  </div>
</div>
<br>
<!--the end-->
   
@empty
   <div class="col-10 text-center">
                <div class="content_warptext text-center">
                <span class="no_services" style="color: #828282;">No service yet !</span><br><br>
                <div class="border_untext">
                    
                        <span class="list_backend text-center"><span class="dots_text"><i class="bi bi-circle-fill"></i></span> Go to Backend settings > Categories > Start Adding services</span>
                    
                </div>
             </div>
            </div>
@endforelse

</div>

       
       
    
</div>   





        </div>
    </div>   

    @endsection
