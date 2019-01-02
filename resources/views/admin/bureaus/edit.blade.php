<!-- Extend the layout -->
@extends('admin.layouts.app')

<!-- Assign page title -->
@section('title', 'Bureau Bewerken')

@section('header')

@endsection

<!-- Content of page -->
@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Bureaus Overzicht - &nbsp;
                            <small>Bewerken geselecteerd bureau</small>
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <form action="/bureaus/{{ $id->id }}" method="post" class="form-horizontal">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" name="username" value="{{ Auth::guard('admin')->user()->username }}">
                        <div class="form-group"><label class="col-sm-2 control-label">Bureau</label>
                            <div class="col-sm-10"><input type="text" name="name" value="{{ $id->name }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">Omschrijving</label>
                            <div class="col-sm-10"><input type="text" name="description" value="{{ $id->description }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Opslaan</button>
                                </div>
                            </div>

                        @include ('layouts.errors')

                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
@endsection

@section('scripts')
<!-- Script -->
@endsection
