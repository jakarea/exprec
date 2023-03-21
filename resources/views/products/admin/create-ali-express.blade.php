@extends('layouts.admin')
@section('title','Home')
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content') 
<!-- === product research page @S === -->
<main class="product-research-form">
    <!-- research create page start  -->
    <div class="product-research-create-wrap">
        <div class="row">
            <div class="col-lg-12">
                <div class="create-form-wrap">
                    <div class="create-form-head">
                        <h6>Create a new Product</h6>
                        <a href="{{url('admin/products')}}">
                        <i class="fa-solid fa-list"></i> All Products </a>
                    </div>
                    <!-- create client form start -->
                    <form action="" method="POST" class="create-form-box">
                        @csrf 
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-error">
                                            <label for="aliexpress_id">Product ID <sup class="text-danger">*</sup>
                                            </label>
                                            <input type="text" placeholder="AliExpress Product ID" name="aliexpress_id" oninput="validateInput('aliexpress_id', 'aliexpress_id_error_message', 'aliexpress_submit_button')" class="form-control @error('aliexpress_id') is-invalid @enderror" value="{{ old('aliexpress_id')}}" id="aliexpress_id">
                                            <div  class="form-text"><strong>Ex: <span style="color: #FF6262" title="Product ID">1005005204716052 </span></strong>https://www.aliexpress.com/item/<span style="color: #FF6262" title="Product ID">1005005204716052</span>.html</div>
                                            <span class="invalid-feedback" id="aliexpress_id_error_message">@error('aliexpress_id'){{ $message }} @enderror</span> 
                                        </div>
                                    </div>
                    
                                </div>
                                <!-- row end -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="submit-bttns">
                                    <button type="reset" class="btn btn-reset">Clear</button>
                                    <button type="submit" class="btn btn-submit" id="aliexpress_submit_button">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Create User form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- research create page end  -->
</main>
<!-- === product research page @E === -->
@endsection

@section('script')
<script type="text/javascript">
    function validateInput(inputId, errorId, buttonId) {
        const input = document.getElementById(inputId);
        const error = document.getElementById(errorId);
        const button = document.getElementById(buttonId);
        const inputValue = input.value.trim();

        if (!/^\d+$/.test(inputValue)) { // checks if the input contains only digits
            error.innerText = 'Please enter a valid number.';
            button.disabled = true;
        } else {
            error.innerText = '';
            button.disabled = false;
        }
    }
</script>
@endsection
