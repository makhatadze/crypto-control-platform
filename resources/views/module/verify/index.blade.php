@extends('layout.left-menu')
@section('subhead')
    <title>Verification</title>
@endsection
@section('wrapper')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form>
                    <div class="form-group">
                        <div class="col-md-6">
                            <h2 class="header-title">Verification Status:
                                @if($user->verify === 0)
                                    Not Verified
                                @elseif($user->verify === 1)
                                    Verified
                                @elseif($user->verify === 2)
                                    Verification Pending
                                @endif
                            </h2>
                        </div>
                    </div>

                </form>
                @if(!$user->verify)
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('verifyIndex')}}" method="POST" enctype="multipart/form-data">
                                <div class="form-group @error('name') has-error @enderror">
                                    <div class="col-md-8">

                                        <label for="name"><i class="icon-user" style="padding-right: 2px"></i> Full Name</label>
                                        <input value="{{request()->old('name')}}" class="form-control" name="name" type="text">
                                        @error('name')
                                        <div id="name-error" class="help-block animated fadeInDown">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group @error('email') has-error @enderror">
                                    <div class="col-md-8">
                                        <label for="email"><i class="icon-envelope-letter"
                                                              style="padding-right: 4px"></i>Email Address</label>
                                        <input value="{{request()->old('email')}}" class="form-control" name="email" type="email">
                                        @error('email')
                                        <div id="email-error" class="help-block animated fadeInDown">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-12 m-b-5">
                                                <label for="email">IDENTITY VERIFICATION</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio">
                                                    <input type="radio" onchange="identifyRadioChange(1)" checked
                                                           name="identify" value="1">
                                                    <label for="identify">Passport</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="radio">
                                                    <input type="radio" name="identify"
                                                           {{request()->old('identify') === '2' ? 'checked' : ''}}
                                                           onchange="identifyRadioChange(2)" value="2">
                                                    <label for="identify">Driving Licence</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio">
                                                    <input type="radio" name="identify"
                                                           {{request()->old('identify') === '3' ? 'checked' : ''}}
                                                           onchange="identifyRadioChange(3)" value="3">
                                                    <label for="identify">National ID</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="container-passport"
                                     @if($errors->has('file-driving-front') ||
                                        $errors->has('file-driving-back') ||
                                        $errors->has('file-national-front') ||
                                        $errors->has('file-national-back')
                                        )
                                     style="display:none;"
                                        @endif
                                >
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group @error('file-passport') has-error @enderror">
                                                    <label for="email">Passport Image</label>
                                                    <input class="form-control" name="file-passport" type="file">
                                                    @error('file-passport')
                                                    <div id="file-passport-error"
                                                         class="help-block animated fadeInDown">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="container-driving"
                                     @if($errors->has('file-driving-front') ||
                                    $errors->has('file-driving-back'))
                                     style="display:block;"
                                     @else
                                     style="display:none;"
                                        @endif>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group @error('file-driving-back') has-error @enderror">

                                                    <label for="email">Driving Image Back</label>
                                                    <input class="form-control" name="file-driving-back" type="file">
                                                    @error('file-driving-back')
                                                    <div id="file-driving-back-error"
                                                         class="help-block animated fadeInDown">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group @error('file-driving-front') has-error @enderror">
                                                    <label for="email">Driving Image Front</label>
                                                    <input class="form-control" name="file-driving-front" type="file">
                                                    @error('file-driving-front')
                                                    <div id="file-driving-front-passport-error"
                                                         class="help-block animated fadeInDown">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="container-national"
                                     @if($errors->has('file-national-front') ||
                                           $errors->has('file-national-back'))
                                     style="display:block;"
                                     @else
                                     style="display: none"
                                        @endif
                                >
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group @error('file-national-back') has-error @enderror">
                                                    <label for="email">National ID Back</label>
                                                    <input class="form-control" name="file-national-back" type="file">
                                                    @error('file-national-back')
                                                    <div id="file-national-back-error"
                                                         class="help-block animated fadeInDown">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group @error('file-national-front') has-error @enderror">
                                                    <label for="email">National ID Front</label>
                                                    <input class="form-control" name="file-national-front" type="file">
                                                    @error('file-national-front')
                                                    <div id="file-national-front-error"
                                                         class="help-block animated fadeInDown">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3><i class="icon-credit-card"></i> AUTHENTICITY VERIFICATION</h3>
                                    <div class="form-group @error('file-with-selfie') has-error @enderror">
                                        <label for="email">Please upload selfie photo with same document in your hand,
                                            to have your identity verified</label>
                                        <input class="form-control" name="file-with-selfie" type="file">
                                        @error('file-with-selfie')
                                        <div id="file-with-selfie-error"
                                             class="help-block animated fadeInDown">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3><i class="icon-location-pin"></i> AUTHENTICITY VERIFICATION</h3>
                                    <div class="form-group @error('address') has-error @enderror">
                                        <label for="email"></label>
                                        <select class="form-control" name="address">
                                            <option value="">Select One</option>
                                            <option value="1">Utility bill (gas, water, electric)</option>
                                            <option value="2">Telecom bill (internet or landline)</option>
                                            <option value="3">Paper bank or credit card statement</option>
                                            <option value="4">Original electronic bank or credit card statement in PDF
                                            </option>
                                        </select>
                                        @error('address')
                                        <div id="address-error"
                                             class="help-block animated fadeInDown">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4> Document must contain:</h4>
                                    <div class="form-group @error('file-document') has-error @enderror">
                                        <label for="email">
                                            - The document needs to contain your first and last name <br>
                                            - The document needs to contain your address <br>
                                            - The document needs to have an issue date within last 1 month, except
                                            address in ID or drivers license
                                        </label>
                                        <input class="form-control" name="file-document" type="file">
                                        @error('file-document')
                                        <div id="file-document-error"
                                             class="help-block animated fadeInDown">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    @csrf

                                    <div class="form-group text-center">
                                        <input type="submit" value="Verify" class="btn btn-primary">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        function identifyRadioChange(event) {
            if (event === 1) {
                document.getElementById("container-passport").style.display = "block";
                document.getElementById("container-national").style.display = "none";
                document.getElementById("container-driving").style.display = "none";
            }
            if (event === 2) {
                document.getElementById("container-passport").style.display = "none";
                document.getElementById("container-driving").style.display = "block";
                document.getElementById("container-national").style.display = "none";
            }
            if (event === 3) {
                document.getElementById("container-passport").style.display = "none";
                document.getElementById("container-driving").style.display = "none";
                document.getElementById("container-national").style.display = "block";
            }
        }
    </script>
@endsection
