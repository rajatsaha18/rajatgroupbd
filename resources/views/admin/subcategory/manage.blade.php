@extends('admin.master')

@section('title')
    Manage SubCategory Page
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    <div class="card">
                        <div class="card-header text-center"><b>All SubCategory Info</b></div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. No</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">SubCategory</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subCategories as $subCategory)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $subCategory->category->name }}</td>
                                        <td>{{ $subCategory->name }}</td>
                                        <td>
                                            <img src="{{ asset($subCategory->image) }}" alt="" height="60" width="60"/>
                                        </td>
                                        <td>{{ $subCategory->status }}</td>
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
