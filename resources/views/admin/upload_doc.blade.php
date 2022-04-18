@extends('admin.newlayout')
    
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">    
     
                                    
              
                </a>                                  
    
                <div class="card-body">
      
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Service Name</label><br>
                        <input class="form-control" disabled type="text" placeholder="Service Name"  aria-label="default input example">

                      </div>
@livewire('admin.docreq')
                     

                    
            
                        
            
            
            
                          </div>
                          <!-- /.card-body -->
                        </div>
                    <!-- /.row -->
                  
                  </div>
    
                
            </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      

        </div>
    </div>

    


@endsection
    