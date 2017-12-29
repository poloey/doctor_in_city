@extends('master')
@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-md-6 m-auto">
      <form action="{{ asset('search') }}">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder="search city, hospital, doctor.......">
            <button type="submit" style="cursor: pointer;" class="input-group-addon"> <i class="fa fa-search"></i> </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="bg-info text-light p-3 text-center">
    <h2>Search Results for <span>{{$query}}</span></h2>
  </div>

  <div class="bg_random_color text-light p-3 mt-3 container">
    Search result for city
  </div>

  <div class="d-flex flex-wrap">
    @forelse($cities as $city )
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('city.show', ['slug' => $city->slug]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h2>{{$city->name}}</h2>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <i class="fa fa-hospital-o"></i> Hospitals <span class="badge badge-light">{{$city->hospitals->count()}}</span>
                </div>
                <div>
                  <i class="fa fa-user-md"></i> Doctors <span class="badge badge-light">{{$city->no_of_doctors()}}</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @empty
    <h2>No city found</h2>
    @endforelse
  </div> 


  <div class="container bg_random_color text-light p-3 mt-3">
    Search result for Hospital
  </div>
  <div class="d-flex flex-wrap">
    @forelse($hospitals as $hospital )
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('hospital.show', ['slug' => $hospital->slug]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h4 class="text-center">{{$hospital->name}}</h4>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <div>
                  <i class="fa fa-user-md"></i> Doctors <span class="badge badge-light">{{$hospital->doctors->count()}}</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @empty
    <h2>No Hospital found</h2>
    @endforelse
  </div> 

  <div class="container bg_random_color text-light p-3 mt-3">
    Search result for Doctor
  </div>
  <div class="d-flex flex-wrap">
    @forelse($doctors as $doctor )
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('doctor.show', ['slug' => $doctor->slug]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h2>{{$doctor->name}}</h2>
            </div>
            <div class="card-body">
              <div class="text-center">
                <div class="mb-3">
                  <img class="rounded-circle" src="{{ asset('image/people/' . intval($doctor->id % 99) .'.jpg') }}" alt="">
                </div>
                <div></div>
                <div class="d-inline-block">
                  <i class="fa fa-user-md"></i> {{$doctor->discipline->name}} - {{$doctor->degree->name}}
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @empty
    <h2>No Doctor found</h2>
    @endforelse
  </div> 


</div>
@endsection

