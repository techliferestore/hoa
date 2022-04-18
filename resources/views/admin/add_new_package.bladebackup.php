@extends('admin.newlayout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Packages</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="container">
   
    <div class="form-group">
      <label for="exampleFormControlSelect1">Monthly Transaction</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Upto 100</option>
        <option>Upto 500</option>
        <option>Upto 1000</option>
        <option>Unlimited</option>
     
      </select>
    </div>
   
        
            
          
    <div class="row m-auto">
      <div class="text-center mt-5">
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter a Plain Name" aria-describedby="emailHelp">
        <p class="pick_plantaxt mt-3">Pick a plan that fits best with your needs.</p>
      </div>
      <div class="table-responsive m-auto py-5 ps-0 pe-0">
          <table class="table">
              <thead>
                  <tr>
                    <th scope="col">
                        <span class="service_incluidesText">S/no</span>
                    </th>
                      <th scope="col">
                          <img src="../assets/icons/ser-incl.svg" class="img-fluid" alt="">
                          <span class="service_incluidesText">Service includes</span>
                      </th>
                      <th scope="col" class="Basic_textplan">              
             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain type" name="plain_1" aria-describedby="emailHelp">
                      </th>
                      <th scope="col" class="Basic_textplan">   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain type" name="plain_2" aria-describedby="emailHelp"></th>
                      <th scope="col" class="Basic_textplan">
                          <img src="../assets/images/best-seller-logo.svg" class="img-fluid" alt="">
                          <div class="mt-3">   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain type" name="plain_3" aria-describedby="emailHelp"></div>
                      </th>
                      <th scope="col" class="Basic_textplan">   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain type" name="plain_4" aria-describedby="emailHelp"></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row"></th>
                     <td></td>
                      <td>
                          <div class="amount_taxtINR">  
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Price" name="price_1"  aria-describedby="emailHelp">
                          </div>
                          <div class="per_taxtInr mt-2">                              
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain Title" name="plain_title_1"  aria-describedby="emailHelp">
                          </div>
                        <div class="bestfor_text mt-2">   
         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain Des" name="plain_des_1"  aria-describedby="emailHelp">

                        </div>  
                                        </td>
                      <td>
                          <div class="amount_taxtINR">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Price" name="price_2"  aria-describedby="emailHelp">
                            <div class="per_taxtInr mt-2">                              
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain Title" name="plain_title_2"  aria-describedby="emailHelp">
                                          </div>
                                        <div class="bestfor_text mt-2">   
                         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain Des" name="plain_des_2"  aria-describedby="emailHelp">
                
                                        </div>
                      </td>
                      <td>
                          <div class="amount_taxtINR"> 
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Price" name="price_3"  aria-describedby="emailHelp">
                            <div class="per_taxtInr mt-2">                              
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain title" name="plain_title_3"  aria-describedby="emailHelp">
                                          </div>
                                        <div class="bestfor_text mt-2">   
                         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain des" name="plain_des_3"  aria-describedby="emailHelp">
                
                                        </div>
                      </td>
                      <td>
                          <div class="amount_taxtINR">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Price" name="price_4"  aria-describedby="emailHelp">
                            <div class="per_taxtInr mt-2">                              
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain Title" name="plain_title_4"  aria-describedby="emailHelp">
                                          </div>
                                        <div class="bestfor_text mt-2">   
                         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain Desc" name="plain_des_4"  aria-describedby="emailHelp">
                
                                        </div>
                      </td>
                  </tr>

                  <tr class="table-light">
                    <td>1</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_1"  aria-describedby="emailHelp">

                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                  </tr>

                  <tr>
                      <td>2</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_2"  aria-describedby="emailHelp">
                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                  </tr>

                  <tr class="table-light">
                    <td>3</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_3"  aria-describedby="emailHelp">

                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1">
                      </td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1">
                      </td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1">
                      </td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1">
                      </td>
                  </tr>

                  <tr>
                    <td>4</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_4"  aria-describedby="emailHelp">
                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                  </tr>

                  <tr class="table-light">
                    <td>5</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_5"  aria-describedby="emailHelp">

                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                  </tr>

                  <tr>
                    <td>6</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_6"  aria-describedby="emailHelp">

                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                  </tr>

                  <tr class="table-light">
                    <td>7</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_7"  aria-describedby="emailHelp">

                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                  </tr>

                  <tr>
                    <td>8</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_8"  aria-describedby="emailHelp">

                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                  </tr>

                  <tr class="table-light">
                    <td>9</td>
                      <th scope="row" class="basic_accounttaxt">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Name" name="service_name_9"  aria-describedby="emailHelp">

                      </th>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                      <td> <input  type="checkbox" value="" id="defaultCheck1"></td>
                  </tr>

                  <tr>
                <td>#</td>
                      <th scope="row"></th>
                      <td>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Saving /Discount" name="plain_footer_1"  aria-describedby="emailHelp">

                         
                      </td>
                      <td>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Saving Discount" name="plain_footer_2"  aria-describedby="emailHelp">

                         
                      </td>
                      <td>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Saving Discount" name="plain_footer_3"  aria-describedby="emailHelp">

                         
                      </td>
                      <td>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Saving Discount" name="plain_footer_4"  aria-describedby="emailHelp">

                      </td>
                  </tr>
              </tbody>
          </table>

          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
      </div>
  </div>


</div>


   </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('/')}}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/jszip/jszip.min.js"></script>
<script src="{{asset('/')}}plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/')}}plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
