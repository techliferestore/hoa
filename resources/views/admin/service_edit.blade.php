@extends('admin.newlayout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">


        <form method="POST" action="{{route('servicecms.update', ['servicecm'=>1])}}" enctype="multipart/form-data" >
            @method('put')
         @csrf
            <div class="form-group">
              <label for="exampleFormControlFile1">Image</label>
              <input type="file" class="form-control-file" name="s_image" value="{{$data->s_image}}  "  id="exampleFormControlFile1">
            </div>
           
            <div class="form-group">
                <label for="exampleFormControlFile1">title</label>
                <input type="text" class="form-control-file" name="s_title" value="{{$data->s_title}}  " id="exampleFormControlFile1">
              </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Details</label>
                <input type="text" class="form-control-file" name="s_detail" value="{{$data->s_detail}}" id="exampleFormControlFile1">
              </div>

              <input type="submit">
          </form>
</div>
@endsection