@extends('layouts.master')

@section('title') Home @endsection

@section('content') 
@role("Admin")
<main class="d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@else 
<main class="interrest-tool-page-wrap"> 

  <div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-9 col-lg-7">
    <div class="interest-search-result-wrap mt-0">
    <h6>KPI List</h6> 
    <!-- search result table @S -->
    <div class="search-result-table">
      <table>
        <thead>
          <tr>
            <th>Name</th> 
            <th>Ads</th>
            <th>Interest</th> 
            <th>KPI</th>
            <th class="text-end">Action</th> 
          </tr>
        </thead>
        <tbody>
        @foreach($projects as $project) 
          <tr>
            <td>
              <div class="form-check"> 
                <label class="form-check-label copy-table-value" for="flexCheckChecked1">
                  {{$project['name']}}
                </label>
              </div>
            </td>  
            <td>
              <div class="text-end">
              <a href="{{ url('/projects/'.$project['id'].'/ads') }}"><i class="fas fa-eye text-primary"></i></a> 
              </div>
            </td>
            <td>
              <div class="text-end">
              <a href="{{ url('/projects/'.$project['id'].'/interest') }}"><i class="fas fa-eye text-primary"></i></a> 
              </div>
            </td>
            <td>
              <div class="text-end">
                <a href="{{ url('/projects/'.$project['id'].'/kpi-calculator') }}"><i class="fas fa-eye text-primary"></i></a> 
              </div>
            </td>
            <td>
              <div class="text-end">
                <a href="{{ url('/projects/'.$project['id'] .'/delete') }}"><i class="fas fa-trash text-danger"></i></a> 
              </div>
            </td>
          </tr> 
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- search result table @E -->
  </div>
    </div>
  </div>
</main>
@endrole
@endsection