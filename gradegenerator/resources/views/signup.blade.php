@extends('layouts.app')
@section('content')
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100  align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 w-75 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            {{-- <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                            </a> --}}
                            <h3>Sign Up</h3>
                        </div>

                        <form action="{{ route('user.store') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="form-floating mb-3 col">
                                    <input type="text"
                                        class="form-control @if ($errors->has('lastName')) is-invalid @endif"
                                        id="floatingText" placeholder="jhondoe" name="lastName"
                                        value="{{ old('lastName', '') }}">
                                    <label for="floatingText" style="margin-left:.8rem;">Last Name</label>
                                </div>

                                <div class="form-floating mb-3 col">
                                    <input type="text"
                                        class="form-control @if ($errors->has('firstName')) is-invalid @endif"
                                        id="floatingText" placeholder="jhondoe" name="firstName"
                                        value="{{ old('firstName', '') }}">
                                    <label for="floatingText" style="margin-left:.8rem;">First Name</label>
                                </div>

                                <div class="form-floating mb-3 col">
                                    <input type="text"
                                        class="form-control @if ($errors->has('middleName')) is-invalid @endif"
                                        id="floatingText" placeholder="jhondoe" name="middleName"
                                        value="{{ old('middleName', '') }}">
                                    <label for="floatingText" style="margin-left:.8rem;">Middle Name</label>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text"
                                    class="form-control @if ($errors->has('userName')) is-invalid @endif"
                                    id="floatingText" placeholder="jhondoe" name="userName"
                                    value="{{ old('userName', '') }}">
                                <label for="floatingText">Username</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password"
                                    class="form-control  @if ($errors->has('password')) is-invalid @endif"
                                    id="floatingPassword" placeholder="Password" name="password"
                                    value="{{ old('password', '') }}">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password"
                                    class="form-control  @if ($errors->has('password_confirmation')) is-invalid @endif"
                                    id="floatingPasswordConfirmation" placeholder="PasswordConfirmation"
                                    name="password_confirmation">
                                <label for="floatingPassword">Password Confirmation</label>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </form>
                        <p class="text-center mb-0">Already have an Account? <a href="{{ route('home') }}">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
@endsection
