@extends('layouts.algemeen')

<!-- Assign page title -->
@section('title', 'Mutaties')

@section('header')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
 <!-- Datepicker jQuery UI -->
    <link href="{{ asset('css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
    
@endsection

@section('content')
<div class='wrapper wrapper-content'>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Verzoek ter verkrijging vakantie uren</h5>
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <form method="get" class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-2 control-label">Voorletters en Naam</label>
                                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        
                                        <div class="form-group"><label class="col-sm-2 control-label">Functie</label>
                                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        
                                        <div class="form-group"><label class="col-sm-2 control-label">Vakantie Stand</label>
                                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        
                                        <div class="form-group" id="data_5">
                                            <label class="font-normal">Range select</label>
                                            <div class="input-daterange input-group" id="datepicker" data-provider="datepicker">
                                                <input type="text" class="form-control-sm form-control" name="start" value="05/14/2014"/>
                                                <span class="input-group-addon">to</span>
                                                <input type="text" class="form-control-sm form-control" name="end" value="05/22/2014" />
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        
                                        <div class="form-group"><label class="col-sm-2 control-label">Akkoord</label>
                                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<!-- Data picker -->
   <!-- Input Mask-->
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

   <!-- Data picker -->
   <script src="{{ asset('js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="{{ asset('js/plugins/fullcalendar/moment.min.js') }}"></script>

    <!-- Date range picker -->
    <script src="{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}"></script>

   
<!-- DatePicker Script -->
    <script>
        $(document).ready(function(){

            $('.tagsinput').tagsinput({
                tagClass: 'label label-primary'
            });

            var mem = $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            var yearsAgo = new Date();
            yearsAgo.setFullYear(yearsAgo.getFullYear() - 20);

            $('#selector').datepicker('setDate', yearsAgo );

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $('.dual_select').bootstrapDualListbox({
                selectorMinimalHeight: 160
            });
        });
    </script>

@endsection