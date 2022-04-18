
@forelse ($listcategory as $catservice)
    
<div class="col-md-6">
    <div class="hoa_home-navService-div mt-4">
        <li class="dropdown-item service-card-h3 hoa_home-navService-div-text" style="    color: #239C9C;">
          {{$catservice->category}}
        </li>
        @forelse ($catservice->sub_name as $subcategory )
        <li><a href="{{route('bookkeeping',['slug' => $subcategory->slug])}}"><button class="dropdown-item nav-items hoa_home-navService-div-text mt-2"
            type="button">{{$subcategory->subcategory }}</button>   </a> </li>  
        @empty
            
        @endforelse
      
       
    </div>

   
</div>
@empty
    
@endforelse


