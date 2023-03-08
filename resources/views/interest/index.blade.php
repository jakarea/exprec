@extends('layouts.master')
@section('title') Home @endsection
@section('content') 
<main class="interrest-tool-page-wrap">

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

    <form id="searchForm" action="{{route('get_add_interest')}}" method="GET">
		<div class="interrest-search-wrap">
			<div class="interrest-search-box">
				<input type="text" class="form-control" name="q" placeholder="Enter a broad interest to explore...">
				<!-- spiner @S -->
				<div id="spiner">
				<i class="fas fa-spinner fa-pulse fa-2x"></i>
				</div>
				<!-- spiner @E -->
			</div>
			<!-- search settings @S -->
			<div class="search-settings-main-wrap">
				<div class="search-settings-wrap">
					<div class="row">
						<div class="col-md-4">
							<h6>LANGUAGE</h6>
							<select name="ln" id="" class="form-control">
								<option value="nl_NL">Dutch</option>
								<option value="English">English</option>
								<option value="Bangla">Bangla</option>
								<option value="Arabic">Arabic</option>
							</select>
						</div>
						<div class="col-md-4">
							<h6>MIN AUDIENCE SIZE</h6>
							<select name="min" id="" class="form-control">
								<option value="100">100</option>
								<option value="1000">1000</option>
								<option value="10000">10000</option>
								<option value="100000">100000</option>
							</select>
						</div>
						<div class="col-md-4">
							<h6>MAX AUDIENCE SIZE</h6>
							<select name="max" id="" class="form-control">
								<option value="10000000000">10000000000</option>
								<option value="1000000000000">1000000000000</option>
								<option value="10000000000000">10000000000000</option>
								<option value="100000000000000">100000000000000</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="me-md-5">
								<div class="d-flex align-items-center justify-content-between mt-4 mb-2">
									<h6 class="mb-0">EXCLUDED WORDS</h6>
									<a href="javascript:clearWordSelections();" class="clear-section"><img src="{{ asset('assets/images/clear-icon.svg') }}" alt="Clear" class="img-fluid"> Clear selection</a>
								</div>
								<div class="word-settings-box">
									@foreach($words as $key => $value)
									<div class="word-item">
										<div class="form-check">
											<input class="form-check-input wordClass" onclick='handleClick(this);' type="checkbox" value="{{ $key }}" id="{{ $value.'_'.$key }}">
											<label class="form-check-label" for="{{ $value.'_'.$key }}">
											{{ $key }}
											</label>
										</div>
										<p>{{ $value }}</p>
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="ms-md-5">
								<div class="d-flex align-items-center justify-content-between mt-4 mb-2">
									<h6 class="mb-0">EXCLUDED TOPICS</h6>
									<a href="javascript:clearTopicSelections();" class="clear-section"><img src="{{ asset('assets/images/clear-icon.svg') }}" alt="Clear" class="img-fluid"> Clear selection</a>
								</div>
								<div class="word-settings-box">
									@foreach($topics as $key => $value)
									<div class="word-item">
										<div class="form-check">
											<input class="form-check-input topicClass" onclick='handleTopicClick(this);' type="checkbox" value="{{ $key }}" id="{{ $value.'_'.$key }}">
											<label class="form-check-label" for="{{ $value.'_'.$key }}">
											{{ $key }}
											</label>
										</div>
										<p>{{ $value }}</p>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- search settings @E -->
			<div class="interrest-bttn-box">
				<button type="submit" id="SubmitExplore" class="btn btn-search">Explore</button>
				<button id="settings-toggle" class="btn">Settings</button>
			</div>
		</div>
	</form>
	<div class="popular-interest-wrap">
		<h5>Popular interest</h5>
		<div class="popular-imterest-box">
			<ul>
				@foreach($populars as $popular) 
				<li><a href="{{url('/add-interest')}}?q={{ $popular['keyword'] }}">{{ $popular['keyword'] }}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="d-flex align-items-center justify-content-between mt-4">
			<h5 class="mb-0">Selection</h5>
			<a href="#" id="clear-copy-box" class="clear-section"><img src="{{ asset('assets/images/clear-icon.svg') }}" alt="Clear" class="img-fluid"> Clear selection</a>
		</div>
		<!-- selection box @S -->
		<div class="selection-textarea-box">
			<div class="selection-textbox">
				<textarea name="" id="selection-box" cols="30" rows="5" class="form-control" placeholder="Click interests below to add them to your selection"></textarea>
				<i class="fas fa-check"></i>
				<!-- check icon -->
			</div>
			<div class="selection-copy-bttns">
				<a href="javascript:void(0)" id="copy-bttn"><img src="{{ asset('assets/images/copy-icon.svg') }}" alt="Copy" class="img-fluid"> Copy to clipboard</a>
				<a href="javascript:void(0)" id="save-modal"><img src="{{ asset('assets/images/save-icn.svg') }}" alt="Copy" class="img-fluid"> Save to project</a>
				<a href="javascript:downloadCSV()"><img src="{{ asset('assets/images/export-icon.svg') }}" alt="Copy" class="img-fluid"> Export to CSV</a>
			</div>
		</div>
		<!-- selection box @E -->
	</div>
	<!-- save to project modal @S -->
	<div class="save-to-project-modal">
		<div class="saveto-modal-txt">
			<h4>Save to project</h4>
			<form action="{{ route('post_projectlist') }}" method="post">
				@csrf
				<div class="form-group">
					<label for="">Save to an existing project</label>
					<select name="previous_project" id="" class="form-control">
						<option value="">Select Below</option>
						@foreach($projects as $project) 
						<option value="{{$project['id']}}">{{$project['name']}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Save to a new project</label>
					<input type="text" placeholder="Name your project" name="name" class="form-control">
				</div>
				<input type="hidden" name="project_details" id="project_details" value="">
				<div class="form-groups"> 
					<button type="button" class="btn btn-closes">Close</button>
					<button type="submit" class="btn btn-submits">Save</button>
				</div>
			</form>
		</div>
	</div>
	<!-- save to project modal @E -->
	<div class="interest-search-result-wrap">
       
		<h6>Explore {{ $size }} interests related to "<span id="search_by">{{ $q ? $q : '-_-' }}</span>"</h6>
		<div class="search-result-head">
			<div class="form-check">
				<input class="form-check-input select-all" type="checkbox" value="" id="flexCheckChecked" >
				<label class="form-check-label" for="flexCheckChecked">
				Select all
				</label>
			</div>
			<a href="{{ url('/add-interest/projects') }}"><img src="{{ asset('assets/images/save-icn.svg') }}" alt="Save Icon" class="img-fluid"> Show saved interest</a>
		</div>
		<!-- search result table @S -->
		<div class="search-result-table">
			<table class="table-responsive">
				<thead>
					<tr>
						<th>Interests</th>
						<th>Audience</th>
						<th >Topic</th>
						<th >Search</th>
						<th >Link</th>
					</tr>
				</thead>
				<tbody>
                    @php 
                        $i = 0;
                    @endphp
					@foreach($results as $key => $result)
                    @php 
                        $i++
                    @endphp
					<tr>
						<td>
							<div class="form-check">
								<input class="form-check-input checkAndHide" type="checkbox" value="{{ $result['name'] }}" id="flexCheckCheckeds{{$i}}" name="chks" data-rs='{{json_encode($result)}}'>
								<label class="form-check-label copy-table-value" for="flexCheckCheckeds{{$i}}">
								{{ $result['name'] }}
								</label>
							</div>
						</td>
						<td>
							<div>
								{{ $result['audience_size_upper_bound'] }}
							</div>
						</td>
						<td>
							<div>
                                <input class="form-check-input checkAndHideTopic" type="hidden" value="{{ isset($result['topic']) ? $result['topic'] : '--'}}">
								{{ isset($result['topic']) ? $result['topic'] : '--'}}
							</div>
						</td>
						<td>
							<div>
								{{ $q }}
							</div>
						</td>
						<td>
							<div>
								<a target="_blank" href="https://www.google.com/search?q={{ $result['name'] }}"><img src="{{ asset('assets/images/google-icon.svg') }}" alt="Google" class="img-fluid"></a>
								<a target="_blank" href="https://www.facebook.com/search/top/?q={{ $result['name'] }}"><img src="{{ asset('assets/images/fb-icon.svg') }}" alt="Facebook" class="img-fluid"></a>
								<a href="//{{ $_SERVER['HTTP_HOST'] }}/add-interest?q={{ $result['name'] }}"><img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search" class="img-fluid"></a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- search result table @E -->
	</div>
</main>
@endsection