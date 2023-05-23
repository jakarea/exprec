@extends('layouts.admin')
@section('title','Personal Space Page ')
@section('style')
<link href="{{ asset('assets/css/timeline.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@role("Customer")
<!-- === timeline create page @S === -->
<main class="timeline-page-wrap">

    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12 col-12">
            {{-- todo list @S --}}
            <div class="todo-list-wrap">
                <div class="todo-head">
                    <h3>Personal Space</h3>
                </div>
                <div class="todos-main-area">
                    {{-- main list @S --}}
                    <div class="todo-box-list">
                        <div class="d-flex">
                            <h6>To Do</h6>
                            <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                        </div>
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status danger">Very Urgent</span>
                            <p>Go next level agency UI Design</p>
                            <div class="status-icons">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span>
                                <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                                <a href="#"><i class="fa-regular fa-comment"></i> 2</a>
                                <a href="#"><i class="fa-solid fa-paperclip"></i> 1</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status success">Doing Leter</span>
                            <p>Go next level agency UI Design</p>
                            <div class="status-icons">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span>
                                <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                                <a href="#"><i class="fa-regular fa-comment"></i> 2</a>
                                <a href="#"><i class="fa-solid fa-paperclip"></i> 1</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status warning">Have to do</span>
                            <p>Go next level agency UI Design</p>
                            <div class="status-icons">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span>
                                <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                                <a href="#"><i class="fa-regular fa-comment"></i> 2</a>
                                <a href="#"><i class="fa-solid fa-paperclip"></i> 1</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status success">Doing Leter</span>
                            <p>Go next level agency UI Design</p>
                            <div class="status-icons">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span>
                                <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                                <a href="#"><i class="fa-regular fa-comment"></i> 2</a>
                                <a href="#"><i class="fa-solid fa-paperclip"></i> 1</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                        <div class="d-flex mt-3">
                            <h6><i class="fas fa-plus me-2"></i> Add Card</h6>
                            <a href="#"><i class="fa-solid fa-layer-group"></i></a>
                        </div>
                    </div>
                    {{-- main list @E --}}
                    {{-- progress list @S --}}
                    <div class="todo-box-list">
                        <div class="d-flex">
                            <h6>Work in progress</h6>
                            <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                        </div>
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status danger">Very Urgent</span>
                            <p>Go next level agency UI Design</p>
                            <div class="status-icons">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span>
                                <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                                <a href="#"><i class="fa-regular fa-comment"></i> 2</a>
                                <a href="#"><i class="fa-solid fa-paperclip"></i> 1</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status success">Doing Leter</span>
                            <p>Go next level agency UI Design</p>
                            <div class="status-icons">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span>
                                <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                                <a href="#"><i class="fa-regular fa-comment"></i> 2</a>
                                <a href="#"><i class="fa-solid fa-paperclip"></i> 1</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                         
                        <div class="d-flex mt-3">
                            <h6><i class="fas fa-plus me-2"></i> Add Card</h6>
                            <a href="#"><i class="fa-solid fa-layer-group"></i></a>
                        </div>
                    </div>
                    {{-- progress list @E --}}
                    {{-- upcomming list @S --}}
                    <div class="todo-box-list">
                        <div class="d-flex">
                            <h6>Up Coming Work</h6>
                            <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                        </div> 
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status warning">Have to do</span>
                            <p>Go next level agency UI Design</p>
                            <div class="status-icons">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span>
                                <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                                <a href="#"><i class="fa-regular fa-comment"></i> 2</a>
                                <a href="#"><i class="fa-solid fa-paperclip"></i> 1</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                         
                        <div class="d-flex mt-3">
                            <h6><i class="fas fa-plus me-2"></i> Add Card</h6>
                            <a href="#"><i class="fa-solid fa-layer-group"></i></a>
                        </div>
                    </div>
                    {{-- upcomming list @E --}}
                    {{-- done list @S --}}
                    <div class="todo-box-list">
                        <div class="d-flex">
                            <h6>Done</h6>
                            <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                        </div> 
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status success">Completed</span>
                            <p>Go next level agency UI Design</p>
                            <div class="status-icons">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span>
                                <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                                <a href="#"><i class="fa-regular fa-comment"></i> 2</a>
                                <a href="#"><i class="fa-solid fa-paperclip"></i> 1</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                         
                        <div class="d-flex mt-3">
                            <h6><i class="fas fa-plus me-2"></i> Add Card</h6>
                            <a href="#"><i class="fa-solid fa-layer-group"></i></a>
                        </div>
                    </div>
                    {{-- done list @E --}}
                    {{-- reading list @S --}}
                    <div class="todo-box-list me-0">
                        <div class="d-flex">
                            <h6>Reading List</h6>
                            <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                        </div> 
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status danger">Must Read</span>
                            <p>Story Brand Process</p>
                            <div class="status-icons"> 
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span> 
                                <a href="#">Remove</a>
                            </div>
                        </div>
                        {{-- item @E --}}
                        {{-- item @S --}}
                        <div class="todo-item-box">
                            <span class="status warning">Try to read</span>
                            <p>Story Brand Process</p>
                            <div class="status-icons"> 
                                <span class="clock"><i class="fa-regular fa-clock"></i> 24 May</span> 
                                <a href="#">Remove</a>
                            </div>
                        </div>
                        {{-- item @E --}} 
                    </div>
                    {{-- reading list @E --}}
                </div>
            </div>
            {{-- todo list @E --}}
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12">
            {{-- suggested book @S --}}
            <div class="suggested-book-wrap">
                <div class="book-head">
                    <h3>Suggested Book</h3>
                </div>
                {{-- book item @S --}}
                <div class="book-item-box">
                    <div class="thumbnail">
                        <img src="{{asset('assets/images/suggested-book-01.png')}}" alt="suggested-book-01" class="img-fluid">
                    </div>
                    <div class="book-txt">
                        <h5>Story Brand process</h5>
                        <h6>Donald Miller</h6><p>Guide to intuitive web design, minimizing cognitive load for users. Guide to intuitive web design, minimizing</p>

                        <div class="d-flex mt-3">
                            <h6><i class="fas fa-plus me-2"></i> Add to Read</h6>
                            <a href="#"><i class="fa-solid fa-layer-group"></i></a>
                        </div>
                    </div>
                </div>
                {{-- book item @E --}}
                {{-- book item @S --}}
                <div class="book-item-box">
                    <div class="thumbnail">
                        <img src="{{asset('assets/images/suggested-book-02.png')}}" alt="suggested-book-01" class="img-fluid">
                    </div>
                    <div class="book-txt">
                        <h5>Story Brand process</h5>
                        <h6>Donald Miller</h6><p>Guide to intuitive web design, minimizing cognitive load for users. Guide to intuitive web design, minimizing</p>

                        <div class="d-flex mt-3">
                            <h6><i class="fas fa-plus me-2"></i> Add to Read</h6>
                            <a href="#"><i class="fa-solid fa-layer-group"></i></a>
                        </div>
                    </div>
                </div>
                {{-- book item @E --}}
                {{-- book item @S --}}
                <div class="book-item-box">
                    <div class="thumbnail">
                        <img src="{{asset('assets/images/suggested-book-01.png')}}" alt="suggested-book-01" class="img-fluid">
                    </div>
                    <div class="book-txt">
                        <h5>Story Brand process</h5>
                        <h6>Donald Miller</h6><p>Guide to intuitive web design, minimizing cognitive load for users. Guide to intuitive web design, minimizing</p>

                        <div class="d-flex mt-3">
                            <h6><i class="fas fa-plus me-2"></i> Add to Read</h6>
                            <a href="#"><i class="fa-solid fa-layer-group"></i></a>
                        </div>
                    </div>
                </div>
                {{-- book item @E --}}
                {{-- book item @S --}}
                <div class="book-item-box">
                    <div class="thumbnail">
                        <img src="{{asset('assets/images/suggested-book-02.png')}}" alt="suggested-book-01" class="img-fluid">
                    </div>
                    <div class="book-txt">
                        <h5>Story Brand process</h5>
                        <h6>Donald Miller</h6><p>Guide to intuitive web design, minimizing cognitive load for users. Guide to intuitive web design, minimizing</p>

                        <div class="d-flex mt-3">
                            <h6><i class="fas fa-plus me-2"></i> Add to Read</h6>
                            <a href="#"><i class="fa-solid fa-layer-group"></i></a>
                        </div>
                    </div>
                </div>
                {{-- book item @E --}}
            </div>
            {{-- suggested book @E --}}
        </div>
    </div>



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