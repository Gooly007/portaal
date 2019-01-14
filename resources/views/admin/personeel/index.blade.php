@extends('admin.layouts.app')

@section('header')

@endsection


<!-- Assign page title -->
@section('title', 'Zoeken')

<!-- Content of page -->
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
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
                                    <th>Rol</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($employee as $person)
                                        <tr>
                                            <td><a href="/employee/{{ $person->id }}">{{ $person->sedula }}</a></td>
                                            <td>{{ $person->username }}</td>
                                            <td>{{ $person->firstname }}</td>
                                            <td>{{ $person->lastname }}</td>
                                            <td>{{ $person->address }}</td>
                                            <td>{{ $person->role }}</td>
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
                    },
                ]

            });

        });

    </script>

@endsection
