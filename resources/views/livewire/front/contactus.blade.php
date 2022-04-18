
    <div class="col-md-6 hoa_dashboard-bookkeeping-last-right" style="background: #FFFFFF;">
       
    @if (session()->has('message'))
    <div style="color:green ;">
        {{ session('message') }}
    </div>
@endif
       
        <div class="row m-auto ">
            <div class="col-lg-8 col-10 col-md-9 m-auto mb-4 contact_meetingTaxt">
                <h1>Set a meeting</h1>
            </div>
            <div class="m-auto col-10 col-lg-8 col-md-9">
                <label for="fullname" class="mb-1 col-md-8" style="opacity: 0.6;">Your
                    Name</label>
                <input id="firstName" type="text" wire:model="name" class="form-control info-text" name="name"
                   required>              
                       
                   
            </div>

            <div class="m-auto col-10 col-lg-8 col-md-9 mt-4">
                <label class="col-md-10 mb-1" for="bussinessNumber" style="opacity: 0.6;">Bussiness
                    Number</label>
                <input type="text" class="form-control info-text "  wire:model="b_mob" value="" required>
                    @error('b_mob')<span class="text-danger">{{$message}}</span>@enderror

            </div>

            <div class="m-auto col-10 col-lg-8 col-md-9 mt-4">
                <label class="col-md-10 mb-1" for="bussinessNumber" style="opacity: 0.6;">Email</label>
                <input type="email" class="form-control info-text" 
                    name="email" wire:model="email" value="" required>
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror

            </div>

            <div class="mt-4 m-auto col-10 col-lg-8 col-md-9">
                <label for="Description" style="opacity: 0.6;" class="mb-1 col-md-12">Description
                    for your query (optional)</label>
                <input id="Description" type="text" wire:model="query" class="form-control info-text" name="query"
                    value="Description" required>
                    @error('query')<span class="text-danger">{{$message}}</span>@enderror
            </div>

            <button class="btn-lg lastDiv-right-button mt-5 mb-5 col-8 col-lg-6 col-md-7 m-auto"
                id="btnSubmit" wire:click.prevent="create_lead()" type="button">Send Call
                Request</button>
        </div>
    </div>
