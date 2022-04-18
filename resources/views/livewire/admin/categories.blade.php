
 <section class="content">

    <div class="row">
    <div class="col-md-12">
    @if (session()->has('message'))
                <div style="color:green ;">
                    {{ session('message') }}
    </div>
                    @endif
             
    
              <div class="row">
                <div class="col-md-10">
                  <div class="panel panel-default">
    <div class="panel-body">
                        <form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
                        
                              <div class="form-group">
                            <label class="col-sm-4 control-label">Category Name</label>
                            <div class="col-sm-8">
                              <input type="text"wire:model="cat_name"  class="form-control" name="brand" id="brand" required>
                            </div>
    
                            @error('cat_name')<span class="text-danger">{{$message}}</span>@enderror
                          </div> 
    
                         
                   
    
                        
                          <div class="hr-dashed"></div>
                          
                        
                    
                          
                          <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                    
                              <button class="btn btn-primary" name="submit" type="button" wire:click="addcategory">Submit</button>                        </div>
                          </div> 
    
                        </form>
                        @if (session()->has('message'))
                <div style="color:green ;">
                    {{ session('message') }}
                </div>
            @endif
                      </div>
                    </div>
                  </div>
                  
                </div>
                
              
    
              </div>
            </div>
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
         <!-- /.card -->
    
         <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">All users</h3>
                  </div>
                  <!-- /.card-header -->
                  @if (session()->has('delmessage'))
                <div style="color:red;">
                    {{ session('delmessage') }}
                </div>
            @endif
                  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Categories</th>
                     
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
    
                     @foreach($allcategories as $category) 
                      <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->tile}}</td>
                      
                        <td>   <button wire:click="deletecat({{$category->id}})"> <i class="fa fa-trash text-danger" aria-hidden="true"></i> </button>
                        <button wire:click="editcat({{$category->id}})"> <i class="fa fa-edit text-primary" aria-hidden="true"></i>  </td> </button>
                   
                      </tr>
    @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                      <th>Id</th>
                        <th>Categories</th>
                         <th>Action</th>
                      </tr>
                      </tfoot>
                    </table>
                    </div>
                
                </div>
           
          
          </div>
          </section>