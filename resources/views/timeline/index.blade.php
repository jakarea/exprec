@extends('layouts.admin')
@section('title','Timeline Page ')
@section('style')
<link href="{{ asset('assets/css/timeline.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@role("Customer")
<!-- === timeline create page @S === -->
<main class="timeline-page-wrap">
    {{-- timeline @S --}}
    <div class="timeline-box-wrap">
        <div class="timeline-head">
            <h3>Time Line</h3>
        </div>
        <div class="main-timeline-area">
            <div class="timeline-top">
                {{-- timeline item @S --}}
                <div class="timeline-item-box">
                    <ul>
                        <li class="active">Visual Hierarchy Enhancement</li>
                        <li class="d-active">Accessible UI Design</li>
                        <li class="active">Real-time Form Validation</li>
                        <li class="d-active">Onboarding Process Optimization</li>
                    </ul>
                    <br> <br>
                    <span class="date">23 May, 23</span>
                </div>
                {{-- timeline item @E --}} 
                {{-- timeline item @S --}}
                <div class="timeline-item-box">
                    <ul>
                        <li class="active">Visual Hierarchy Enhancement</li>
                        <li class="d-active">Accessible UI Design</li>
                        <li class="active">Real-time Form Validation</li>
                        <li class="d-active">Onboarding Process Optimization</li>
                    </ul>
                    <br> <br>
                    <span class="date">23 May, 23</span>
                </div>
                {{-- timeline item @E --}} 
                {{-- timeline item @S --}}
                <div class="timeline-item-box">
                    <ul>
                        <li class="active">Visual Hierarchy Enhancement</li>
                        <li class="d-active">Accessible UI Design</li>
                        <li class="active">Real-time Form Validation</li>
                        <li class="d-active">Onboarding Process Optimization</li>
                    </ul>
                    <br> <br>
                    <span class="date">23 May, 23</span>
                </div>
                {{-- timeline item @E --}} 
                {{-- timeline item @S --}}
                <div class="timeline-item-box">
                    <ul>
                        <li class="active">Visual Hierarchy Enhancement</li>
                        <li class="d-active">Accessible UI Design</li>
                        <li class="active">Real-time Form Validation</li>
                        <li class="d-active">Onboarding Process Optimization</li>
                    </ul>
                    <br> <br>
                    <span class="date">23 May, 23</span>
                </div>
                {{-- timeline item @E --}}  
            </div>
           
            <div class="timeline-bottom">
                {{-- timeline item @S --}}
                <div class="timeline-item-box time-bottom-item">
                    <span class="date">23 May, 23</span>
                    <br> <br>
                    <ul>
                        <li class="active">Visual Hierarchy Enhancement</li>
                        <li class="d-active">Accessible UI Design</li>
                        <li class="active">Real-time Form Validation</li>
                        <li class="d-active">Onboarding Process Optimization</li>
                    </ul>
                </div>
                {{-- timeline item @E --}}
                {{-- timeline item @S --}}
                <div class="timeline-item-box time-bottom-item">
                    <span class="date">23 May, 23</span>
                    <br> <br>
                    <ul>
                        <li class="active">Visual Hierarchy Enhancement</li>
                        <li class="d-active">Accessible UI Design</li>
                        <li class="active">Real-time Form Validation</li>
                        <li class="d-active">Onboarding Process Optimization</li>
                    </ul>
                </div>
                {{-- timeline item @E --}}
                {{-- timeline item @S --}}
                <div class="timeline-item-box time-bottom-item">
                    <span class="date">23 May, 23</span>
                    <br> <br>
                    <ul>
                        <li class="active">Visual Hierarchy Enhancement</li>
                        <li class="d-active">Accessible UI Design</li>
                        <li class="active">Real-time Form Validation</li>
                        <li class="d-active">Onboarding Process Optimization</li>
                    </ul>
                </div>
                {{-- timeline item @E --}}
                {{-- timeline item @S --}}
                <div class="timeline-item-box time-bottom-item">
                    <span class="date">23 May, 23</span>
                    <br> <br>
                    <ul>
                        <li class="active">Visual Hierarchy Enhancement</li>
                        <li class="d-active">Accessible UI Design</li>
                        <li class="active">Real-time Form Validation</li>
                        <li class="d-active">Onboarding Process Optimization</li>
                    </ul>
                </div>
                {{-- timeline item @E --}}
            </div>
        </div> 
    </div>
    {{-- timeline @E --}}
</main>
<!-- === timeline create page @E === -->
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection

@section('script')
@endsection