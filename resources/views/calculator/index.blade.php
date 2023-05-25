@extends('layouts.admin')
@section('title','kpi Calculator ')
@section('style')
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" type="text/css" /> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" type="text/css" /> 
@endsection
@section('content')
@role("Customer")

<!-- === calculator create page @S === -->
<main class="product-research-form">
    <div class="product-research-create-wrap">
        <div class="row">
            <div class="col-lg-12">
                <div class="create-form-wrap"> 
                    {{-- calculator form --}}
                    <form action="" class="create-form-box reduce-margin" id="main_form">
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="custom-hr">
                                    <h5>Fill The Input </h5>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <label for="" class="mb-0">Avrage Order Value:</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" id="B2">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="custom-hr">
                                            <h5>Breakeven KPIs <sup style="font-size: .8rem">(no profit, no loss)</sup></h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost Per Purchase <sup>(CPP)</sup></label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" id="G2" disabled> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="custom-hr">
                                            <h5>Profit Target KPIs</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost Per Purchase <sup>(CPP)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled id="K2">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-hr">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <label for="" class="mb-0">Avrage Fees:</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-text">%</span>
                                                <input type="text" class="form-control" id="B3">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost Per Initiate Checkout <sup>(CPIC)</sup> :</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" id="G3" disabled> 
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost Per Initiate Checkout <sup>(CPIC)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled id="K3">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-hr">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <label for="" class="mb-0">Avrage COGS(incl. Shiping):</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" id="B4">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost Per Add to Cart <sup>(CPATC)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled id="G4">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost Per Add to Cart <sup>(CPATC)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled id="K4">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-hr">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <label for="" class="mb-0">Profit Target:</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-text">%</span>
                                                <input type="text" class="form-control" id="B5">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost Per View Content <sup>(CPVC)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled id="G5">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost Per View Content <sup>(CPVC)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled id="K5">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="custom-hr">
                                    <hr>
                                </div>
                            </div>
                        </div> 

                        <div class="row mt-2 justify-content-end">
                             
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Return on Ad Spend <sup>(ROAS)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled id="G6">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Return on Ad Spend <sup>(ROAS)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled id="K6">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 
                        {{-- advance option @S --}}
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12">
                                <div class="custom-hr">
                                    <h5>Advance Calculator </h5>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <label for="" class="mb-0">Add to cart:</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-text">%</span>
                                                <input type="text" class="form-control" id="B8">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="row justify-content-end">
                                    <div class="col-12 col-sm-12 col-md-9 col-lg-8">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Baseline PUR Conversion Rate <sup>(Est.*)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" id="G8" disabled>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-hr">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <label for="" class="mb-0">Reached Checkout:</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-text">%</span>
                                                <input type="text" class="form-control" id="B9">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-12 text-end">
                                                    <label for="" class="mb-0">* calculated using a 1:1 ratio of earnings to sessions</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-hr">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <label for="" class="mb-0">Purchased:</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-text">%</span>
                                                <input type="text" class="form-control" id="B10">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="row justify-content-end">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Currency Conversion <sup>(if ad acc is not USD)</sup>:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$1 USD &nbsp; = </span>
                                                        <select name="" id="B13" class="form-control"> 
                                                            <option value="2">USD</option> 
                                                        </select>
                                                        <span class="input-group-text" id="currency_output">1.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-hr">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        {{-- advance option @E --}}

                        <div class="row">
                            <div class="col-12">
                                <div class="submit-bttns">
                                    <button type="button" class="btn btn-reset" data-bs-toggle="modal"
                                        data-bs-target="#projectModal">Save Result</button>
                                    <button type="submit" class="btn btn-submit" id="formSubmitBttn">Calculate</button>
                                </div>
                            </div>
                        </div> 
                    </form>
                    {{-- calculator form @E --}}
                </div>
            </div>
        </div>
    </div>
</main>
<!-- === calculator create page @E === -->

{{-- project modal @S --}}

<!-- Button trigger modal -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="projectModalLabel">Save to project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="saveto-modal-txt">
                    <form id="projectForm" name="projectForm">
                        <div class="form-group">
                            <label for="" class="mb-2">Save to an existing project</label>
                            <select name="previous_project" id="project_id" class="form-control">
                                <option value="">Select Below</option>
                                @foreach($projects as $project) 
                                <option value="{{$project['id']}}">{{$project['name']}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger" id="project_id_message"></div>
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="mb-2">Save to a new project</label>
                            <input type="text" placeholder="Name your project" name="name" id="project_name" class="form-control">
                            <div class="text-danger" id="project_name_message"></div>
                        </div>
                
                        <div class="form-groups text-end">
                            <button type="button" class="btn btn-closes" id="close-adspy-modal">Close</button>
                            <button type="submit" class="btn btn-submitss">Save</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
{{-- project modal @E --}}
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole

@endsection

@section('script')  
<link src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" /> 
<script src="{{asset('assets/js/calculator.js')}}" type="module"></script>
<script type="text/javascript">
    // write javascriot code to submit a ajax form when save button is clicked
    $(document).ready(function(){
        var ids = ['B2','B3','B4','B5','B8','B9','B10','G2','G3','G4','G5','G6','K2','K3','K4','K5','K6','K8','G8'];
        var jsonData = @json(json_decode($data));
        if(jsonData){
            for(var i=0; i<ids.length; i++){
                $('#'+ids[i]).val(jsonData[ids[i]]);
            }
        }

        var project_id_message = document.getElementById('project_id_message');
        var project_name_message = document.getElementById('project_name_message');
        $('#projectForm').on('submit', function(e){
            e.preventDefault();
            project_id_message.innerHTML = '';
            project_name_message.innerHTML = '';
            var previous_project = $('#project_id').val();
            var project_name = $('#project_name').val();
            var _token = $('input[name="_token"]').val();
           
            // create json object to store all the values by the following ids
            var data = {};
            for(var i=0; i<ids.length; i++){
                if($('#'+ids[i]).val()){
                    data[ids[i]] = $('#'+ids[i]).val();
                }
            }

            $.ajax({
                url: "{{ route('saveKpiCalculate') }}",
                type: "POST",
                data: {
                    previous_project: previous_project,
                    name: project_name,
                    _token: _token,
                    data: data
                },
                success:function(response){
                    if(response) {
                        $('#project_id').val('');
                        $('#project_name').val('');
                        $('#close-adspy-modal').click();
                    
                        console.log(response);
                        
                        if(response.success ){
                            $('#projectModal').modal('hide'); 
                            toastr["success"](response.message, "Success!")
                        }else{
                            toastr["error"](response.message, "Error!")
                        }
                    }
                },
                error:function(response){
                    console.log(response.responseJSON.errors);

                    if(response.responseJSON.errors.previous_project){
                        document.getElementById('project_id_message').innerHTML = response.responseJSON.errors.previous_project[0];
                    }
                    if(response.responseJSON.errors.name){
                        document.getElementById('project_name_message').innerHTML = response.responseJSON.errors.name[0];
                    }
                }
            });
        });
    });
</script>
@endsection