@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1>Sumon Ahmed</h1>
  <h2>Heart Specialist</h2>
</div>

<div class="container">
  <div class="row">
      <div class="col-md-6 col-lg-6 m-auto">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-body">
              <div class="text-center">
                <img src="{{ asset('image/people/1.jpg') }}" class="radius-rounded mb-3" alt="">
                <div>
                  Name: Sumon Ahmed
                </div>
                <div>
                  Email: sumon@gmail.com
                </div>
                <div>
                  contact: 43248320482
                </div>
                <div>
                  Hospital: Haider Medical
                </div>
                <div>
                  <i class="fa fa-user-md"></i> Heart Specialist - Mbbs
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection
