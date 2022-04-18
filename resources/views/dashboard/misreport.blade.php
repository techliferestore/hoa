@extends('dashboard.layout.dlayout')

@section('nav')
@include('dashboard.include.nav')
@endsection

@section('head')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
@endsection

@section('content')
<main id="main" class="home-section">
    <!-- steper Start -->
    <section class="steper-bg2">
        <div class="container-fluid">
            <div class="row m-auto hoa-custom-container">
                <div class="col-lg-2 col-md-2 col-3"></div>

                <div class="ps-md-0 pe-md-0 col-lg-10 col-md-10">
                    <div class="d-flex mobile_mis">
                        <div class="py-md-2 flex-grow-1 uploadtext_documents">
                            <h3 class="Mis_reportText"><span class="ms-2"> MIS report</span> <span class="mis_update">Last
                                    updated</span><span class="mis_dateTime">14 oct,21</span></h3>
                        </div>
                        <div class="py-md-2 mt-3 mt-md-0">
                            <img src="{{asset('/')}}assets/icons/misDownload.svg" class="img-fluid download_mis mb-2" alt="">
                            <span class="mis_download">Download full rerport</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- steper End -->
    <div class="col-md-10 carousel_mobile mb-auto">
        <div class="carousel_mis" style="background-color:#459BFF;">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <h2 class="sales_summaryTaxt text-align-center">1 Sales Summary</h2>
                    </div>
                    <div class="carousel-item active">
                        <h2 class="sales_summaryTaxt text-align-center">1 Sales Summary</h2>
                    </div>
                    <div class="carousel-item">
                        <h2 class="sales_summaryTaxt text-align-center">1 Sales Summary</h2>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon mis_prev" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon mis_next" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!--central part for info filling start-->
    <section class="bodycont3" style="background-color: #f6f6f6 !important;">
        <div class="row mis_reprotcontent m-auto hoa-custom-container pe-md-0">
            <div class="col-lg-2 col-md-2 col-3"></div>
            <div class="col-md-7 pt-md-4 m-auto" style="background-color: #fff;">
                <div class="col-md-12 m-auto col-12">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-grow-1 bd-highlight mis_summaryTaxt"><span class="mis_sales">1 |
                            </span> Sales Summary</div>
                        <a class="p-2 bd-highlight mis_taxtLink" href="http://www.taxclear.in">http://www.taxclear.in</a>
                    </div>
                </div>
                <div class="col-md-12 mt-2 mb-4 m-auto">
                    <div class="mis_headingTaxt mt-2 mb-3">
                        Is Asian Paints undervalued compared to its <button class="mis_fairtaxt" data-bs-toggle="tooltip" data-bs-placement="top" title="Lorem aufbauf jabfujaba iafha iafika haifhiakfbaifba faobfoafboaf afabfoafbaf abfouabfoua foabfoluafb">fair
                            value</button>
                        and
                        its price relative to the market?
                    </div>
                    <div class="d-flex flex-row bd-highlight invoice-scrollCat mt-4">
                        <ul class="misReportUL">
                            <li class="p-2 bd-highlight">
                                <div class="mis_boder">
                                    <h3 class="mis_pricetaxt">95.91</h3>
                                    <h6 class="mis_pricePara">Price to Earnings (PE) ratio</h6>
                                </div>
                            </li>
                            <li class="p-2 bd-highlight">
                                <div class="mis_boder">
                                    <div class="col-sm-12">
                                        <div class="misboder_taxt">
                                            <h3 class="mis_pricetaxt">25.5</h3>
                                            <h6 class="mis_pricePara">Price to Earnings (PE) ratio</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mis_horzitalLine"></div>
                <div class="col-md-12 m-auto">
                    <div class="mis_sharetaxt mb-4 mt-5">
                        <span class="mis_onepointTaxt">1.1 |</span> Share price vs . Fair Value
                    </div>
                   
                    <div class="img_line mt-3">
                        <div>
                            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                        </div>



<script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green","blue","orange","brown"];
    
    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "World Wine Production 2018"
        }
      }
    });
    </script>
    
                    </div>
                </div>

                <div class="col-md-11 mt-5 mb-5 m-auto">
                    <div class="mis_lineVertical"></div>
                    <div class="mis_boder_content mb-2">
                        <div class="row m-auto">
                            <div class="col-md-6 mid mis_reprotContent">
                                <div class="mt-4">
                                    <div class="mis_contenttaxt mx-4 mb-3">
                                        <span class="mis_circle"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevs">PE vs Industry:</span>
                                        <span class="mis_asianpaint">ASIANPAINT is poor value based on its
                                            PE Ratio (95.6x) compared to the Indian </span>
                                    </div>
                                    <div class="mis_contenttaxt mx-4 mb-4">
                                        <span class="mis_circle"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevs">PE vs Market:<span>
                                                <span class="mis_asianpaint">ASIANPAINT is poor value based
                                                    on its PE Ratio (95.6x. </span>
                                    </span></span></div>
                                </div>
                            </div>
                            <div class="col-md-6 mid mis_reprotContents">
                                <div class="mis_reprotConten mx-4 mb-3">
                                    <div class="mis_contenttaxtg mt-4">
                                        <span class="mis_circleg"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevsg">PE vs Industry:</span>
                                        <span class="mis_asianpaintg">ASIANPAINT is poor value based on its
                                            PE Ratio (95.6x) compared to the Indian </span>
                                    </div>
                                    <div class="mis_contenttaxtg mt-3 mb-4">
                                        <span class="mis_circleg"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevsg">PE vs Market:<span>
                                                <span class="mis_asianpaintg">ASIANPAINT is poor value based
                                                    on its PE Ratio (95.6x. </span>
                                    </span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-11 m-auto">
                    <div class="mb-5">
                        <div class="mis_borderTaxtcontent">
                            <div class="Key_Pointers mx-2 mt-2">
                                <img src="{{asset('/')}}assets/icons/mis_question.svg" class="img-fluid" alt="">
                                <span class="mis_keypointer mb-2">Key Pointers</span>
                            </div>
                            <nav class="mis_keytaxt mt-4">
                                <ul>
                                    <li class="mb-2">ASIANPAINT is poor value based on its PE Ratio (95.6x) compared
                                        to the
                                        Indian. </li>
                                    <li class="mb-2">ASIANPAINT is poor value based on its PE Ratio (95.6x) compared
                                        to the
                                        Indian. </li>
                                    <li>ASIANPAINT is poor value based on its PE Ratio (95.6x) compared to the
                                        Indian. </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="mis_horzitalLine"></div>
                <div class="col-md-12 mt-5 m-auto">
                    <div class="mis_sharetaxt mb-4 mt-2">
                        <span class="mis_onepointTaxt">1.2 |</span> Equity Shares
                    </div>
                    <div class="row mt-4 mb-5 m-auto">
                        <div class="col-md-6 m-auto">
                            <div class="col-lg-8 m-auto">
                                <div class="img-equity_Shares">
                                    
<canvas id="pieChart" style="width:100%;max-width:600px"></canvas>
                               
<script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];
    
    new Chart("pieChart", {
      type: "doughnut",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "World Wide Wine Production 2018"
        }
      }
    });
    </script>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="boder_equity_shares">
                                <div class="mis_rightSidecontent mt-4">
                                    <div class="mis_contenttaxt mt-4 mx-4 mb-3">
                                        <span class="mis_circle"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevs">PE vs Industry:</span>
                                        <span class="mis_asianpaint">ASIANPAINT is poor value based on its
                                            PE Ratio (95.6x) compared to the Indian </span>
                                    </div>
                                    <div class="mis_contenttaxt mx-4 mt-3 mb-4">
                                        <span class="mis_circleg"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevsg">PE vs Market:<span>
                                                <span class="mis_asianpaintg">ASIANPAINT is poor value based
                                                    on its PE Ratio (95.6x) compared to the Indian </span>
                                    </span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="row misMobile_device ps-0 pe-0 m-auto">
                            <div class="col-md-6 mis_reprotContent">
                                <div class="mt-4">
                                    <div class="mis_contenttaxt mx-4 mb-3">
                                        <span class="mis_circle"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevs">PE vs Industry:</span>
                                        <span class="mis_asianpaint">ASIANPAINT is poor value based on its
                                            PE Ratio (95.6x) compared to the Indian </span>
                                    </div>
                                    <div class="mis_contenttaxt mx-4 mb-4">
                                        <span class="mis_circle"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevs">PE vs Market:<span>
                                                <span class="mis_asianpaint">ASIANPAINT is poor value based
                                                    on its PE Ratio (95.6x. </span>
                                    </span></span></div>
                                </div>
                            </div>
                            <div class="col-md-6 mis_reprotContents mt-4">
                                <div class="mis_reprotConten mx-4 mb-3">
                                    <div class="mis_contenttaxtg">
                                        <span class="mis_circleg"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevsg">PE vs Industry:</span>
                                        <span class="mis_asianpaintg">ASIANPAINT is poor value based on its
                                            PE Ratio (95.6x) compared to the Indian </span>
                                    </div>
                                    <div class="mis_contenttaxtg mt-3 mb-4">
                                        <span class="mis_circleg"><i class="bi bi-circle-fill"></i></span>
                                        <span class="mis_pevsg">PE vs Market:<span>
                                                <span class="mis_asianpaintg">ASIANPAINT is poor value based
                                                    on its PE Ratio (95.6x. </span>
                                    </span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mis_horzitalLine"></div>
                <div class="col-md-12 mt-5 m-auto">
                    <div class="col-md-12">
                        <div class="mis_sharetaxt mb-2 mt-2">
                            <span class="mis_onepointTaxt">1.3 |</span> Reference links
                        </div>
                    </div>
                    <div class="col-md-12 mb-5">
                        <div>
                            <a class="mis_taxtLink mobile_link mt-3" href="http://www.taxclear.in">
                                http://www.taxclear.in
                            </a>
                        </div>
                        <div>
                            <a class="mis_taxtLink mobile_link mt-2" href="http://www.tradings.view.in">
                                http://www.tradings.view.in
                            </a>
                        </div>
                        <div>
                            <a class="mis_taxtLink mobile_link mt-2 mb-5" href="http://www.mastertradersofsen.in">
                                http://www.mastertradersofsen.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2 pe-md-0">
                <div class="mis_rightcontent" style="background-color: #fff; height: 100%;">
                    <br><br>
                    <div class="mis_navlink_item col-lg-10 col-md-10 m-auto ms-lg-0 col-sm-12">
                        <ul class="ps-3 ps-lg-5">
                            <li>
                                <a class="mis_navlink active" href="">1 Sales Summary</a>
                            </li>
                            <li>
                                <a class="mis_navlink  mt-2 mb-2" href="">Exception report</a>
                            </li>
                            <li>
                                <a class="mis_navlink  mt-2 mb-2" href="">On demand reports</a>
                            </li>
                            <li>
                                <a class="mis_navlink  mt-2 mb-2" href="">Financial Reports</a>
                            </li>
                            <li>
                                <a class="mis_navlink  mt-2 mb-2" href="">Inventory reports</a>
                            </li>
                            <li>
                                <a class="mis_navlink  mt-2 mb-2" href="">Sales Reports</a>
                            </li>
                            <li>
                                <a class="mis_navlink  mt-2 mb-2" href="">Budget reports</a>
                            </li>
                            <li>
                                <a class="mis_navlink  mt-2 mb-2" href="">Production reports </a>
                            </li>
                            <li>
                                <a class="mis_navlink  mt-2 mb-2" href="">Cash flow statements</a>
                            </li>
                        </ul>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--central part ends-->


</main>



@endsection

@section('js')

<script>

var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {...}
});


    </script>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
   

@endsection