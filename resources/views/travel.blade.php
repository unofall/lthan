@extends('template.navbar-admin')
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Poppins, sans-serif;
        }

        .table-responsive {         
            margin-top: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .text-truncate {
            max-width: 400px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .btn-group a {
            margin-right: 5px;
        }

        .page-content {
            padding-top: 150px;
            padding-bottom: 100px;
        }
    </style>
    </head>

    <body>
        <div class="container page-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Travel Blog List</h3>
                <a href="/create" class="btn btn-primary">+ Create Blog</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ asset('storage/foto/' . $item->foto) }}" class="rounded" width="100"
                                        alt="Blog Image">
                                </td>
                                <td>{{ $item->title }}</td>
                                <td class="text-truncate">{{ Str::limit($item->description, 50, '...') }}</td>
                                <td class="text-truncate">{{ Str::limit($item->location, 50, '...') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/update/{{ $item->id }}" class="btn btn-info btn-sm">Update</a>
                                        <a href="/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>

    </html>
@endsection
