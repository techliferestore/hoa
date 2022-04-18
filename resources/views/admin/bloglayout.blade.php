<!DOCTYPE html>
<html>

<head>
    <title>House of Accounts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="default-style" content="text/html; charset=UTF-8" />
    <meta name="HandheldFriendly" content="true" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="assets/css/hc-offcanvas-nav.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/navigation.css">
    <link href="assets/css/steper.css" rel="stylesheet" />
    <link href="assets/css/prototype.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/styles2.css" rel="stylesheet" />
    <link href="assets/css/styleHome.css" rel="stylesheet" />
    <link href="assets/css/dashboard.css" rel="stylesheet" />
    <link href="assets/css/admin.css" rel="stylesheet" />
    <link href="assets/css/styleBlog.css" rel="stylesheet" />


    <livewire:styles />
</head>
   

<body>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
<script src="assets/js/navigation.js"></script>


<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('ckfinder/ckfinder.js')}}"></script>
<script>
            // Note: in this sample we use CKEditor with two extra plugins:
            // - uploadimage to support pasting and dragging images,
            // - image2 (instead of image) to provide images with captions.
            // Additionally, the CSS style for the editing area has been slightly modified to provide responsive images during editing.
            // All these modifications are not required by CKFinder, they just provide better user experience.
            if ( typeof CKEDITOR !== 'undefined' ) {
                    //CKEDITOR.disableAutoInline = true;
                    CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
                    var editor = CKEDITOR.replace( '', 
                    {
                        ckfinder: {
                                uploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json')}}"
                            },
                            extraPlugins: 'uploadimage,image2',
                    removePlugins: 'image',
                    height:300
                    } );
                    CKFinder.setupCKEditor( editor );
            }
            else {
            document.getElementById( 'editor1' ).innerHTML =
                    '<div class="tip-a tip-a-alert">This sample requires working Internet connection to load CKEditor 4 from CDN.</div>'
            }
            
            if ( typeof CKEDITOR !== 'undefined' ) {
                    //CKEDITOR.disableAutoInline = true;
                    CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
                    var editor = CKEDITOR.replace( '', 
                    {
                        ckfinder: {
                                uploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json')}}"
                            },
                            extraPlugins: 'uploadimage,image2',
                    removePlugins: 'image',
                    height:300
                    } );
                    CKFinder.setupCKEditor( editor );
            }
            else {
            document.getElementById( 'editor1' ).innerHTML =
                    '<div class="tip-a tip-a-alert">This sample requires working Internet connection to load CKEditor 4 from CDN.</div>'
            }
            
         
            
    </script>
    <livewire:scripts />
</body>

</html>