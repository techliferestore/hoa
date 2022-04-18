@extends('admin.newlayout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    <div class="row">

        <div class="card-body ">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                        <form class="admin-form" action="http://localhost/sunrobotronic/admin/service" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="IX1YQPfFQACNl4iG4YDvsdjdFm17IlZOnCtp8Q3N">
                            
                            <div class="form-group">
                                <label for="name">Set Image *</label>
                                <br>
                                    <img class="admin-img" src="http://localhost/sunrobotronic/assets/images/placeholder.png" alt="No Image Found">
                                <br>
                                <span class="mt-1">Image Size Should Be 65 x 65.</span>
                            </div>

                            <div class="form-group position-relative">
                                <label class="file">
                                    <input type="file" accept="image/*" class="upload-photo" name="photo" id="file" aria-label="File browser example">
                                    <span class="file-custom text-left">Upload Image...</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="title">Title *</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="">
                            </div>

                            <div class="form-group">
                                <label for="details">Details *</label>
                                <textarea name="details" id="details" class="form-control" rows="5" placeholder="Enter Details"></textarea>
                            </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-secondary ">Submit</button>
                            </div>

                            <div>
                        
                </div></form>
            </div>
        </div>
    </div>
        <!--middle block / section ends here-->
       
        <!--rightmost(third) block / section start here-->
      
        <!--rightmost(third) block / section ends here-->
    </div>
</div>
</div>
</div>
</div>
@endsection