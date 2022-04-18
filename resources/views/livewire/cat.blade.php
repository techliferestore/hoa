<div>
     <div class="form mt-4">
                              
       

                                @foreach ($categories as $category)
                           
                                    <div >
                                      
                                        <fieldset>                  

               <input type="radio" name="category" wire:model="cat_name" value="{{$category->id}}" />
               <label for="track">{{$category->tile}}</label><br />

            </fieldset>      
                                   
                                    </div>
                                    <div style="text-align: right;">
                                      
                                           
@forelse ( $category->subcat_name as  $subname)
    @isset($cat_name)
        
   
<fieldset>    
                                        <input type="radio" name="subcat" value="{{$subname->id}}" />
                                        <label for="track">{{$subname->sub_name}}</label><br />

                                    </fieldset>     
                                    @endisset
                                        @empty
    
@endforelse
                                                            
                                                             </div>
                            @endforeach


                                     </form>
                                   
                                </div>


                                <div class="form-check mt-5">
                                <b>    Add Category </b>
   <form wire:submit.prevent="store_cat()">
                                    
                                          
                                    <input type="text" 
                                     wire:model.lazy="topic" placeholder="Add new Category" />
                                         @error('topic')<span class="text-danger">{{$message}}</span>@enderror                                        
                                  
                                    <button  value="submit">add</button>
                                    </form>

                                    <br>
    <br>
    <br>
  <b>  Add SubCategory </b>
    <form wire:submit="store_subcat()">
                                     


                                     <select wire:model="cat" >
                                        <option >Select category</option>


@foreach ($categories as $category)
                                         <option value="{{$category->id}}" >{{$category->tile}}</option>

                                         @endforeach
                                     </select><br> <br>
                                     <input type="text" 
                                      wire:model.lazy="sub_name" placeholder="Add new SubCategory" />
                                          @error('sub_name')<span class="text-danger">{{$message}}</span>@enderror 
                                       
                                   
                                     <button wire:click="store_subcat()" type="button" >add</button>
                                     </form>
                                     <div class="col-md-12 text-center">

                                        @if (session()->has('submessage'))
                                            <div style="color:green ;">
                                                {{ session('submessage') }}
                                            </div>
                                        @endif
                                    </div></div>
                                  
                                    <div class="col-md-12 text-center">

        @if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
  