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
                        <div class="card-header text-center"><b>All Category Info</b></div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Invoice</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#" class="fw-semibold">#VZ2110</a></th>
                                        <td>Bobby Davis</td>
                                        <td>October 15, 2021</td>
                                        <td>$2,300</td>
                                        <td><a href="javascript:void(0);" class="link-success">View More <i
                                                    class="ri-arrow-right-line align-middle"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
