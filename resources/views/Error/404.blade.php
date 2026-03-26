@extends('layouts.frontend')
@section('title')
    404 | My Home Security
@endsection
@section('content')
    <section class="cover-background p-0 bg-img d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 my-5">
                    <div class="error-content">
                        <div class="row mb-2-5 mb-md-2-9">
                            <div class="col-sm-4 mb-4 mb-sm-0">
                                <h4>4</h4>
                            </div>
                            <div class="col-sm-4 mb-4 mb-sm-0">
                                <div class="error-box-center">
                                    <h4>0</h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h4>4</h4>
                            </div>
                        </div>
                        <h3 class="h2 mb-3">Sorry we are not finding anything!</h3>
                        <p class="w-md-80 mx-auto mb-1-6 mb-md-2-2 display-28">Please try one of the following page.</p>
                        <a href="/" class="butn">Return Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
