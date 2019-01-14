<!-- Extend the layout -->
@extends('admin.layouts.app')

<!-- Assign page title -->
@section('title', 'Registratie')

@section('header')
<link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/steps/jquery.steps.css') }}" rel="stylesheet">
@endsection

<!-- Content of page -->
@section('content')
<!-- Content -->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>
                        Nieuw Registratie
                    </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                                <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                                </ul>
                                <a class="close-link">
                                <i class="fa fa-times"></i>
                                </a>
                        </div>
                </div>
                <div class="ibox-content">

                    <form method="POST" id="form" action="{{ '/employee' }}">
                        @csrf

                        @include ('layouts.errors')

                        <input id="status" name="status" type="hidden" value="active">
                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Last Name') }} *</label>
                        <div class="col-sm-10"><input id="lastname" name="lastname" type="text" value="{{ old('lastname')}}" class="form-control required"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Maiden Name') }}</label>
                        <div class="col-sm-10"><input id="maidenname" name="maidenname" type="text"class="form-control"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('First Name') }} *</label>
                        <div class="col-sm-10"><input id="firstname" name="firstname" type="text" value="{{ old('firstname')}}" class="form-control required"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">Sedula ID *</label>
                        <div class="col-sm-10"><input id="sedula" name="sedula" type="number" value="{{ old('sedula')}}" class="form-control required digits"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">Man / Vrouw *</label>
                        <div class="radio radio-inline">
                            <div><label><input type="radio" id="vrouw" value="vrouw" name="gender">Vrouw</label></div>
                            <div><label><input type="radio" id="man" value="man" name="gender">Man</label></div>
                        </div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Marital Status') }} *</label>
                        <div class="col-sm-10"><select class="form-control m-b-n-sm" name="maritalstatus">
                            <option>Ongehuwd</option>
                            <option>Gehuwd</option>
                        </select></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Total Kids') }}</label>
                        <div class="col-sm-10"><input id="total_kids" name="total_kids" type="number" value="0" class="form-control required digits"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Date of Birth') }} *</label>
                        <div class="col-sm-10"><input id="birthday" name="birthday" placeholder="mm-dd-yyyy" type="text" class="form-control required"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Birthplace') }} *</label>
                        <div class="col-sm-10"><input id="birthplace" name="birthplace" type="text" class="form-control required" value="Curacao"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Nationality') }} *</label>
                        <div class="col-sm-10"><input id="nationality" name="nationality" type="text" class="form-control required" value="Nederlands"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Address') }} *</label>
                        <div class="col-sm-10"><input id="address" name="address" type="text" class="form-control required"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Home Phone') }}</label>
                        <div class="col-sm-10"><input id="tel_home" name="tel_home" type="text" value="" class="form-control"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Mobile') }}</label>
                        <div class="col-sm-10"><input id="tel_mobile" name="tel_mobile" type="text" value="" class="form-control"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">E-mail {{ __('Internal') }}</label>
                        <div class="col-sm-10"><input id="email_internal" name="email_internal" placeholder="voornaam.achternaam@polis.cw" type="email" class="form-control email"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">E-mail {{ ('Private') }}</label>
                        <div class="col-sm-10"><input id="email_private" name="email_private" type="email" class="form-control email"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Drivers License') }}</label>
                        <div class="col-sm-10"><input id="driverslicense" name="driverslicense" type="text" class="form-control"></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Username') }}</label>
                        @if ($employee <> '')
                            <div class="col-sm-10"><input id="username" name="username" type="text" class="form-control required" value="{{ $employee->username }}">
                        @else
                            <div class="col-sm-10"><input id="username" name="username" type="text" class="form-control required" value="kc0001">
                        @endif
                        <span class="form-text m-b-n-none">Login naam is laatst geregistreerd in database en moet aangepast worden.</span></div>
                    </div>

                    <div class="form-group row"><label class="col-sm-2 col-form-label">{{ __('Permission') }} *</label>
                        <div class="col-sm-10"><select class="form-control m-b-n-sm" name="role">
                            <option>Gebruiker</option>
                            <option>TeamLeader</option>
                            <option>Afdeling Hoofd</option>
                        </select></div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">{{ __('Password') }}</label>
                        <div class="col-sm-10"><input id="password" name="password" type="password" class="form-control" value="secret"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white btn-sm" type="reset">Anuleren</button>
                            <button class="btn btn-primary btn-sm" type="submit">Opslaan</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    <!-- Steps -->
    <script src="{{ asset('js/plugins/steps/jquery.steps.min.js') }}"></script>

    <!-- Jquery Validate -->
    <script src="{{ asset('js/plugins/validate/jquery.validate.min.js') }}"></script>

    <!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>


                    <script>
                        $(document).ready(function(){
                        $('#firstname, #lastname').keyup(function(){ $('#email_internal').val($('#firstname').val()+'.'+$('#lastname').val().replace(/ /g, "")+'@polis.cw'); });
                        $('#sedula').keyup(function(){ $('#birthday').val($('#sedula').val().replace(/(\d\d\d\d)(\d\d)(\d\d)(\d\d)/,'$1-$2-$3')); });
                        });
                    </script>


@endsection
