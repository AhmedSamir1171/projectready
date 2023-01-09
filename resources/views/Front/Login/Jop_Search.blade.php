
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

 

<div class="container">
     <div class="row justify-content-center">
         <div class="col-lg-12">
             <h1>Search Job</h1>
         </div>
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">{{ __('Register') }}</div>
 
                 <div class="card-body">
                     <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                         @csrf
                          
                         <div class="row mb-3">
                             <label for="name"
                                 class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
 
                             <div class="col-md-6">
                                 <input id="name" type="text"
                                     class="form-control @error('name') is-invalid @enderror" name="name"
                                     value="{{ old('name') }}" required autocomplete="name" autofocus>
 
                                 @error('name')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>
 
                         <div class="row mb-3">
                             <label for="email"
                                 class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
 
                             <div class="col-md-6">
                                 <input id="email" type="email"
                                     class="form-control @error('email') is-invalid @enderror" name="email"
                                     value="{{ old('email') }}" required autocomplete="email">
 
                                 @error('email')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>

                         <div class="row mb-3">
                            <label for="phone"
                                class="col-md-4 col-form-label text-md-end">{{ __('phone Address') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="education"
                                class="col-md-4 col-form-label text-md-end">{{ __('education Address') }}</label>

                            <div class="col-md-6">
                                <input id="education" type="education"
                                    class="form-control @error('education') is-invalid @enderror" name="education"
                                    value="{{ old('education') }}" required autocomplete="education">

                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="educational_specialization"
                                class="col-md-4 col-form-label text-md-end">{{ __('educational specialization Address') }}</label>

                            <div class="col-md-6">
                                <input id="educational specialization" type="educational specialization"
                                    class="form-control @error('educational specialization') is-invalid @enderror" name="educational_specialization"
                                    value="{{ old('educational specialization') }}" required autocomplete="educational specialization">

                                @error('educational specialization')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

 
                         <div class="row mb-3">
                             <label for="password"
                                 class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
 
                             <div class="col-md-6">
                                 <input id="password" type="password"
                                     class="form-control @error('password') is-invalid @enderror" name="password"
                                     required autocomplete="new-password">
 
                                 @error('password')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>
 
                         <div class="row mb-3">
                             <label for="password-confirm"
                                 class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
 
                             <div class="col-md-6">
                                 <input id="password-confirm" type="password" class="form-control"
                                     name="password_confirmation" required autocomplete="new-password">
                             </div>
                         </div>
 <input type="hidden" name="status" value="Jop_Search" id="">
 <div class="row mb-3">
    <label for="img"
        class="col-md-4 col-form-label text-md-end">{{ __('img') }}</label>

    <div class="col-md-6">
        <input id="img" type="file"
            class="form-control @error('img') is-invalid @enderror" name="img"
            required autocomplete="new-img">

        @error('img')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
                         <div class="row mb-0">
                             <div class="col-md-6 offset-md-4">
                                 <button type="submit" class="btn btn-primary">
                                     {{ __('Register') }}
                                 </button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>