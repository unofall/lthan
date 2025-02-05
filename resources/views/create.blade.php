@extends('template.navbar-admin')
@section('content')

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <style>
        .body {
            font-family: Poppins, sans-serif;
        }

        .page {
            padding-top: 150px;
            margin-bottom: 100px;
        }
        .form-label{
            font-weight: 500
        }
    </style>

    <body>
        <div class="container page">
            <div class="card">
                <div class="card-header text-center">
                    <h5>Add Blog</h5>
                </div>
                <div class="card-body">
                    <form action="/add" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex">
                            <div class="mb-3 col-md-6">
                                <label for="foto" class="form-label">Image</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                                
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                        
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <textarea name="location" id="location" cols="30" rows="3" class="form-control @error('location') is-invalid @enderror">{{ old('location') }}</textarea>
                        
                            @error('location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
