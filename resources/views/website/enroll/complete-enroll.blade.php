@extends('website.master')

@section('title')
    Complete Enrol Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Complete Enrol Page</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-header">Course Enroll Status</div>
                        <div class="card-body">
                            <h5>Congratulation your registration is complete. Please wait, we will contact with you soon.</h5>
                            <p>Registration Current Status:</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <th>Enroll Status</th>
                                    <th>Payment Staus</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$enroll->course->title}}</td>
                                    <td>{{$enroll->enroll_status}}</td>
                                    <td>{{$enroll->payment_status}}</td>
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
