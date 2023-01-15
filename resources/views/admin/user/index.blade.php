@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">User Add Form</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <form action="{{route('admin.create-user')}}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3" >User Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3" >User Email</label>
                            <div class="col-md-9">
                                <input class="form-control" type="email" name="email" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3" >User Password</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="password" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3" ></label>
                            <div class="col-md-9">
                                <input type="submit"  class="btn btn-outline-success" value="Add New User " />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection



