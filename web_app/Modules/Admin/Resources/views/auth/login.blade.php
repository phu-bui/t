<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login Boxed - ArchitectUI HTML Bootstrap 4 Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto modal-sm">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('admin.post-login') }}">
                                    <div class="modal-body">
                                        <div class="h5 modal-title text-center">
                                            <div>
                                                <img width="200" class="rounded" src="{{asset('images/logo.png')}}" alt="">
                                            </div>
                                            <h4 class="mt-2">
                                                <!-- <div>Welcome back,</div>
                                                <span>Please sign in to your account below.</span> -->
                                            </h4>
                                        </div>
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input type="email" name="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center clearfix">
                                        <button type="submit" class="btn btn-primary btn-lg">Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="text-center text-white opacity-8 mt-3">Copyright © ArchitectUI 2019</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
</body>

</html>