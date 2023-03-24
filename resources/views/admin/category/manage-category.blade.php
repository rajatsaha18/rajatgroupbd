@extends('admin.master')

@section('title')
    Category Page
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    <div class="card">
                        <div class="card-header text-center"><b>All Category Info</b></div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <img src="{{ asset($category->image) }}" alt="" height="60" width="60"/>
                                        </td>
                                        <td>{{ $category->status }}</td>
                                        <td>
                                            <a href="{{ route('edit.category',['id' => $category->id])}}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('delete.category',['id' =>$category->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure delete this..')">Delete</a>
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
