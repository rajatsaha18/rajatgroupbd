@extends('admin.master')

@section('title')
    Content Page
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="card-header text-center"><b>Add Content Form</b></div>
                        <div class="card-body">
                            <form action="{{ route('new.content') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id" required>
                                            <option value="" disabled selected>--Select Category--</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                        <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                                    </div>
                                </div>
                                {{-- <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">SubCategory</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="subcategory_id" required>
                                            <option value="" disabled selected>--Select SubCategory--</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                        <span class="text-danger">{{ $errors->has('subcategory_id') ? $errors->first('subcategory_id') : ''}}</span>
                                    </div>
                                </div> --}}
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Content Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" placeholder="Enter SubCategory Name" />
                                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10 mt-1">
                                        <input type="file" name="image" class="" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10 mt-3">
                                        <label class="mx-2"><input type="radio" name="status" value="1" checked />
                                            Published</label>
                                        <label><input type="radio" name="status" value="0" /> UnPublished</label>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-success" value="Create New Content" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
