<!-- Extend the layout -->
@extends('layouts.app')

<!-- Assign page title -->
@section('title', 'Bureaus')

@section('header')
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

<!-- Content of page -->
@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Bureaus Overzicht - &nbsp;
                            <small>Lijst en administratie</small>
                        </h5>
                    </div>

                    <div class="ibox-content">
                        <form action="{{action('BureausController@store')}}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        <input type="hidden" name="username" value="{{ Auth::user()->username }}">
                        <div class="form-group"><label class="col-sm-2 control-label">Bureau</label>
                            <div class="col-sm-10"><input type="text" name="name" required></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">Omschrijving</label>
                            <div class="col-sm-10"><input type="text" name="description" required></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                                </div>
                            </div>

                        @include ('layouts.errors')

                        </form>
                    </div>

            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordere table-hoverd dataTables-example">
                    <thead>
                        <tr>
                            <th>Bureau</th>
                            <th>Omschrijving</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bureaus as $blijst)
                        <tr>
                            <td>{{ $blijst->name }}</td>
                            <td>{{ $blijst->description }}</td>
                            <td><a href="bureaus/{{ $blijst->id }}" class="btn btn-warning btn-xs">Bewerken</a></td>
                            <td><a href="bureaus/{{ $blijst->id }}/delete" class="btn btn-danger btn-xs">Verwijderen</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div>
            </div>
          </div>
          </div>

        </div>
    </div>

@endsection

@section('scripts')

<!-- <link src="{{ asset('js/plugins/peity/angular-peity.js') }}"> -->

<!-- Mainly scripts -->
    <!-- <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script> -->
    <!-- <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script> -->

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                paging: false,
                searching: false,
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'BureausLijst'},
                    {extend: 'pdf', title: 'BureausLijst', pageSize: 'A4'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

@endsection
