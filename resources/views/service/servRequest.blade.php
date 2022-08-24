@extends('layouts.browse')

@section('content')
<section id="features">
    <div class="container px-5gray">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <h2 class="centertxt">Make service Request</h2>
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach($getData as $content)
                        <input type="hidden" name="serviceID" id="serviceID" value="">
                        @endforeach
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Full Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Full Names" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone Number</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="Enter Phone No." required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Service</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="service" name="service" placeholder="service Being Requested" required="">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save">Request Service
                            </button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection