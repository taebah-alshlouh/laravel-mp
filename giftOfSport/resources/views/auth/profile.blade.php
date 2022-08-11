@extends('layouts.master')
@section('title','user profile')
@section('content')
<hr>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <section class="text-center text-lg-start">
  <div class="container h-100">
      
      <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-6 mb-4 mb-lg-0">
              <div class="card mb-3 mt-3" style="border-radius: .5rem;">
                  <div class=" mt-3 text-dark " style="font-size: 30px;text-align:center">{{ __('User Profile') }}</div>
                  <div class="row g-0">
                      <div class="col-md-4 col-sm-12 gradient-custom text-center text-white"
                style="border-top-left-radius: .9rem; border-bottom-left-radius: .9rem;">
                <img src="storage/{{ Auth::user()->avatar }}"
                  alt="Avatar" height="150px" class=" my-5 mx-3 " style="width: 150px;" />
                <h5>{{ Auth::user()->name }}</h5>
                <p>Web Designer</p>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8 col-sm-12">
                  <div class=" p-2">
                    <h6>Information</h6>
                    <hr class="mt-0 mb-4">
                    <form action="/edituser/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                    <div class="row pt-1">
                      <div class="col-8 mx-3 mb-3">
                        <h6>User name</h6>
                        <input type="text" name="name" id="" class="form-control form-control-lg rounded" value="{{ Auth::user()->name }}" style="border-radius:5px !important ">
                      </div>
                    </div>
                    <div class="row pt-1">
                      <div class="col-8 mx-3 mb-3">
                        <h6>Email</h6>
                        <input type="email" name="email" id="" class="form-control form-control-lg rounded" value="{{ Auth::user()->email }}" style="border-radius:5px !important ">
                      </div>
                    </div>
                    <div class="row pt-1">
                      <div class="col-8 mx-3 mb-3">
                        <h6>phone</h6>
                        <input type="number" name="phone" id="" class="form-control form-control-lg " value="{{ Auth::user()->phone }}" style="border-radius:5px !important ">
                      </div>
                    </div>
                    <div class="row pt-1">
                      <div class="col-8 mx-3 mb-3">
                        <h6>city</h6>
                        <input type="text" name="city" id="" class="form-control form-control-lg " value="{{ Auth::user()->city }}" style="border-radius:5px !important ">
                      </div>
                    </div>
                    <div class="row pt-1">
                      <div class="col-8 mx-3 mb-3">
                        <h6>Avatar</h6>
                        <input type="file" name="image" id="" class="form-control form-control-lg bg-white " value="" style="border-radius:5px !important ">
                      </div>
                    </div>
                    <div class="row pt-1">
                      <div class="col-xl-4 col-lg-4 col-sm-6  mb-3 offset-5" >
                        <button type="submit" class="btn btn-warning lg">Edit Data</button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              </div>
             
            </div>
          </div>
        </div>
  </section>
</div>
@endsection