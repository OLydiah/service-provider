@extends('layouts.mainpage')

@section('content')

<section id="features">
    <div class="container px-5gray">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <h2 class="centertxt">Services Our Teams offer</h2>
                    <hr>
                    <div class="row gx-5">
                    @foreach($getData as $content)
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="{{ $content->icon }} icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">{{ $content->name }}</h3>
                                <p class="text-muted mb-0">{{ $content->description }}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-0">
                    
                <img class="rounded mx-auto d-block img" src="{{asset('assets/img/dev-android.jpg')}}"">
            </div>
        </div>
    </div>
</section>
@endsection