@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1>Feni City</h1>
  <h4>All Hospitals</h4>
</div>

<div class="container">
  <div class="row">
    @foreach([1, 2, 3, 4, 5, 6, 7, 8] as $i)
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('hospital', ['slug' => 'haider-medical']) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h2>Haider Medical</h2>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <div>
                  <i class="fa fa-user-md"></i> Doctors <span class="badge badge-light">30</span>
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
