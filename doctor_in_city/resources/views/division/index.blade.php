@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1>Dhaka Division</h1>
  <h4>All Cities</h4>
</div>

<div class="container">
  <div class="row">
    @foreach([1, 2, 3, 4, 5, 6, 7, 8] as $i)
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('city', ['id' => 1]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h2>Feni</h2>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  30 <i class="fa fa-user-md"></i> Doctors 
                </div>
                <div>
                  10 <i class="fa fa-hospital-o"></i> Hospitals 
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection
