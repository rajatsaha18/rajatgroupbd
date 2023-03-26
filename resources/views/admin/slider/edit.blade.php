@extends('admin.master')

@section('title')
    Edit Slider Page
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="card-header text-center"><b>Edit Slider Form</b></div>
                        <div class="card-body">
                            <form action="{{ route('new.slider') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Slider Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ $slider->name }}" class="form-control"
                                            placeholder="Enter Slider Name" />
                                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Slider Image</label>
                                    <div class="col-sm-10 mt-1">
                                        <input type="file" name="image" class=""/>
                                        <img src="{{ asset($slider->image) }}" alt="" height="70" width="70"/>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-success" value="Update Slider"/>
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
