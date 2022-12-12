@extends('layout')
@section('main')
    <section style="background-color: #eee;">
        <div class="container py-5">
           

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset(Auth::user()->image) }}"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->name }}</h5>
                            
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->phone }}</p>
                                </div>
                            </div>
                            <hr>
                    
                            <a href="{{ route('edit-profile', Auth::user()->id) }}" style="font-size: 30px;">Edit</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
