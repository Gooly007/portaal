<!-- Extend the layout -->
@extends('layouts.algemeen')

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
                                        
                    <form method="post" id="form" action="persstore">
                        {{ csrf_field() }}
                        
                        @include ('layouts.errors')
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Achternaam *</label>
                        <div class="col-sm-10"><input id="achternaam" name="achternaam" type="text" value="{{ old('achternaam')}}" class="form-control required"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Meisjesnaam</label>
                        <div class="col-sm-10"><input id="meisjesnaam" name="meisjesnaam" type="text"class="form-control"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Voornaam *</label>
                        <div class="col-sm-10"><input id="voornaam" name="voornaam" type="text" value="{{ old('voornaam')}}" class="form-control required"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Sedula ID *</label>
                        <div class="col-sm-10"><input id="sedula" name="sedula" type="number" value="{{ old('sedula')}}" class="form-control required digits"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Man / Vrouw *</label>
                        <div class="radio radio-inline">
                            <div><label><input type="radio" id="vrouw" value="vrouw" name="geslacht">Vrouw</label></div>
                            <div><label><input type="radio" id="man" value="man" name="geslacht">Man</label></div>
                        </div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Burgelijkestaat *</label>
                        <div class="col-sm-10"><select class="form-control m-b-n-sm" name="burgerlijkestaat">
                            <option>Ongehuwd</option>
                            <option>Gehuwd</option>
                        </select></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Aantal Kinderen</label>
                        <div class="col-sm-10"><input id="aantal_kinderen" name="aantal_kinderen" type="number" value="0" class="form-control required digits"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Geboorte Datum *</label>
                        <div class="col-sm-10"><input id="geboortedatum" name="geboortedatum" placeholder="mm-dd-yyyy" type="text" disabled="" class="form-control required"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Geboorte Plaats *</label>
                        <div class="col-sm-10"><input id="geboorteplaats" name="geboorteplaats" type="text" class="form-control required" value="Curacao"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Nationaliteit *</label>
                        <div class="col-sm-10"><input id="nationaliteit" name="nationaliteit" type="text" class="form-control required" value="Nederlands"></div>
                    </div>
                                            
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Adres *</label>
                        <div class="col-sm-10"><input id="adres" name="adres" type="text" class="form-control required"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Telefoon Thuis</label>
                        <div class="col-sm-10"><input id="telefoon-t" name="telefoon_thuis" type="text" value="" class="form-control"></div>
                    </div>
                                                                
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Telefoon Mobiel</label>
                        <div class="col-sm-10"><input id="telefoon-mobiel" name="telefoon_mobiel" type="text" value="" class="form-control"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Email Intern</label>
                        <div class="col-sm-10"><input id="email_intern" name="email_intern" placeholder="voornaam.achternaam@polis.cw" type="email" class="form-control email"></div>
                    </div>
                                            
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Email Prive</label>
                        <div class="col-sm-10"><input id="email_prive" name="email_prive" type="email" class="form-control email"></div>
                    </div>
                                            
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Rijbewijs</label>
                        <div class="col-sm-10"><input id="rijbewijs" name="rijbewijs" type="text" class="form-control"></div>
                    </div>
                    
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Login Naam</label>
                        <div class="col-sm-10"><input id="login_naam" name="login_naam" type="text" class="form-control required" value="{{ $persg->login_naam }}">
                        <span class="form-text m-b-n-none">Login naam is laatst geregistreerd in database en moet aangepast worden.</span></div>
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
                        $('#voornaam, #achternaam').keyup(function(){ $('#email_intern').val($('#voornaam').val()+'.'+$('#achternaam').val().replace(/ /g, "")+'@polis.cw'); });
                        $('#sedula').keyup(function(){ $('#geboortedatum').val($('#sedula').val().replace(/(\d\d\d\d)(\d\d)(\d\d)(\d\d)/,'$2-$3-$1')); });
                        });
                    </script>


@endsection