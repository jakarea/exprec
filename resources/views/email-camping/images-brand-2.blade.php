@extends('layouts.master')

@section('title') Images Brand Two - Email Campaign @endsection

@section('style')
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    <div class="editing-panel-header">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-images-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-images" type="button" role="tab" aria-controls="pills-images"
                    aria-selected="true">Images</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-brand-tab" data-bs-toggle="pill" data-bs-target="#pills-brand"
                    type="button" role="tab" aria-controls="pills-brand" aria-selected="true">Brand</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-fonts-tab" data-bs-toggle="pill" data-bs-target="#pills-fonts"
                    type="button" role="tab" aria-controls="pills-fonts" aria-selected="true">Fonts</button>
            </li>
        </ul>
    </div>
    {{-- product body @S --}}
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane show active" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab" tabindex="0">
            {{-- header @S --}}
            <div class="email-camping-head">
                <h1>Images &amp; Brand</h1>
            </div>
            {{-- header @E --}}

            {{-- image filter @S --}}
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="flow-search-filter">
                        <input type="text" placeholder="Search" class="form-control">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-7">
                    <div class="flow-dropdown-filter">
                        <select name="" id="" class="form-control">
                            <option value="">All</option>
                            <option value="">All 01</option>
                            <option value="">All 02</option>
                            <option value="">All 03</option>
                            <option value="">All 04</option>
                        </select>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="col-lg-1 col-5 col-sm-3 col-md-2 form-clear">
                    <a href="#">Clear</a>
                </div>
                <div class="col-lg-3 col-12 col-sm-5 col-md-5">
                    <div class="img-upload">
                        <input type="file" id="myFile">
                        <label for="myFile">Upload Image</label>
                        <p id="imgName"></p>
                    </div>
                </div>
            </div>
            {{-- image filter @E --}}

            {{-- images list table @S --}}
            <div class="product-list-table">
                <table>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            </div>
                        </th>
                        <th>Image <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}" alt="Icon"
                                class="img-fluid"></th>
                        <th>Size <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}" alt="Icon"
                                class="img-fluid"></th>
                        <th>Type <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}" alt="Icon"
                                class="img-fluid"></th>
                        <th>Upload By <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}" alt="Icon"
                                class="img-fluid"></th>
                        <th>Create Date <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}" alt="Icon"
                                class="img-fluid"></th>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            </div>
                        </td>
                        <td>
                            <div class="photo-frame">
                                <img src="{{asset('assets/images/e-campaign/photo-frame.png')}}" alt="Assets"
                                    class="img-fluid">
                                <span>Frame</span>
                            </div>
                        </td>
                        <td>
                            <p>21 KB</p>
                        </td>
                        <td>
                            <p>PNG</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 2023 at 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="table-swipe pt-4">
                            <a href="#"><i class="fas fa-angle-left"></i></a>
                            <span>01</span>
                            <a href="#"><i class="fas fa-angle-right"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
            {{-- images list table @E --}}
        </div>
        <div class="tab-pane " id="pills-brand" role="tabpanel" aria-labelledby="pills-brand-tab" tabindex="0">
            {{-- header @S --}}
            <div class="email-camping-head">
                <h1>Brand</h1>
            </div>
            {{-- header @E --}}
        </div>
        <div class="tab-pane " id="pills-fonts" role="tabpanel" aria-labelledby="pills-fonts-tab"
            tabindex="0">
            {{-- header @S --}}
            <div class="email-camping-head img-brand-head">
                <h1>Images &amp; Brand</h1>
                <h6>Add custom web fonts to use in signup forms and email templates.</h6>
            </div>
            {{-- header @E --}}

            {{-- font customization form @S --}}
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                    <div class="font-customization-form-wrap">
                        <h3>Add Fonts</h3>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Google Fonts</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Adobe Fonts</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Import Fonts</button>
                            </li>
                        </ul>

                        {{-- add font form @S --}}
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                {{-- google font form @S --}}
                                <form action="" class="add-font-form-wrap">
                                    <div class="form-group">
                                        <label for="">Font Name</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Google font</option>
                                            <option value="">Open Sans</option>
                                            <option value="">Roboto</option>
                                            <option value="">Popins</option>
                                            <option value="">Lato</option>
                                            <option value="">Montserat</option>
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fallback font</label>
                                        <span class="sub">The fallback font will be used whn your web font can’t be loaded by the browser.</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select web safe font</option>
                                            <option value="">Open Sans</option>
                                            <option value="">Roboto</option>
                                            <option value="">Popins</option>
                                            <option value="">Lato</option>
                                            <option value="">Montserat</option>
                                        </select>
                                        <i class="fas fa-angle-down" style="top: 67%"></i>
                                    </div>
                                    <div class="your-font-group">
                                        <label for="">Your Fonts</label>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <div class="font-box">
                                                    <h5>Kanit <span>9 varients</span> <i class="fa-solid fa-ellipsis-vertical"></i></h5>
                                                    <p>the quick brown fox jumps over the lazy dog</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-5">
                                                <div class="font-box">
                                                    <h5>Kanit <span>9 varients</span> <i class="fa-solid fa-ellipsis-vertical"></i></h5>
                                                    <p>the quick brown fox jumps over the lazy dog</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button class="btn btn-submit" type="submit">Add Fonts</button>
                                    </div>
                                </form>
                                {{-- google font form @E --}}
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                {{-- adobe font form @S --}}
                                <form action="" class="add-font-form-wrap">
                                    <div class="form-group">
                                        <label for="">Font Name</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select adobe font</option>
                                            <option value="">Open Sans</option>
                                            <option value="">Roboto</option>
                                            <option value="">Popins</option>
                                            <option value="">Lato</option>
                                            <option value="">Montserat</option>
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fallback font</label>
                                        <span class="sub">The fallback font will be used whn your web font can’t be loaded by the browser.</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select web safe font</option>
                                            <option value="">Open Sans</option>
                                            <option value="">Roboto</option>
                                            <option value="">Popins</option>
                                            <option value="">Lato</option>
                                            <option value="">Montserat</option>
                                        </select>
                                        <i class="fas fa-angle-down" style="top: 67%"></i>
                                    </div>
                                    <div class="your-font-group">
                                        <label for="">Your Fonts</label>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <div class="font-box">
                                                    <h5>Kanit <span>9 varients</span> <i class="fa-solid fa-ellipsis-vertical"></i></h5>
                                                    <p>the quick brown fox jumps over the lazy dog</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-5">
                                                <div class="font-box">
                                                    <h5>Kanit <span>9 varients</span> <i class="fa-solid fa-ellipsis-vertical"></i></h5>
                                                    <p>the quick brown fox jumps over the lazy dog</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button class="btn btn-submit" type="submit">Add Fonts</button>
                                    </div>
                                </form>
                                {{-- adobe font form @E --}}
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                {{-- import font form @S --}}
                                <form action="" class="add-font-form-wrap">
                                    <div class="form-group">
                                        <label for="">Font Name</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select import font</option>
                                            <option value="">Open Sans</option>
                                            <option value="">Roboto</option>
                                            <option value="">Popins</option>
                                            <option value="">Lato</option>
                                            <option value="">Montserat</option>
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fallback font</label>
                                        <span class="sub">The fallback font will be used whn your web font can’t be loaded by the browser.</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select web safe font</option>
                                            <option value="">Open Sans</option>
                                            <option value="">Roboto</option>
                                            <option value="">Popins</option>
                                            <option value="">Lato</option>
                                            <option value="">Montserat</option>
                                        </select>
                                        <i class="fas fa-angle-down" style="top: 67%"></i>
                                    </div>
                                    <div class="your-font-group">
                                        <label for="">Your Fonts</label>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <div class="font-box">
                                                    <h5>Kanit <span>9 varients</span> <i class="fa-solid fa-ellipsis-vertical"></i></h5>
                                                    <p>the quick brown fox jumps over the lazy dog</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-5">
                                                <div class="font-box">
                                                    <h5>Kanit <span>9 varients</span> <i class="fa-solid fa-ellipsis-vertical"></i></h5>
                                                    <p>the quick brown fox jumps over the lazy dog</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button class="btn btn-submit" type="submit">Add Fonts</button>
                                    </div>
                                </form>
                                {{-- import font form @E --}}
                            </div> 
                        </div>
                        {{-- add font form @E --}}

                    </div>
                </div>
            </div>
            {{-- font customization form @E --}}
        </div>
    </div>
    {{-- product body @E --}}

</main>
@endsection

@section('script')

@endsection