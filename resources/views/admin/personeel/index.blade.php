@extends('layouts.algemeen')

@section('header')
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection


<!-- Assign page title -->
@section('title', 'Zoeken')

<!-- Content of page -->
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Zoeken - &nbsp;
                        <small>Zoek personeel gegevens</small>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>Sedula</th>
                                    <th>KC-ID</th>
                                    <th>Voornaam</th>
                                    <th>Achternaam</th>
                                    <th>Adres</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($personeel as $person)
                                        <tr>
                                            <td>{{ $person->sedula }}</td>
                                            <td><a href="persedit/{{ $person->id }}">{{ $person->login_naam }}</a></td>
                                            <td>{{ $person->voornaam }}</td>
                                            <td>{{ $person->achternaam }}</td>
                                            <td>{{ $person->adres }}</td>
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

<link src="{{ asset('js/plugins/peity/angular-peity.js') }}">

<!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'PersoneelLijst'},
                    {extend: 'pdf', title: 'PersoneelLijst', pageSize: 'A4'},

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