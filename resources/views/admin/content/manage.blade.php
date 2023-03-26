@extends('admin.master')

@section('title')
    Manage Content Page
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    <div class="card">
                        <div class="card-header text-center"><b>All Content Info</b></div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. No</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contents as $content)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $content->category->name }}</td>
                                        <td>{{ $content->name }}</td>
                                        <td>
                                            <img src="{{ asset($content->image) }}" alt="" height="60" width="60"/>
                                        </td>
                                        <td>{{ $content->status }}</td>
                                        <td>
                                            <a href="" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger" onclick="return confirm('Are you sure delete this..')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
