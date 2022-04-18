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
     
                                    
              
                </a>                                  
      <div class="card-body">
      
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Call</th>             
                    <th>Message</th>
                    
                  </tr>
                  </thead>
                  <tbody>
               @forelse ($leads as $lead )
               <tr>
                <td> {{$lead->id}} </td>
                <td>{{$lead->name}}</td>
                <td>   <a href="mailto:{{$lead->email}} ">Send Email </a>               
                </td>
               

                <td> {{Carbon\Carbon::parse($lead->created_at)->format('d F Y')}} </td>
          
           
                <td>            <a href="tel:{{$lead->b_mob}}"><i class="fa fa-phone text-success"></i></a></td>
                   <td>  <a href="sms:+916665355356"> <i class="far fa-comments"></i>  </a> </td>                
              
                   <!--active-->
              
             
               <!--deactivate-->
            

               <!--delete-->
                  
                  

        
          
              
              
                
             
               
              </tr>
               @empty
                   
               @endforelse
          
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Call</th>             
                    <th>Message</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      

        </div>
    </div>


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
      "responsive": true, "lengthChange": false, "ordering": true, "autoWidth": false,   "ordering": false,
      "buttons": [   @auth('admin') "copy", "csv", "excel", "pdf", "print", @endauth   "colvis"]
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