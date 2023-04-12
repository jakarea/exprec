@extends('layouts.master')
@section('title') Addspy Details @endsection

@section('style') 
<link href="{{ asset('assets/css/adspy.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ asset('assets/css/video-controller.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="addspy-dahboard-page adspy-facebook-page-wrap">

<!-- save to project modal @S -->
<div class="save-to-project-modal" id="adspy-modal">
		<div class="saveto-modal-txt">
			<h4>Save to project</h4>
			<form id="projectForm" name="projectForm" method="post">
				<div class="form-group">
					<label for="">Save to an existing project</label>
					<select name="previous_project" id="project_id" class="form-control">
						<option value="">Select Below</option>
						@foreach($projects as $project) 
						<option name="project_id" value="{{$project['id']}}">{{$project['name']}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Save to a new project</label>
					<input type="text" placeholder="Name your project" name="project_name" id="project_name" class="form-control"> 
				</div>
				<input type="hidden" name="adData" id="adData" value="">
				<div class="form-groups"> 
					<button type="button" class="btn btn-closes" id="close-adspy-modal">Close</button>
					<button type="submit" class="btn btn-submits">Save</button>
				</div>
			</form>
		</div>
	</div>
	<!-- save to project modal @E -->

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="addspy-dash-head">
                    <h1>Ad details</h1>
                    <p>get more details from the ad here</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="adspy-head-bttn"> 
                    <a href="#" data-id="{{$ad->id}}" class="saveAdToList preventDefault">Save this Add</a>
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
                            @if(isset($ad->page_profile_picture_url))
                                <img src="{{ $ad->page_profile_picture_url}}" alt="shopify-image" class="img-fluid">
                            @endif
                            
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
                    @php 
                        $showed = true;
                    @endphp
                    @if(isset($ad->images) && count($ad->images) > 0)
                    @php 
                        $showed = false;
                    @endphp
                    <div class="ads-thumbnail-wrap">
                        <img src="{{ $ad->images[0]->original_image_url}}" alt="post-image" class="img-fluid">
                    </div>
                    @endif
            
                    <!-- add thumbnail @E -->

                    <!-- add slider @S -->
                    @if($showed && isset($ad->cards) && count($ad->cards) > 0)
                        @php 
                            $showed = false;
                        @endphp
                        <div class="ads-slider-wrap">
                            <div class="add-slider-arrows">
                                <a href="javascript:void(0)" class="prev"><i class="fas fa-angle-left"></i></a>
                                <a href="javascript:void(0)" class="next"><i class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="add-slider"> 
                                <!-- item @S -->
                                @foreach($ad->cards as $card)
                                <div class="slider-item">
                                
                                    @if($card->video_preview_image_url) 
                                    <video controlslist="nodownload" height="100%" poster="{{$card->video_preview_image_url}}"  width="100%" controls="">
                                    <source src="{{$card->video_hd_url ? $card->video_hd_url : $card->video_sd_url}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                    @else
                                    <img src="{{ $card->original_image_url}}" alt="post-image" class="img-fluid">
                                    @endif
                                
                                    <!--  item are visible inside slider = done -->
                                    <div class="ads-ftr-cta-bttn">
                                        @if(isset($card->caption))
                                        <a href="{{isset($ad->link_url) && $ad->link_url ? $ad->link_url : '#'}}" target="_blank">{{$ad->caption}}</a>
                                        @endif
                                        @if(isset($card->title))
                                        <h6>{{ $card->title}}</h6>
                                        @endif
                                        @if(isset($card->link_description))
                                        <p>{{ $card->link_description}}</p>
                                        @endif
                                        @if(isset($card->cta_text))

                                        <a href="{{ $card->link_url }}" class="cta-button" target="_blank">{{$card->cta_text}}</a>
                                        @endif
                                    </div> 
                                </div>
                                @endforeach
                                <!-- item @E --> 
                            </div>
                        </div>
                    @endif
                    <!-- add slider @E -->
                    @if($showed && isset($ad->videos) &&  count($ad->videos) > 0)
                    <!-- add video @S -->  

                    <div class="video-player-wrapper">
                        <div class="video-container ads-video-wrap">
                        <video class="video-container__video" controlslist="nodownload" height="100%" poster="{{$ad->videos[0]->video_preview_image_url}}"  width="100%" controls="">
                        <source src="{{$ad->videos[0]->video_hd_url ? $ad->videos[0]->video_hd_url : $ad->videos[0]->video_sd_url}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <!-- video controller @S -->
                        <div class="video-container__controls"> 
                            <div class="progress">
                                <div class="progress__current"></div>
                            </div>
                            <button class="control control--backward">
                                <i class="fas fa-backward"></i>
                            </button>
                            <button class="control control--play paused">
                                <i class="fas fa-play"></i>
                                <i class="fas fa-pause"></i>
                            </button>
                            <button class="control control--stop">
                                <i class="fas fa-stop"></i>
                            </button>
                            <button class="control control--forward">
                                <i class="fas fa-forward"></i>
                            </button>
                            <button class="control control--replay">
                                <i class="fas fa-sync"></i>
                            </button>
                            <button class="control control--volume">
                                <div class="control--volume__button">
                                    <i class="fas fa-volume-off"></i>
                                    <i class="fas fa-volume-up"></i>
                                </div>
                                <input class="control--volume__slider" value="1" type="range" min="0" max="1" step="0.01">
                            </button>
                            <button class="control control--fullscreen">
                                <i class="fas fa-expand"></i>
                                <i class="fas fa-compress"></i>
                            </button>
                        </div>
                        <!-- video controller @E -->
                    </div>
                    </div> 
                    @endif
                    <!-- add video @E -->
                    @if($showed)
                        <div class="ads-ftr-cta-bttn">
                            @if(isset($ad->caption))
                            <a href="{{isset($ad->link_url) && $ad->link_url ? $ad->link_url : '#'}}" target="_blank">{{$ad->caption}}</a>
                            @endif
                            <div class="details">
                                @if(isset($ad->title))
                                <h6>{{ $ad->title}}</h6>
                                @endif
                                @if(isset($ad->link_description))
                                <p>{{ $ad->link_description}}</p>
                                @endif
                                @if(isset($ad->cta_text))
                            </div>

                            <a href="#" class="cta-button" target="_blank">{{$ad->cta_text}}</a>
                            @endif
                        </div>
                    @endif
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
                            @if(isset($ad->page_profile_picture_url))
                                <img src="{{ $ad->page_profile_picture_url}}" alt="{{ $ad->page_name . 'profile picture'}}" class="img-fluid">
                            @endif
                            <div class="media-body">
                                <h5>{{ $ad->page_name}}</h5>
                                <h6>ID: {{$ad->page_id}}</h6>
                            </div>

                        </div>
                        @if(isset($ad->page_profile_uri))
                        <a href="{{ $ad->page_profile_uri}}" target="_blank"><i class="fas fa-link"></i></a>
                        @endif
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
                                        @if(isset($ad->page_like_count))
                                        <p><i class="fas fa-thumbs-up"></i>: {{$ad->page_like_count}} likes</p>
                                        @endif
                                        @php
                                            $category = '';
                                            $obj = isset($ad->page_categories) ? $ad->page_categories : '';
                                            $obj = json_encode($obj);
                                            $pattern = '/"(\d+)":"([^"]+)"/';
                                            if (preg_match($pattern, $obj, $matches)) {
                                                $category = $matches[2] ;
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
                                    @if(isset($ad->instagram_actor_name))
                                    <div class="media-body">
                                        <p><i class="fa-solid fa-check"></i>: {{ $ad->instagram_actor_name}}</p>

                                    </div>
                                    @endif
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
                                            {{ isset($ad->spend->lower_bound) ? $ad->spend->lower_bound : "" }}{{ isset($ad->spend->upper_bound) ? ' ~ ' . $ad->spend->upper_bound : "" }}
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
                                        <p><span>Impressions:</span>{{ isset($ad->impressions->lower_bound) ? $ad->impressions->lower_bound : "" }} {{ isset($ad->impressions->upper_bound) ? '~' . $ad->impressions->upper_bound : '' }}</p></li>
                                        <li><i class="fas fa-circle"></i> <p><span>Audiencen</span>: {{ isset($ad->estimated_audience_size->lower_bound) ? $ad->estimated_audience_size->lower_bound : "" }} {{ isset($ad->estimated_audience_size->upper_bound) ?'~' . $ad->estimated_audience_size->upper_bound : '' }}</p></li>
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
@php
  $adData = isset($ad) && property_exists($ad, 'demographic_distribution') ? $ad->demographic_distribution : null;
  $adRegionData = isset($ad) && property_exists($ad, 'delivery_by_region') ? $ad->delivery_by_region : null;
@endphp
@endsection

@section('script')
<script src="{{asset('assets/js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/slider-config.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/videoController.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/js/facebook.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

  var data = {!! json_encode($adData) !!};

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
var delivery_by_region = {!! json_encode($adRegionData) !!};

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