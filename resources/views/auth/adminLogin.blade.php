<!DOCTYPE html>
<html lang="en">

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
    <link href="{{asset('/')}}assets/css/hc-offcanvas-nav.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/navigation.css">
    <link href="{{asset('/')}}assets/css/steper.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/prototype.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/styles2.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/styleHome.css" rel="stylesheet" />
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h1 class="text-center m-5">Admin login</h1>
                  
                    <form method="post" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="row mt-3">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Input email address">
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Input password">
                                    <label for="password">Password</label>
                               
                                 <button class="btn hoa_userLogin-button" type="submit">Submit</button>
                            </div>
                        </div>  

                        @if(\Session::has('error'))
                        <div class="alert text-danger ">{{ \Session::get('error') }}</div>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>