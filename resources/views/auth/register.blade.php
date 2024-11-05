<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.logincss')
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Register</h3>
                            <form method="POST" action="{{ route('register') }}">

                                @csrf
                                <div class="form-group">
                                    <label for="name" :value="__('Name')">Username</label>
                                    <input id="name" name="name" :value="old('name')" required autofocus type="text"
                                        class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label for="email" :value="__('Email')">Email</label>
                                    <input id="email" name="email" :value="old('email')" required type="email"
                                        class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label for="password" :value="__('Password')">Password</label>
                                    <input id="password" name="password" required autocomplete="new-password"
                                        type="password" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" :value="__('Confirm Password')">Confirm
                                        Password</label>
                                    <input id="password_confirmation" name="password_confirmation" required
                                        type="password" class="form-control p_input">
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-primary btn-block enter-btn">{{ __('Register') }}</button>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-facebook col mr-2">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                                </div>
                                <p class="sign-up text-center">Already have an Account?<a href="{{ route('login') }}"> Sign Up</a></p>
                                <p class="terms">By creating an account you are accepting our<a href="#"> Terms
                                        & Conditions</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.loginscript')
</body>

</html>
