@extends('admin.newlayout')
    
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">    
     
                                    
              
                             
    
               
    
      <div class="card-body">
      
     
            <label for="exampleFormControlInput1" class="form-label">Type of report</label><br>
            <select class="form-select" aria-label="Default select example">
                <option selected>choose report</option>
                <option value="1">Sales Summary</option>
                <option value="2">Exception Report</option>
                <option value="1">Ondemand Report</option>
                <option value="2">Exception Report</option>  <option value="1">Sales Summary</option>
                <option value="2">Exception Report</option>
              </select>
    

       <br><br>
            <label for="exampleFormControlTextarea1" class="form-label">X axis data</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" >         
           
                  <label for="exampleFormControlTextarea1" class="form-label">Y axis data</label>
                  <input type="text" class="form-control" id="exampleFormControlTextarea1" >         
                 
                  <label for="exampleFormControlInput1" class="form-label">choose PE <br>
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Choose PE</option>
                      <option value="1">PE vs Market</option>
                      <option value="2">PE vs Industry</option>
                     
                    </select><br>
            <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
   
<br>
          <button class="btn-success "  type="submit">Submit</button>    
            
    </div>

      


      

        </div>
     </div>

    </div>


@endsection
    