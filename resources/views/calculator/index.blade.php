@extends('layouts.admin')
@section('title','Lesson Creare ')
@section('style')
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" type="text/css" />
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
                    <form action="" method="POST" class="create-form-box" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-4 justify-content-between">
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
                                                <input type="text" class="form-control">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="custom-hr">
                                            <h5>Keven Kpis</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost per purchase:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="custom-hr">
                                            <h5>Keven Kpis Target</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost per purchase:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
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
                                                <input type="text" class="form-control">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost per initiate:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost per initiate:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
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
                                                <input type="text" class="form-control">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost per Add to cart:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost per Add to cart:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
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
                                                <input type="text" class="form-control">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost per view con:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Cost per view con:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- advance form @S --}}
                        <div class="row mt-4 justify-content-between">
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
                                                <input type="text" class="form-control">
                                                <span class="input-group-text">.00</span>
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
                                                    <label for="" class="mb-0">Business PUR Conversion:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control" disabled>
                                                        <span class="input-group-text">.00</span>
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
                                                <input type="text" class="form-control">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-12">
                                                    <label for="" class="mb-0">*Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. Animi, dignissimos!</label>
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
                                            <label for="" class="mb-0">Purchased:</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-text">%</span>
                                                <input type="text" class="form-control">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="row justify-content-end">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <label for="" class="mb-0">Currency Conversion(*if ad acc is not
                                                        USD):</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text">$1 USD &nbsp; = </span>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">BDT</option>
                                                            <option value="">INR</option>
                                                            <option value="">PK</option>
                                                            <option value="">EU</option>
                                                        </select>
                                                        <span class="input-group-text">2.00</span>
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
                        {{-- advance form @E --}}

                        <div class="row">
                            <div class="col-12">
                                <div class="submit-bttns">
                                    <button type="button" class="btn btn-reset" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Save Result</button>
                                    <button type="submit" class="btn btn-submit">Calculate</button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Save to project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="saveto-modal-txt">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="" class="mb-2">Save to an existing project</label>
                            <select name="previous_project" id="" class="form-control">
                                <option value="">Select Below</option>
                                <option value="12">Project One</option>
                                <option value="12">Project Two</option>
                                <option value="12">Project Three</option>
                            </select>
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="mb-2">Save to a new project</label>
                            <input type="text" placeholder="Name your project" name="name" class="form-control">
                        </div>
                        <div class="form-groups text-end"> 
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

@endsection