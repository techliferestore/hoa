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
      <a href="{{route('uploadblog')}}" class="float-right">
                        <button class="btn-success "  type="submit">Add
                                    blog</button>        
                                    
              
                </a>                                  
      <div class="card-body">
      
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Featured Image</th>
                    <th>Keywords</th>
             
                    <th>Meta Tag</th>
                    <th>Category</th>
                    <th>Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  2
                  <tr>
                    <td>3</td>
                    <td>4</td>
                    <td>
                      img
                    </td>
                   

                    <td>2</td>
              
            
                    <td> 1</td>   
                    <td> <h6>cat</h6></td>                
                    <td>

date</td>
<td >
                       <!--active-->
                  
                 
                   <!--deactivate-->
                   <br>

                   <!--delete-->
                       @auth('admin')                
                        <i class="fa fa-trash text-danger" aria-hidden="true" onclick="event.preventDefault();
                        if(confirm('Are you really want to delete?')){
                            document.getElementById('form-delete-del')
                            .submit()
                        }"></i>
@endauth
                      

                <form style="display:none" id="{{'form-delete-4'}}" method="post" action="{{route('destroy',5)}}">
                    @csrf
                    @method('delete')
                </form>
                <!--enddelete-->
                   
                   <a href="{{route('editblog',['blog'=>5])}}"> <i class="fa fa-edit text-primary" aria-hidden="true"></i> </a>
                     
                
                   
                  
                  
                  </td> 
                    </td>
                    
                 
                   
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Id</th>
                    <th>Title</th>
                    <th>Featured Image</th>
                    <th>Keywords</th>
             
                   
                    <th>Meta Tag</th>
                    <th>Category</th>
                    <th>Time</th>
                    <th>Action</th>
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