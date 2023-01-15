@extends('website.master')

@section('title')
    Course Enrol Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Course Enrol Page</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-header text-center">Course Enroll Form</div>
                        <div class="card-body">
                            <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                            <form action="{{route('training.new-enroll', ['id' => $id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" @if(Session::get('student_id')) value="{{$student->name}}" readonly @endif class="form-control" name="name"/>
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input id="email" type="email" @if(Session::get('student_id')) value="{{$student->email}}" readonly @endif class="form-control" name="email"/>
                                        <span id="emailError" class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input id="mobile" type="number" @if(Session::get('student_id')) value="{{$student->mobile}}" readonly @endif class="form-control" name="mobile"/>
                                        <span id="mobileError" class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Payment Type</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="payment_type" checked value="1"/> Cash On Delivery</label>
                                        <label><input type="radio" name="payment_type" value="2"/> Online</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input id="#" type="submit" class="btn btn-outline-success w-100" value="Enroll Now"/>
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
