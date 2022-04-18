@extends('admin.newlayout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    <div class="row">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0"><b>Services</b></h3>
                <a class="btn btn-primary  btn-sm" href=" {{route('servicecms.create')}}  "><i class="fas fa-plus"></i> Add</a>
                </div>
        </div>

        <div class="card-body">
            <div class="gd-responsive-table">
      <div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row add-btn-area"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="admin-table_length"><label>Show <select name="admin-table_length" aria-controls="admin-table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="admin-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="admin-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

        <thead>
            <tr role="row"><th width="20%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 306px;">Image</th><th width="20%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 306px;">Title</th><th width="15%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 225px;">Actions</th></tr>
        </thead>

        <tbody>
            
@forelse ($data as $service_data )

<tr role="row" class="even">
    <td>
    <img src=" {{$service_data->s_image}} " alt="Image Not Found">
    </td>
    <td>
        {{$service_data->s_title}}
    </td>
    <td>
        {{$service_data->s_image}}
    </td>
    <td>
    <div class="action-list">
        <a class="btn btn-secondary btn-sm " href=" {{route('servicecms.edit', ['servicecm'=>$service_data->id]) }}   ">
            <i class="fas fa-edit"></i>
        </a>

        <form method="post" action="{{route('servicecms.destroy', ['servicecm'=>$service_data->id]) }} " >
     @csrf
            <input type="submit" > <i class="fas fa-trash-alt"></i>
      @method('delete')
      
        </form>
       
    </div>
    </td>
    </tr>
    
@empty
    
@endforelse


      
</tbody>

    </table></div></div><div class="row">
        <div class="col-sm-12 col-md-5"><div class="dataTables_info" id="admin-table_info" role="status" aria-live="polite"></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="admin-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="admin-table_previous"><a href="#" aria-controls="admin-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="admin-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="admin-table_next"><a href="#" aria-controls="admin-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
</div>
</div>
    </div>
</div>
</div>
</div>
</div>
@endsection