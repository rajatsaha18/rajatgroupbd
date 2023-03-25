@extends('admin.master')

@section('title')
    Edit Category Page
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="card-header text-center"><b>Edit Category Form</b></div>
                        <div class="card-body">
                            <form action="{{ route('update.category', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                                            placeholder="Enter Category Name"/>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description">{{ $category->description }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Category Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control"/>
                                        <img src="{{ asset($category->image) }}" alt="" height="70" width="70"/>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10 mt-3">
                                        <label class="mx-2"><input type="radio" {{ $category->status == 1 ? 'checked' : ''}} name="status" value="1"/> Published</label>
                                        <label><input type="radio" name="status" {{ $category->status == 0 ? 'checked' : ''}} value="0"/> UnPublished</label>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-success" value="Update Category"/>
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
