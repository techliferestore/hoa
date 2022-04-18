@extends('admin.newlayout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">


        <form action="{{route('servicecms.store')}}" method="POST" enctype="multipart/form-data">
      
            @csrf
            <div class="form-group">
              <label for="exampleFormControlFile1">Image</label>
              <input type="file" class="form-control-file" name="s_image"  id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Details</label>
                <input type="text" class="form-control-file" name="s_detail" id="exampleFormControlFile1">
              </div>

              <div class="form-group">
                <label for="exampleFormControlFile1">Title</label>
                <input type="text" class="form-control-file" name="s_title" id="exampleFormControlFile1">
              </div>

              <input type="submit">
          </form>
</div>
@endsection