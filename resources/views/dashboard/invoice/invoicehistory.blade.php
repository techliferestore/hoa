@extends('dashboard.layout.dlayout')
@section('content')
<main id="main" class="home-section">
        <!-- steper Start -->
        <section class="steper-bg2 bg_white">
            <div class="container-fluid">
                <div class="row">
                    <div class="steper-num" style="margin-bottom: -1.2%;">
                        <ul>
                            <li class="h2 col-md-2 pe-3" style="opacity: 1;"><span><img src="{{asset('/')}}assets/icons/Bill.svg">
                                    <p><a href="{{route('invoice')}}">Invoice</a></p>
                                </span></li>
                            <li style="opacity: 0.3;" class="h2 col-md-2 me-md-5 pe-3"><span><img
                                        src="{{asset('/')}}assets/icons/user.svg" />
                                    <p style="color: #EB5757;"><a href="{{route('invoice')}}"> Invoice Profile</a></p>
                                </span>
                            </li>
                            <li class="h2 col-md-2 pe-3" style="opacity: 0.3;"><span><img
                                        src="{{asset('/')}}assets/icons/history.svg" />
                                    <p><a href="{{route('invoicehistory')}}"> History</a></p>
                                </span>
                            </li>
                            <li class="h2 col-md-2" style="opacity: 0.3;"><span><img src="{{asset('/')}}assets/icons/settings.svg"
                                        width="20px" height="20px" />
                                    <p><a href="{{route('invoicesetting')}}">Settings</a></p>
                                </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- steper End -->

        <!--central part starts here-->
        <section>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="hoa_invoiceHist-month">Month<span>
                                <select class="hoa_invoiceHist-select ms-3 p-2">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>Octomber</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </span></div>
                    </div>
                    <div class="col-md-6 row justify-content-end">
                        <div class="col-md-8">
                            <input type="search" placeholder="Find client quickly by name/company"
                                class="hoa_invoiceHist-search form-control p-2" />
                        </div>
                    </div>
                </div>

                <!--section for table for invoice history starts here-->

                <div class="row col-md-12 mt-2">
                    <div class="hoa_invoiceHist-table">
                        <div class="hoa_invoiceHist-tableBackG">
                            <div class="hoa_invoiceHist-Greenheader row pt-2">
                                <table class="table table-borderless mb-0">
                                    <tr class="margin_Dot3">
                                        <th scope="col" class="greenHeaderText">Invoice number</th>
                                        <th scope="col" class="greenHeaderText">Date of issue</th>
                                        <th scope="col" class="greenHeaderText">Due Date</th>
                                        <th scope="col" class="greenHeaderText">Total amount</th>
                                        <th scope="col" class="greenHeaderText">amount paid</th>
                                        <th scope="col" class="greenHeaderText">outstanding balance</th>
                                        <th scope="col" class="greenHeaderText">Payment status</th>
                                        <th scope="col" class="greenHeaderText" style="opacity: 0;">Payment status</th>
                                        <th scope="col" class="greenHeaderText" style="opacity: 0;">Payment status</th>
                                    </tr>
                                </table>
                            </div>

                            <div class="mt-2 mb-2">
                                <p class="hoa_invoiceHist-tBodyHead p-1">
                                    <a class="btn-lg hoa_invoiceHist-tBodyHeadButton" data-bs-toggle="collapse"
                                        href="#collapseExample" role="button" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Atul Kumar &nbsp; | &nbsp; <img src="{{asset('/')}}assets/icons/invoiceHistoryUser.svg" />
                                        <span class="hoa_invoiceHist-info">info</span> </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body margin_Dot3 pe-0 ps-0">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr class="margin_Dot3">
                                                    <td scope="col" class="text-align-left">0003</td>
                                                    <td scope="col" class="text-align-left" colspan="2">22/06/21</td>
                                                    <td scope="col" class="text-align-left">28/06/21</td>
                                                    <td scope="col" class="text-align-left" colspan="2">7000</td>
                                                    <td scope="col" class="text-align-left" colspan="2">0</td>
                                                    <td scope="col" class="text-align-left">7000</td>
                                                    <td scope="col" class="text-align-left" colspan="2" id="paid1">
                                                        Paid</td>
                                                    <td scope="col" class="text-align-center">
                                                        <button class="hoa_invoiceHist-markUnpaid btn-sm"
                                                            onclick="changePaid('paid1')" id="changePaid1">Mark
                                                            unpaid</button>
                                                    </td>
                                                    <td scope="col" class="text-align-center"><select
                                                            class="hoa_invoiceHist-tBodySelect p-1">
                                                            <option selected class="hoa_invoiceHist-tBodyOption">Actions
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr class="margin_Dot3">
                                                    <td scope="col" class="text-align-center">0003</td>
                                                    <td scope="col" class="text-align-center" colspan="2">22/06/21</td>
                                                    <td scope="col" class="text-align-center">28/06/21</td>
                                                    <td scope="col" class="text-align-center" colspan="2">7000</td>
                                                    <td scope="col" class="text-align-center" colspan="2">0</td>
                                                    <td scope="col" class="text-align-center">7000</td>
                                                    <td scope="col" class="text-align-center" colspan="2" id="paid2">
                                                        Paid</td>
                                                    <td scope="col" class="text-align-center">
                                                        <button class="hoa_invoiceHist-markUnpaid btn-sm"
                                                            onclick="changePaid('paid2')">Mark
                                                            unpaid</button>
                                                    </td>
                                                    <td scope="col" class="text-align-center"><select
                                                            class="hoa_invoiceHist-tBodySelect p-1">
                                                            <option selected class="hoa_invoiceHist-tBodyOption">Actions
                                                            </option>
                                                        </select></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <p class="hoa_invoiceHist-tBodyHead p-1 mt-2">
                                    <a class="btn-lg hoa_invoiceHist-tBodyHeadButton" data-bs-toggle="collapse"
                                        href="#collapseExample2" role="button" aria-expanded="false"
                                        aria-controls="collapseExample2">
                                        Arun Kumar Singh &nbsp; | &nbsp; <img
                                            src="{{asset('/')}}assets/icons/invoiceHistoryUser.svg" />
                                        <span class="hoa_invoiceHist-info">info</span> </a>
                                </p>
                                <div class="collapse" id="collapseExample2">
                                    <div class="card card-body margin_Dot3">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">0003</th>
                                                    <td>22/06/21</td>
                                                    <td>28/06/21</td>
                                                    <td>7000</td>
                                                    <td>0</td>
                                                    <td>7000</td>
                                                    <td class="hoa_invoiceHist-tBodyPaid">Paid</td>
                                                    <td><button class="hoa_invoiceHist-markUnpaid btn-sm">Mark
                                                            unpaid</button>
                                                    </td>
                                                    <td>
                                                        <select class="hoa_invoiceHist-tBodySelect p-1">
                                                            <option selected class="hoa_invoiceHist-tBodyOption">Actions
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">0012</th>
                                                    <td>22/06/21</td>
                                                    <td>28/06/21</td>
                                                    <td>7000</td>
                                                    <td>0</td>
                                                    <td>7000</td>
                                                    <td class="hoa_invoiceHist-tBodyPaid">Paid</td>
                                                    <td><button class="hoa_invoiceHist-markUnpaid btn-sm">Mark
                                                            unpaid</button>
                                                    </td>
                                                    <td>
                                                        <select class="hoa_invoiceHist-tBodySelect p-1">
                                                            <option selected class="hoa_invoiceHist-tBodyOption">Actions
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <p class="hoa_invoiceHist-tBodyHead p-1 mt-2">
                                    <a class="btn-lg hoa_invoiceHist-tBodyHeadButton" data-bs-toggle="collapse"
                                        href="#collapseExample3" role="button" aria-expanded="false"
                                        aria-controls="collapseExample3">
                                        sandeep singh &nbsp; | &nbsp; <img src="{{asset('/')}}assets/icons/invoiceHistoryUser.svg" />
                                        <span class="hoa_invoiceHist-info">info</span> </a>
                                </p>
                                <div class="collapse" id="collapseExample3">
                                    <div class="card card-body margin_Dot3">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">0003</th>
                                                    <td>22/06/21</td>
                                                    <td>28/06/21</td>
                                                    <td>7000</td>
                                                    <td>0</td>
                                                    <td>7000</td>
                                                    <td class="hoa_invoiceHist-tBodyPaid">Paid</td>
                                                    <td><button class="hoa_invoiceHist-markUnpaid btn-sm">Mark
                                                            unpaid</button>
                                                    </td>
                                                    <td>
                                                        <select class="hoa_invoiceHist-tBodySelect p-1">
                                                            <option selected class="hoa_invoiceHist-tBodyOption">Actions
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">0012</th>
                                                    <td>22/06/21</td>
                                                    <td>28/06/21</td>
                                                    <td>7000</td>
                                                    <td>0</td>
                                                    <td>7000</td>
                                                    <td class="hoa_invoiceHist-tBodyPaid">Paid</td>
                                                    <td><button class="hoa_invoiceHist-markUnpaid btn-sm">Mark
                                                            unpaid</button>
                                                    </td>
                                                    <td>
                                                        <select class="hoa_invoiceHist-tBodySelect p-1">
                                                            <option selected class="hoa_invoiceHist-tBodyOption">Actions
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">0012</th>
                                                    <td>22/06/21</td>
                                                    <td>28/06/21</td>
                                                    <td>7000</td>
                                                    <td>0</td>
                                                    <td>7000</td>
                                                    <td class="hoa_invoiceHist-tBodyPaid">Paid</td>
                                                    <td><button class="hoa_invoiceHist-markUnpaid btn-sm">Mark
                                                            unpaid</button>
                                                    </td>
                                                    <td>
                                                        <select class="hoa_invoiceHist-tBodySelect p-1">
                                                            <option selected class="hoa_invoiceHist-tBodyOption">Actions
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">0012</th>
                                                    <td>22/06/21</td>
                                                    <td>28/06/21</td>
                                                    <td>7000</td>
                                                    <td>0</td>
                                                    <td>7000</td>
                                                    <td class="hoa_invoiceHist-tBodyPaid">Paid</td>
                                                    <td><button class="hoa_invoiceHist-markUnpaid btn-sm">Mark
                                                            unpaid</button>
                                                    </td>
                                                    <td>
                                                        <select class="hoa_invoiceHist-tBodySelect p-1">
                                                            <option selected class="hoa_invoiceHist-tBodyOption">Actions
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--section for table for invoice history ends here-->

            </div>
        </section>
        <!--central part ends here-->

    </main>

@endsection

<script>
        function changePaid(id) {
            document.getElementById(id).innerHTML = "Unpaid";
            document.getElementById(id).style.color = "#EB5757";
        }
    </script>