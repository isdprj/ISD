@extends('base')
@section('content')
<div class="space50">&nbsp;</div>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form action="{{ route('forgot-password') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="card shadow">

                        @if (Session::has("success"))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                {{ Session::get('success') }}
                            </div>
                        @elseif (Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                {{ Session::get('failed') }}
                            </div>
                        @endif

                        <div class="card-header">
                            <h5 class="card-title"> Forgot Password </h5>
                        </div>

                        <div class="card-body px-4">
                            <div class="form-group py-2">
                                <label> Email </label>
                                <input type="email" name="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" placeholder="Your Email">
                                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                            </div>

                            <div class="form-group text-end">
                                <a href="{{ route('login') }}" class="nav-link"> Back to Login</a>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Reset Password </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="space50">&nbsp;</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endsection