@extends('template.navbar')
@section('content')
<style>
    
    .banner{
        padding-top: 120px;
    }

    .text-description{
        font-size: 1rem;
        line-height: 1.6;
        text-align: justify;
        margin: 1rem 0;
        color: black;
    }
    .page{
        padding-bottom: 100px;
    }
</style>


    <body>
        <div class="container page">
            <div class="banner d-flex justify-content-center">
                <img src="{{ asset('storage/foto/'. $blog->foto)}}" class="rounded" width="700" alt="">
            </div>
            <div class="text-title d-flex justify-content-center mt-5">
                <h3>{{ $blog->title }}</h3>
            </div>
            <div class="text-description text-center mt-4">
                <p>{{ $blog->description }}</p>
            </div>
        </div>
    </body>
@endsection
