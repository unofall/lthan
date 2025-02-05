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

        .form-label {
            font-weight: 500
        }
    </style>

    <body>
        <div class="container page">
            <div class="card">
                <div class="card-header text-center">
                    <h5>Create Topic</h5>
                </div>
                <div class="card-body">
                    <form action="/update_topic/{{ $topic->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex">
                            <div class="mb-3 col-md-6">
                                <label for="foto" class="form-label">Image</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="title" class="form-label">Title Topic</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$topic->title}}">
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="mb-3 col-md-6">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" name="date" id="" value="{{$topic->date}}" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                
                                <label for="desc" class="form-label">Description</label>
                                <textarea name="desc" id="desc" cols="30" rows="5"
                                    class="form-control">{{$topic->desc}}</textarea>
                            </div>
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
