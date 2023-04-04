@extends('layouts.master')
@section('title','Discover every ads on Facebook')

@section('style') 
<link href="{{ asset('assets/css/adspy.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" /> 
<link href="//code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />  
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />  

@endsection

@section('content') 
@php 
$countries = array(
    'AT' => 'Austria',
    'BE' => 'Belgium',
    'BG' => 'Bulgaria',
    'HR' => 'Croatia',
    'CY' => 'Cyprus',
    'CZ' => 'Czechia',
    'DK' => 'Denmark',
    'EE' => 'Estonia',
    'FI' => 'Finland',
    'FR' => 'France',
    'DE' => 'Germany',
    'GR' => 'Greece (Eurostat: EL)',
    'HU' => 'Hungary',
    'IE' => 'Ireland',
    'IT' => 'Italy',
    'LV' => 'Latvia',
    'LT' => 'Lithuania',
    'LU' => 'Luxembourg',
    'MT' => 'Malta',
    'NL' => 'Netherlands',
    'PL' => 'Poland',
    'PT' => 'Portugal',
    'RO' => 'Romania',
    'SK' => 'Slovakia',
    'SI' => 'Slovenia',
    'ES' => 'Spain',
    'SE' => 'Sweden',
    'EU' => 'European Union'
);

$languages = array(
    'bg' => 'Bulgarian',
    'cs' => 'Czech',
    'da' => 'Danish',
    'de' => 'German',
    'el' => 'Greek',
    'en' => 'English',
    'es' => 'Spanish',
    'et' => 'Estonian',
    'fi' => 'Finnish',
    'fr' => 'French',
    'ga' => 'Irish',
    'hr' => 'Croatian',
    'hu' => 'Hungarian',
    'it' => 'Italian',
    'lt' => 'Lithuanian',
    'lv' => 'Latvian',
    'mt' => 'Maltese',
    'nl' => 'Dutch',
    'pl' => 'Polish',
    'pt' => 'Portuguese',
    'ro' => 'Romanian',
    'sk' => 'Slovak',
    'sl' => 'Slovenian',
    'sv' => 'Swedish'
);

@endphp
<main class="addspy-dahboard-page">
	<div class="container-fluid">
		<form id="search-form">
			<div class="row">
				<div class="col-12">
					<div class="addspy-dash-head add-head">
						<h1>Discover every ads on Facebook <img src="{{ asset('assets/images/personalized-icon.svg') }}" alt="a" class="img-fluid"> </h1>
						<a href="#">
							<p>Tell me how does it works?</p>
						</a>
					</div>
					<!-- page search area @S -->
					<div class="interrest-search-wrap email-camp-search mb-0">
						<div class="interrest-search-box">
							<select name="search_type" id="search_type" >
								<option value="">SEARCH TYPE</option>
								<option value="KEYWORD_UNORDERED">UNORDERED KEYWORDS</option>
								<option value="KEYWORD_EXACT_PHRASE">EXECT MATCH</option>
							</select>
							<!-- <img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search icon" class="img-fluid"> -->
							<input type="text" name="search_terms" id="search_terms" class="form-control" placeholder="Search">
						</div>
						<div class="interrest-bttn-box">
							<button type="submit" id="searchBtn" href="javascript:void(0)">Search</button>
							<a href="javascript:void(0)" id="first-list-toggle">Filters</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="addspy-first-list" id="first-lists">
						<div class="d-flex">
							<h6>My first list</h6>
							<a href="#">Clear all <img src="{{ asset('assets/images/trash-icon.svg') }}" alt="" class="img-fluid"></a>
						</div>
						<div class="adspy-filter-box">
							<!-- <h6>Seen date:</h6>
								<p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid"> 
								<input id="datepicker" name="seen_start" placeholder="mm/dd/yyyy"> &nbsp; - &nbsp; <input name="seen_end" id="ad_delivery_date_max" placeholder="mm/dd/yyyy"></p> -->
							<select name="publisher_platforms" id="publisher_platforms">
								<option value="">Platform</option>
								<option value="">All</option>
								<option value="FACEBOOK">Facebook</option>
								<option value="INSTAGRAM">Instagram</option>
								<option value="AUDIENCE_NETWORK">Audience Network</option>
								<option value="MESSENGER">Messenger</option>
								<option value="WHATSAPP">WhatsApp</option>
								<option value="OCULUS">Oculus</option>
							</select>
							<select name="media_type" id="media_type">
								<option value=""  >Media Type</option>
								<option value="">All</option>
								<option value="Image">Image</option>
								<option value="Video">Video</option>
							</select>
							<select name="_sex" id="_sex">
								<option value="All">Sex</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<div class="customselect-wrap">
								<select class="selectpicker" multiple aria-label="Default select example" data-live-search="true" name="languages" id="languages">
								<option value="">Languages</option>
									@foreach ($languages as $code => $name)
										
										<option value="{{ $code }}">{{ $name }}</option>
									@endforeach
								</select>
							</div>
							<div class="customselect-wrap">
								<select class="selectpicker" multiple aria-label="Default select example" data-live-search="true" name="ad_reached_countries[]" id="ad_reached_countries">
									<option value="">Countries</option>
									@foreach ($countries as $code => $name)
									<option value="{{$code}}">{{$name}}</option>
									@endforeach
								</select>
							</div> 
							<div class="customselect-wrap">
								<select class="selectpicker" multiple aria-label="Default select example" data-live-search="true" name="_cta_type" id="_cta_type">
									<option value="">CTA Type</option>
									<option value="learn_more">Learn More</option>
									<option value="send_message">Send Message</option>
								</select>
							</div>  
							<select name="ad_active_status" id="ad_active_status">
								<option value="">Status</option>
								<option value="ACTIVE">Active</option>
								<option value="INACTIVE">InActive</option>
								<option value="ALL">All</option>
							</select>
						</div>
						<div class="adspy-filter-box">
							<h6>Creation date:</h6>
							<p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid"> 
								<input id="_creation_date_start" name="_creation_date_start" placeholder="mm/dd/yyyy">&nbsp; - &nbsp; <input name="_creation_date_end" id="_creation_date_end" placeholder="mm/dd/yyyy">
							</p>
							<h6>Delivery Date:</h6>
							<p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid">
								<input id="ad_delivery_date_min" name="ad_delivery_date_min" placeholder="YYYY-mm-dd">  - &nbsp; <input id="ad_delivery_date_max" name="ad_delivery_date_max" placeholder="YYYY-mm-dd">
							</p>
						</div>
						<div class="adspy-filter-box">
							<h6>First seen:</h6>
							<p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid">
								<input id="_first_seen_start" name="_first_seen_start" placeholder="mm/dd/yyyy">  - &nbsp; <input id="_first_seen_end" name="_first_seen_end" placeholder="mm/dd/yyyy">
							</p>
							<h6>Last seen:</h6>
							<p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid"> 
								<input id="_last_seen_start" name="__last_seen_start" placeholder="mm/dd/yyyy">  - &nbsp; <input name="_last_seen_end" id="_last_seen_end" placeholder="mm/dd/yyyy">
							</p>
						</div>
						<div class="adspy-filter-box">
							<h6>Page Id:</h6>
							<input id="search_page_ids" name="search_page_ids" placeholder="23765423456" type="text">
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="row">
			<div class="col-12">
				<div class="quick-query">
					<h6>Quick query:</h6>
					<a href="#">Dropshipping</a>
					<a href="#">Ecommerce</a>
					<a href="#"><img src="{{ asset('assets/images/save-icon.svg') }}" alt="" class="img-fluid"> Save current query</a>
				</div>
				<div class="addspy-multi-select">
					<div class="d-flex">
						<h6>Multi select:</h6>
						<p>⌘+A</p>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked> 
						</div>
					</div>
					<div class="multiple-sort">
						<img src="{{ asset('assets/images/sort-icon.svg') }}" alt="" class="img-fluid">
						<select name="" id="">
							<option value="">Sort By</option>
							<option value="">Sort 01</option>
							<option value="">Sort 02</option>
							<option value="">Sort 03</option>
							<option value="">Sort 04</option>
						</select>
						<i class="fas fa-angle-down"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="rows">
			<div id="ad-container" class="row">
				<!-- Data will be loaded here -->
			</div>
			<div class="d-flex align-items-center justify-content-center img-fluid d-none" id="ad-container-preloader">
				<img src="{{ asset('assets/images/preloader3.gif') }}" alt=""  style="width:25%">
			</div> 
		</div>
	</div>
</main>
@endsection

@section('script')
<script src="{{ asset('assets/js/facebook.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script> 

 

<script>
     $(function() {
        $( "#ad_delivery_date_min" ).datepicker({  dateFormat: 'yy-mm-dd'});
        $( "#ad_delivery_date_max" ).datepicker({  dateFormat: 'yy-mm-dd'});
        $( "#_first_seen_start" ).datepicker({  dateFormat: 'yy-mm-dd'});
        $( "#_first_seen_end" ).datepicker({  dateFormat: 'yy-mm-dd'});
        $( "#_last_seen_start" ).datepicker({  dateFormat: 'yy-mm-dd'});
        $( "#_last_seen_end" ).datepicker({  dateFormat: 'yy-mm-dd'});
        $( "#_creation_date_start" ).datepicker({  dateFormat: 'yy-mm-dd'});
        $( "#_creation_date_end" ).datepicker({  dateFormat: 'yy-mm-dd'});
    });
</script>

<script>
   const listToggle = document.getElementById('first-list-toggle');
    const firstList = document.getElementById('first-lists');

    const toggleLists = () => {
        firstList.classList.toggle("list-active");
    }

    listToggle.addEventListener('click',toggleLists);
</script>
@endsection