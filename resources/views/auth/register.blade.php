@extends('layouts.auth')
@section('content')


<div class="col-md-8">
    <div class="hoa_userSIGN-whiteBG">
        <div class="hoa_login-backToHome-Button"><a type="button" href="../Home.html" class="hoa_login-backToHome-ButtonBorder mt-3">Back to
                home</a>
        </div>

        <div style="display: flex;flex-direction: column;align-items: center;">
            <div class="hoa_userSIGN-right-h mt-5"><span style="font-weight: 700;">Sign Up </span>
                <span style="font-weight: 400;">to House of Accounts</span>
            </div>

            <div class="hoa_userSIGN-right-sec-h">Already a member ? <span class="hoa_userSIGN-right-link">Sign
                    in</span>
            </div>
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="text-danger">{{$error}}</div>
            @endforeach
        @endif
            <div class="mt-5">
                <form method="POST" {{ route('register') }}>
                    @csrf
                    <div class="form-group">
                        <div class="col-md-7 m-auto">
                            <div class="row">
                                <div class="col">
                                    <label class="hoa_userSIGN-right-label col-md-6" for="firstName">first
                                        name</label>
                                    <input type="text" id="firstName" name="name" :value="old('name')"
                                        class="form-control hoa_userSIGN-right-textbox col-12 col-md-6 col-lg-6" />
                                </div>

                                <div class="col">
                                    <label class="hoa_userSIGN-right-label col-md-6"
                                        for="surname">surname</label>
                                    <input type="text" id="surname" name="surname"
                                        class=" form-control hoa_userSIGN-right-textbox col-12 col-md-6 col-lg-6" />
                                </div>
                            </div>

                            <div style="margin-top: 5%;">
                                <label class="hoa_userSIGN-right-label col-md-12" for="emailID">e-mail
                                    id</label>
                                <input type="text"
                                    class="form-control hoa_userSIGN-right-textbox2 col-12 col-md-12"
                                    id="emailID" id="emailID" name="email" :value="old('email')" placeholder="your business id" />
                            </div>

                            <div style="margin-top: 5%;">
                                <label class="hoa_userSIGN-right-label col-md-12"
                                    for="password">password</label>
                                <input type="password"
                                    class="form-control hoa_userSIGN-right-textbox2 col-12 col-md-12"
                                    id="emailID" name="password" placeholder="6+ characters" />
                            </div>


                            <div style="margin-top: 5%;">
                                <label class="hoa_userSIGN-right-label col-12 col-md-12"
                                    for="password">Confirm Password</label>
                                <input type="password"
                                    class="form-control hoa_userSIGN-right-textbox2 col-12 col-md-12"
                                    id="emailID"     name="password_confirmation" placeholder="6+ characters" />
                            </div>
                            <div style="margin-top: 5%;">
                                <label class="hoa_userSIGN-right-label col-12 col-md-12" for="phoneNumber">phone
                                    number</label>
                                <input type="text"
                                    class="form-control hoa_userSIGN-right-textbox2 col-12 col-md-12"
                                    id="phoneNumber" name="phone" />
                            </div>
                          

                            <div style="margin-top: 5%;">
                                <input type="checkbox" id="checkT&C" name="checkT&C"
                                    class="hoa_userSIGN-right-check" required /> <span
                                    class="hoa_userSIGN-right-checkText">By
                                    creating account
                                    means
                                    you are agree
                                    to our <span style="font-weight: 600;">terms of conditions, private
                                        policy</span>
                                    and use of cookies
                                </span>
                            </div>

                            <div class="hoa_userSubmit_button_div col-md-8 m-auto mt-5 mb-5">
                                <button class="btn hoa_userLogin-button" type="submit">Sign up</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--end--}}

     

        

      



    
@endsection
       