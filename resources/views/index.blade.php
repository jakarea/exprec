@extends('layouts.master')
@section('title','Home Page ')
@section('style') 
<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- === main home page @S === -->
<main class="main-home-page"> 
    <div class="row">
        <div class="col-12">
            <!-- Show all sesssion success message -->
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show alert-custom-txt" role="alert">
                    <div class="media">
                            <div class="media-body">
                                <h6 class="alert-heading">Success</h6>
                                <p>{{ session()->get('success') }}</p>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                </div> 
                @endif
            <!-- Show all session warning message -->
            @if(session()->has('warning')) 
            <div class="alert alert-danger alert-dismissible fade show alert-custom-txt" role="alert">
                <div class="media"> 
                        <div class="media-body">
                            <h6 class="alert-heading">Warning!</h6>
                            <p>{{ session()->get('warning') }}</p>
                        </div>
                        <a href="{{url('/subscription')}}">Subscribe</a> 
                </div> 
                </div> 
            @endif
        </div> 
    @role("Customer")

    @endrole
        <!-- col @S -->
        @role("Admin")
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Customers</h6>
                <div class="d-flex">
                    <h2>{{ totalCustomer() }}</h2>
                    <i class="fas fa-users"></i>
                </div> 
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Paid Customers</h6>
                <div class="d-flex">
                    <h2>{{ totalPaidCustomer() }}</h2>
                    <i class="fas fa-users"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        @endrole
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Products</h6>
                <div class="d-flex">
                    <h2>{{ totalProduct() }}</h2>
                    <i class="fas fa-cart-shopping"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Courses</h6>
                <div class="d-flex">
                    <h2>{{ totalCourse() }}</h2>
                    <i class="fas fa-business-time"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Tools</h6>
                <div class="d-flex">
                    <h2>{{ totalTools() }}</h2>
                    <i class="fas fa-screwdriver-wrench"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Discounts</h6>
                <div class="d-flex">
                    <h2>00</h2>
                    <i class="fas fa-tags"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Subscriptions</h6>
                <div class="d-flex">
                    <h2>{{ totalSubscription() }}</h2>
                    <i class="fas fa-ticket"></i>
                </div> 
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Refunds Subscriptions</h6>
                <div class="d-flex">
                    <h2>{{ totalSubscriptionRefund() }}</h2>
                    <i class="fas fa-ticket"></i>
                </div> 
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="total-session-box">
                <h6>Total Earning</h6>
                <div id="Earningchart"></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="total-session-box">
                <h6>Total Customer</h6>
                <div id="TotalCustomerchart"></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-6">
            <div class="total-session-box">
                <h6>New Subscribed Student (Last Month Data)</h6>
                <div id="LastCustomerchart"></div>
            </div>
        </div>
    </div>
</main>
<!-- === main home page @E === -->

@endsection
@section('script') 
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- ChartJs Start -->
<script>
    $(document).ready(function() {
        function Earningchart() {
            var options = {
                series: [{
                    name: 'Earning',
                    data: {!! json_encode(dynamicChartData()['earnings']) !!}.map(function(item) {
                        return parseFloat(item).toFixed(2);
                    }),
                }],
                fill: {
                    type: 'solid',
                    color: ['#FF6262'],
                },
                chart: {
                    height: 350,
                    type: 'line',
                    color: ['#FF6262'],
                },
                dataLabels: {
                    style: {
                        colors: ['#FF6262']
                    }
                },
                markers: {
                    colors: ['#FF6262']
                },
                zoom: {
                    enabled: true
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '100%',
                        endingShape: 'rounded'
                    },
                },
                stroke: {
                    curve: 'smooth',
                    colors: ['#FF6262'],
                },
                xaxis: {
                    categories: {!! json_encode(dynamicChartData()['month']) !!},
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                        return "$ " + val
                        }
                    }
                },
            };

            var chart = new ApexCharts(document.querySelector("#Earningchart"), options);
            chart.render();
        }
        Earningchart();

        function TotalCustomer() {
            var options = {
                color: ['#FF6262'],
                series: [{
                    name: 'Customer',
                    data: {!! json_encode(dynamicChartData()['customer']) !!},
                }],
                fill: {
                    type: 'solid',
                    color: ['#FF6262'],
                },
                colors: ['#FF6262'],
                chart: {
                    height: 350,
                    type: 'bar',
                    color: ['#FF6262'],
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '100%',
                        endingShape: 'rounded',
                    },
                },
                stroke: {
                    curve: 'smooth',
                },
                xaxis: {
                    categories: {!! json_encode(dynamicChartData()['month']) !!},
                },
                tooltip: {},
            };

            var chart = new ApexCharts(document.querySelector("#TotalCustomerchart"), options);
            chart.render();
        }
        TotalCustomer();

        function LastCustomer() {
            var options = {
                series: [{
                    name: 'Last Month Customer',
                    data: {!! json_encode(dynamicChartData()['paidCustomer']) !!},
                }],
                fill: {
                    type: 'solid',
                    color: ['#FF6262'],
                },
                colors: ['#FF6262'],
                chart: {
                    height: 350,
                    type: 'bar',
                    color: ['#FF6262'],
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '100%',
                        endingShape: 'rounded'
                    },
                },
                stroke: {
                    curve: 'smooth',
                },
                xaxis: {
                    categories: {!! json_encode(dynamicChartData()['month']) !!},
                },
                tooltip: {},
            };

            var chart = new ApexCharts(document.querySelector("#LastCustomerchart"), options);
            chart.render();
        }
        LastCustomer();
    });
</script>
    <!-- changePassword is equal true -->
    @php
        $changePassword = session()->get('changePassword');
    @endphp
    @if ($changePassword == true)
    <script>
        $(document).ready(function(){
           // redirect to change password page after 2 second
              setTimeout(function(){
                 window.location.href = "{{ route('changePassword') }}";
              }, 2000);
        });
    </script>
    @endif
@endsection