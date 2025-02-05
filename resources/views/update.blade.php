@extends('template.navbar-admin')
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <style>
        .body {
            font-family: Poppins, sans-serif;
        }

        .page {
            padding-top: 150px;
        }

        .form-label{
            font-weight: 400;
            color: black;
        }
    </style>

    <body>
        <div class="container page">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Edit Blog</h4>
                </div>
                <div class="card-body">
                    <form action="/update/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex">
                            <div class="col-lg-6 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $blog->title }}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="foto" class="form-label">Image</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $blog->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <textarea name="location" id="location" cols="30" rows="3" class="form-control">{{ $blog->location }}</textarea>
                        </div>

                        <div class="btn  d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary ">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
