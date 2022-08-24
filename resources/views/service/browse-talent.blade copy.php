@extends('layouts.browse')

@section('content')

<section id="features">
    <div class="container px-5gray">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <h2 class="centertxt">Browse Talent</h2>
                   
                    <div class="row gx-5">
                         @foreach($getData as $content)
                        <div class="col-md-3 mb-5">
                            <div class="imgwrap">
                                <img class="rounded mx-auto d-block img270" src="{{url('/assets/img/')}}/{{$content->photo }}">
                                <div class="caption-img">
                                    {{ $content->name }}<br>
                                    <a class="btn btn-success"  href="{{ route('service.create',$content->id) }}"> Request Service!</a>
                                </div>
                                <div class="text-center">
                                    <p class="mb-0">{{ $content->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection