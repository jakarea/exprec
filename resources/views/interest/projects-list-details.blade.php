@extends('layouts.master')

@section('title') Home @endsection

@section('content') 

<main class="interrest-tool-page-wrap">

    <form id="searchForm" action="{{route('get_add_interest')}}" method="GET">
        <div class="interrest-search-wrap">
            <div class="interrest-search-box">
            <input type="text" class="form-control" name="q" placeholder="Enter a broad interest to explore...">
            </div>
            <div class="interrest-bttn-box">
                <button type="submit" class="btn btn-search">Explore</button>
            </div>
        </div>
    </form>

    <!-- search settings @S -->
    
    <!-- search settings @E -->
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
            <!-- <a href="javascript:void(0)"><img src="{{ asset('assets/images/export-icon.svg') }}" alt="Copy" class="img-fluid"> Export to CSV</a> -->
        </div>
        </div>
        <!-- selection box @E -->
    </div> 

    <div class="interest-search-result-wrap">
         
        <div class="search-result-head">
        <div class="form-check">
            <input class="form-check-input select-all" type="checkbox" value="" id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
            Select all
            </label>
        </div> 
        </div>
        <!-- search result table @S -->
        
        <div class="search-result-table">
        <table>
            <thead>
            <tr>
                <th width="30%">Interests</th>
                <th>Audience</th>
                <th>Topic</th> 
                <th width="15%">Link</th>
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
								<input class="form-check-input checkAndHide" type="checkbox" value="{{ $result->name }}" id="flexCheckCheckeds{{$i}}" name="chks" data-rs='{{json_encode($result)}}'>
								<label class="form-check-label copy-table-value" for="flexCheckCheckeds{{$i}}">
								{{ $result->name }}
								</label>
							</div>
						</td>
						<td>
							<div>
								{{ $result->audience_size_upper_bound }}
							</div>
						</td>
						<td>
							<div>
                                <input class="form-check-input checkAndHideTopic" type="hidden" value="{{ isset($result->topic) ? $result->topic : ''}}">
								{{ isset($result->topic) ? $result->topic : ''}}
							</div>
						</td>
						
						<td>
							<div>
								<a target="_blank" href="https://www.google.com/search?q={{ $result->name }}"><img src="{{ asset('assets/images/google-icon.svg') }}" alt="Google" class="img-fluid"></a>
								<a target="_blank" href="https://www.facebook.com/search/top/?q={{ $result->name }}"><img src="{{ asset('assets/images/fb-icon.svg') }}" alt="Facebook" class="img-fluid"></a>
								<a href="//{{ $_SERVER['HTTP_HOST'] }}/add-interest?q={{ $result->name }}"><img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search" class="img-fluid"></a>
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