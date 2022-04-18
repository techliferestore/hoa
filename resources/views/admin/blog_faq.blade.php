
@extends('admin.newlayout')
@section('head')
<link rel="stylesheet" href="{{asset('/')}}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/')}}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/')}}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <h1 class="text-center">Add FAQ</h1>
      <div class="container-fluid">
    
                    @livewire('admin.faq')
                      
</div>
</div>
</div>             

                                 

                               
   

@endsection