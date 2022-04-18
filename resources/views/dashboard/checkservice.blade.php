@extends('dashboard.layout.dlayout')
@section('nav')
@include('dashboard.include.nav')
@endsection

@section('content')

<section class="bodycont bodycont-mob" style="background-color: #f6f6f6 !important;">


   
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Service Name</th>
            <th scope="col">Purchase Date</th>
            <th scope="col">Expire Date</th>
            <th scope="col">Payment Status</th>
        
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>bookeeping</td>
            <td>1april2022</td>
            <td>3may 2022</td>
            <td>Paid 
<button>Renew Plan</button>

            </td>
          </tr>
         
        </tbody>
      </table>
      
</section>


@endsection