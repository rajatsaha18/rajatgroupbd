@extends('admin.master')

@section('title')
    Category Page
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center"><b>Add Category Form</b></div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control"
                                            value="Enter Category Name" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Category Image</label>
                                    <div class="col-sm-10 mt-1">
                                        <input type="file" name="image" class="" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10 mt-3">
                                        <label class="mx-2"><input type="radio" name="status" value="1"/> Published</label>
                                        <label><input type="radio" name="status" value="0"/> UnPublished</label>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-success" value="Add Category"/>
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
