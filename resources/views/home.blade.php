@extends('layouts.app')

@section('content')

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-1ภ">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <h6 class="f-w-600"><strong>Name :</strong> {{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p><strong>Name :</strong> {{ Auth::user()->name }}</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p><strong>Email :</strong> {{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p><strong>Phone :</strong> {{ Auth::user()->phone }}</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p><strong>Address :</strong> {{ Auth::user()->address }}</p>
                                    </div>
                                </div>
                                <a href="{{route('dashboard')}}" class="btn btn-primary">Product Management</a>
                                <a href="{{ url('/') }}" class="btn btn-success">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection