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
                            <img src="{{ $ad->page_profile_picture_url}}" alt="shopify-image" class="img-fluid">
                            <div class="media-body">
                                <h6>{{ $ad->page_name}}</h6>
                                <p>ID: {{$ad->id}}</p>
                                @foreach($ad->publisher_platforms as $platform) 
                                <a href="#" class="social-site"> <i class="fa-brands fa-{{$platform}}"></i></a>
                                @endforeach
                            </div>
                        </div>
                        <a href="#"><i class="fas fa-copy"></i></a>
                    </div>
                  
                    <div class="details">
                        <p>{{ isset($ad->title) ? $ad->title : "" }}</a></p>
                    </div>
                    <!-- add thumbnail @S -->
                    @if(count($ad->images) > 0)
                    <div class="ads-thumbnail-wrap">
                        <img src="{{ $ad->images[0]->original_image_url}}" alt="post-image" class="img-fluid">
                    </div>
                    @endif
                    <!-- add thumbnail @E -->
                    <!-- add slider @S -->
                    <!-- <div class="ads-slider-wrap">
                        <div class="add-slider-arrows">
                            <a href="javascript:void(0)" class="prev"><i class="fas fa-angle-left"></i></a>
                            <a href="javascript:void(0)" class="next"><i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="add-slider">
                            <img src="{{asset('assets/images/post-02.png')}}" alt="post-image" class="img-fluid">
                            <img src="{{asset('assets/images/post-01.png')}}" alt="post-image" class="img-fluid">
                            <img src="{{asset('assets/images/post-03.png')}}" alt="post-image" class="img-fluid">
                        </div>
                    </div> -->
                    <!-- add slider @E -->
                    @if(count($ad->videos) > 0)
                    <!-- add video @S -->
                    <div class="ads-video-wrap">
                        <video controlslist="nodownload" height="100%" loop="" poster="{{$ad->videos[0]->video_preview_image_url}}" src="{{$ad->videos[0]->video_hd_url}}" width="100%" controls=""></video>
                    </div>
                    @endif
                    <!-- add video @E -->
                    <div class="ads-ftr-cta-bttn">
                        <a href="{{$ad->link_url}}">{{$ad->caption}}</a>
                        <h6>{{ $ad->title}}</h6>
                        <p>{{ $ad->link_description}}</p>
                        @if($ad->cta_text)
                        <a href="//{{ $ad->caption }}" class="cta-button">{{$ad->cta_text}}</a>
                        @endif
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
                            <img src="{{ $ad->page_profile_picture_url}}" alt="{{ $ad->page_name . 'profile picture'}}" class="img-fluid">
                            <div class="media-body">
                                <h5>{{ $ad->page_name}}</h5>
                                <h6>ID: {{$ad->page_id}}</h6>
                            </div>

                        </div>
                        <a href="{{ $ad->page_profile_uri}}"><i class="fas fa-link"></i></a>
                    </div>
                    <div class="page-details-wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="media mt-3">
                                    <div class="social-site">
                                        <i class="fa-brands fa-facebook"></i>
                                    </div>
                                    <div class="media-body">
                                        <p><i class="fa-solid fa-id-badge"></i>: ID: {{ $ad->page_id }}</p>
                                        <p><i class="fas fa-thumbs-up"></i>: {{$ad->page_like_count}} likes</p>
                                        @php
                                        $obj = $ad->page_categories;
                                        $obj = json_encode($obj);

                                        $pattern = '/"(\d+)":"([^"]+)"/';

                                        if (preg_match($pattern, $obj, $matches)) {
                                        $category = isset($matches[2]) ? $matches[2] :'';
                                        }
                                        @endphp
                                        <p><i class="fas fa-globe"></i> {{ $category }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="media mt-4">
                                    <div class="social-site">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                    <div class="media-body">
                                        <p><i class="fa-solid fa-check"></i>: {{ $ad->instagram_actor_name}}</p>

                                    </div>
                                </div>
                            </div>
 

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="page-more-info">
                                    <h4>More info</h4>
                                    <ul> 
                                        <li>
                                            <i class="fas fa-circle"></i>
                                            <p><span>Spend:</span> 
                                            {{ isset($ad->spend->lower_bound) ? $ad->spend->lower_bound : "" }}{{ isset($ad->spend->upper_bound) ?  ' ~ ' . $ad->spend->upper_bound : "" }} 
                                            </p>
                                        </li> 

                                        <li>
                                            <i class="fas fa-circle"></i> 
                                            <p><span>Currency:</span> 
                                                {{ isset($ad->currency) ? $ad->currency : "" }}
                                            </p>
                                        </li>
                                        <li>
                                            <i class="fas fa-circle"></i>
                                            <p><span>Paid By:</span> 
                                                {{ isset($ad->byline) ? $ad->byline : "" }} 
                                            </p>
                                        </li>
                                        <li><i class="fas fa-circle"></i>
                                         <p><span>Impressions:</span> 
                                         {{ isset($ad->impressions->lower_bound) ? $ad->impressions->lower_bound : "" }}  {{ isset($ad->impressions->upper_bound) ? '~' . $ad->impressions->upper_bound : ''  }} </p></li>
                                        <li><i class="fas fa-circle"></i> <p><span>Audiencen</span>: 
                                        {{ isset($ad->estimated_audience_size->lower_bound) ? $ad->estimated_audience_size->lower_bound : "" }} {{ isset($ad->estimated_audience_size->upper_bound) ?'~' . $ad->estimated_audience_size->upper_bound : ''  }} </p></li>
                                    </ul> 
                                  
                                </div>
                                <div class="page-graph-wrap">

                                    <canvas id="demographicChart"></canvas>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <div class="col-12">
                <div class="about-page-header-wrap" style="margin-top:50px">

                    <canvas id="regionChart"></canvas>

                </div>
            </div>


        </div>
    </div>
</main>
@endsection

@section('script')
<script src="{{asset('assets/js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/slider-config.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  var data = @json($ad->demographic_distribution);

  const labels = [...new Set(data.map(item => item.age))];
const maleData = data.filter(item => item.gender === 'male').map(item => item.percentage);
const femaleData = data.filter(item => item.gender === 'female').map(item => item.percentage);
const unknownData = data.filter(item => item.gender === 'unknown').map(item => item.percentage);

const chartData = {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
                label: 'Male',
                data: maleData,
                backgroundColor: '#f87139',
                borderColor: 'rgba(266, 98, 98, 1)',
                borderWidth: 1
            },
            {
                label: 'Female',
                data: femaleData,
                backgroundColor: '#ff6263',
                borderColor: 'rgba(255, 99, 98, 1)',
                borderWidth: 1
            },
            {
                label: 'Unknown',
                data: unknownData,
                backgroundColor: '#ff7b02',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Demographic Distribution by Gender',
            fontSize: 24
        },
        legend: {
            display: true,
            position: 'bottom'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    max: 0.4
                }
            }]
        }
    }
};

var ctx = document.getElementById('demographicChart').getContext('2d');
var demographicChart = new Chart(ctx, chartData);




// Get the canvas element
const canvas = document.getElementById('regionChart');

// Get the data
var delivery_by_region = @json($ad->delivery_by_region);

const deliveryData = {
    labels: delivery_by_region.map(region => region.region),
    datasets: [{
        label: 'Delivery by Region',
        data: delivery_by_region.map(region => region.percentage),
        fill: false,
        borderColor: '#f87139',
        lineTension: 0.1,
        pointRadius: 5,
    }]
};

// Create the chart
const chart = new Chart(canvas, {
    type: 'line',
    data: deliveryData,
    options: {
        responsive: true,
        interaction: {
            intersect: false,
            axis: 'x'
        },
        plugins: {
            title: {
                display: true,
                text: (ctx) => 'Step ' + ctx.chart.data.datasets[0].stepped + ' Interpolation',
            }
        }
    }
});
</script>
@endsection