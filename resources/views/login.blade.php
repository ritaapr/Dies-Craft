<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dies Craft Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('skydash/vendors/feather/feather.css') }}" />
  <link rel="stylesheet" href="{{ asset('skydash/vendors/ti-icons/css/themify-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('skydash/vendors/css/vendor.bundle.base.css') }}" />
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('skydash/css/vertical-layout-light/style.css') }}" />
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('front/img/icon_diescraft.png') }}">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
              <h4>Dies Craft Admin</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form action="{{ route('account.authenticate') }}" method="post" class="pt-3">
                @csrf
                <div class="form-group">
                  <input type="email" value="{{ old('email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Email">
                  @error('email')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password">
                  @error('password')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div>
            
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
   <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('skydash/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('skydash/js/off-canvas.js') }}" ></script>
  <script src="{{ asset('skydash/js/hoverable-collapse.js') }}" ></script>
  <script src="{{ asset('skydash/js/template.js') }}" ></script>
  <script src="{{ asset('skydash/js/settings.js') }}" ></script>
  <script src="{{ asset('skydash/js/todolist.js') }}" ></script>
  <!-- endinject -->
</body>

</html>