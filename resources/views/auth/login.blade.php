
  
   @extends('layouts.auth')
   @section('content')

     <!--right part to create form-->
     <div class="col-md-8">
        <div class="hoa_userSIGN-whiteBG">
            <div class="hoa_login-backToHome-Button"><a type="button" href="../Home.html"
                class="hoa_login-backToHome-ButtonBorder mt-3">Back to
                home</a>
        </div>
        <div style="display: flex;flex-direction: column;align-items: center;">
            <div class="hoa_userSIGN-right-h" style="margin-top: 10%;"><span style="font-weight: 700;">Sign in
                </span>
                <span style="font-weight: 400;">to House of Accounts</span>
            </div>

            <div class="hoa_userSIGN-right-sec-h">Not a member yet ? <span class="hoa_userSIGN-right-link">Sign
                    up</span>
            </div>

            <div style="margin-top: 5%;">
                <form method="POST">
                    <div class="form-group">

                        <div class="row">
                            <div class="col-md-10 m-auto">
                                <form method="POST">
                                    <div class="form-group col-sm-12 m-auto">

                                        @csrf
                                        <div>
                                            <label class="hoa_userLogin-right-label" for="emailORphone">phone
                                                number
                                                or e-mail
                                                id</label>

                                            <input type="text"
                                                class="form-control hoa_userLogin-right-textBox col-md-10"
                                                id="emailORphone" name="email" :value="old('email')"  />
                                        </div>

                                        <div style="padding-top: 20%;">
                                            <label class="hoa_userLogin-right-label"
                                                for="password">password</label>

                                            <input type="password"
                                                class="form-control hoa_userLogin-right-textBox col-md-10 mb-2"
                                                id="password" name="password" /><br>

                                            <a href="{{route('password.email')}}" class="hoa_userLogin-forgotPass">Forgot
                                                password?</a>
                                        </div>

                                        <div class="m-auto hoa_userSubmit_button_div mt-5">
                                            <button class="btn hoa_userLogin-button"
                                                type="submit">Login</button>
                                        </div>

                                        <div class="m-auto hoa_userSubmit_button_div">
                                            <button type="button" class="btn btn-secondary"><img
                                                    src="assets/images/icon-facebook.png" alt="Facebook">
                                                Continue with Facebook</button>
                                        </div>

                                     {{--  <div class="m-auto hoa_userSubmit_button_div mb-5">
                                            <button type="button" class="btn btn-outline-primary"><img
                                                    src="assets/images/icon-google.png" alt="Google">
                                                Continue with Google</button>
                                        </div>--}}

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
{{--end--}}
   <!--right part to create form-->
 

                        
   @endsection
     
   
   
   
   
   
      
       

    
    

        

