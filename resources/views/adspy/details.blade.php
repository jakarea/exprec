@extends('layouts.master')
@section('title') Addspy Details @endsection

@section('style') 
<link href="{{ asset('assets/css/adspy.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="addspy-dahboard-page">
   <div class="container-fluid">
     <div class="row">
       <div class="col-12">
         <div class="addspy-dash-head">
           <h1>Ad details</h1>
           <p>get more details from the add here:</p>
         </div>
       </div>
     </div> 
      
     <div class="row mb-4">
      <div class="col-md-5">
        <div class="discover-personalized-list mb-3">
          <div class="media"> 
            <div class="media-body">
              <h5>About the ad</h5> 
            </div>
          </div>
        </div>
        <div class="about-add-box-wrap">
          <div class="d-flex"> 
            <div class="media">
                <img src="{{asset('assets/images/email-camping/integration-05.png')}}" alt="shopify-image" class="img-fluid">
                <div class="media-body">
                    <h6>Model.salon</h6>
                    <p>ID: 547655727512182</p>
                </div>
            </div>
            <a href="#"><i class="fas fa-copy"></i></a>
          </div> 
          <div class="details">
            <p>Need a protective case for your new iPhone? How about this new phone case? Show now>> <a href="#">https://www.smd-salon.com/collections/case-for-iphone-14-series/light-grey-c14</a></p>
          </div>
          <!-- add thumbnail @S -->
          <div class="ads-thumbnail-wrap">
            <img src="{{asset('assets/images/post-01.png')}}" alt="post-image" class="img-fluid">
          </div>
          <!-- add thumbnail @E -->
          <!-- add slider @S -->
          <div class="ads-slider-wrap">
            <div class="add-slider-arrows">
                <a href="javascript:void(0)" class="prev"><i class="fas fa-angle-left"></i></a>
                <a href="javascript:void(0)" class="next"><i class="fas fa-angle-right"></i></a>
            </div>
            <div class="add-slider">
                <img src="{{asset('assets/images/post-02.png')}}" alt="post-image" class="img-fluid">
                <img src="{{asset('assets/images/post-01.png')}}" alt="post-image" class="img-fluid">
                <img src="{{asset('assets/images/post-03.png')}}" alt="post-image" class="img-fluid">
            </div>
          </div>
          <!-- add slider @E -->
          <!-- add video @S -->
          <div class="ads-video-wrap">
          <video controlslist="nodownload" height="100%" loop="" poster="https://scontent.fbzl5-1.fna.fbcdn.net/v/t39.35426-6/336676912_4391002427790751_2779402217058499657_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=cf96c8&amp;_nc_ohc=9fJr5mpIOewAX9mFtGa&amp;_nc_ht=scontent.fbzl5-1.fna&amp;oh=00_AfDGwoLs1BvZQRQF_BK1ncUknwWJqJe3rMPuJD1hS7iZIA&amp;oe=642A0922" src="https://video.fbzl5-1.fna.fbcdn.net/v/t42.1790-2/10000000_221395897224251_831093678673635362_n.?_nc_cat=106&amp;ccb=1-7&amp;_nc_sid=cf96c8&amp;_nc_ohc=oVGNHYK0CdcAX-2sP_e&amp;_nc_ht=video.fbzl5-1.fna&amp;oh=00_AfDgiXqXcUIJPlyaP5J7qiaavnj3ChWhNoSS1IvntwUC3g&amp;oe=6429E1A5" width="100%" controls=""></video>
          </div>
          <!-- add video @E -->
          <div class="ads-ftr-cta-bttn">
            <a href="#">SMD-SALON.COM</a>
            <h6>Protect Camera Liquid Silicone Phone Case For iPhone 14 Series</h6>
            <p>MODEL SALON mission: ❤️ WE MAKE A DIFFERENCE ❤️ Everyday, we strive to deliver high-quality products with the</p>
            <a href="#" class="cta-button">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="discover-personalized-list mb-3">
          <div class="media"> 
            <div class="media-body">
              <h5>About the Page</h5> 
            </div>
          </div>
        </div>
        <div class="about-page-header-wrap">
            <div class="d-flex">
                <div class="media">
                    <img src="{{asset('assets/images/email-camping/integration-05.png')}}" alt="shopify-image" class="img-fluid">
                    <div class="media-body">
                        <h5>Avatars Saga -euen</h5>
                        <h6>ID: 23456785432345</h6>
                    </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis"></i></a>
            </div>
            <div class="page-details-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="media mt-3">
                            <div class="social-site">
                                <i class="fa-brands fa-facebook"></i>
                            </div>
                            <div class="media-body">
                                <p><i class="fa-solid fa-id-badge"></i>: ID: 103948161504134</p> 
                                <p><i class="fas fa-thumbs-up"></i>: 224 likes</p>
                                <p><i class="fas fa-globe"></i> E-commerce website</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="media mt-4">
                            <div class="social-site">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="media-body">
                                <p><i class="fa-solid fa-id-badge"></i>: ID: 103948161504134</p>
                                <p><i class="fas fa-users"></i>: 764 followers</p>
                                <p><i class="fas fa-globe"></i> E-commerce website</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="page-more-info">
                            <h4>More info</h4>
                            <p>MODEL SALON mission: WE MAKE A DIFFERENCE! Everyday, we strive to deliver high-quality products with</p>

                            <p>MODEL SALON mission: WE MAKE A DIFFERENCE! Everyday, we strive to deliver high-quality products with.MODEL SALON mission: WE MAKE A DIFFERENCE! Everyday, we strive to deliver high-quality products with.MODEL SALON mission: WE MAKE A DIFFERENCE! Everyday, we strive to deliver high-quality products with</p>
                        </div>
                        <div class="page-graph-wrap">
                          <div id="ColumnChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>  
     </div>

   </div>
 </main>
@endsection

@section('script')
<script src="{{asset('assets/js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/slider-config.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
  // setup apex charts for #LineChartTwo type line chart
  var options = {
          series: [{
          name: 'Male',
          data: [44, 55, 57, 56, 61, 58, 63]
        }, {
          name: 'Female',
          data: [76, 85, 101, 98, 87, 105, 91]
        }],
        colors: ['#FF6262', '#727DFF'],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '75%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: true
        },
        stroke: {
          show: true,
          width: 1,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
          title: {
            text: '$ (thousands)'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#ColumnChart"), options);
        chart.render();
         
</script>
@endsection