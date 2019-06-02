@extends('layaouts.prinsipal')

@section('content')
    <style>
        body {margin:2em;}
        tfoot tr, thead tr {
            background: lightblue;
        }
        tfoot td {
            font-weight:bold;
        }
        .modal-header {
            background:#00C853;
        }

    </style>
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"

                -->
                <header>

                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Listado De Planillas</h2>

                </header>


                <!-- widget div-->
                <div>
                    <div class="widget-body no-padding">
                        <a href="{{url('PlanillaRegistro')}}"  style="margin-left: 950px;margin-top: 5px" id="RegisTrabajador" class="btn btn-dark txt-color-blue"> <i class="fa fa-eye text-success"> DETALLE</i></a>

                        <div class="table-responsive">
                            <table id="tb_renumeraciones" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th data-hide="phone">N°</th>
                                    <th ><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>DNI</th>
                                    <th ><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>NOMBRES</th>
                                    <th ><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>CARGO</th>
                                    <th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i>SUELDO</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>DESCUENTO INASIS</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Sueldo x mes</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Asig.Familiar</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>OPCIONES</th>

                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot align="right">
                                <tr><th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>

                            </table>
                        </div>
                        </div>

                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->
        </article>
            </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content modal-co" >
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Liquidacion de beneficios sociales Truncados</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Retenciones al cargo del trabajador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">OTROS</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="home">
                            <div class="table-responsive">
                                <table id="tb_renumeraciones1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>Horas extras 25%</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>Horas 35%</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>CTS</th>
                                        <th><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>GRATIFICACIONES</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>VAVACIONES</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>BONIFICACIONES EXTRA</th>
                                        <th><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>RENUMERACION BRUTA</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>BASE CALCULO</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu1">
                            <div class="table-responsive">
                                <table id="tb_renumeraciones2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>ONP/AFP</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>APF</th>
                                        <th><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>APORTE OBLIGATORIO</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>COMISION SOBRE R.A</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>PRIMA SEGURO</th>
                                        <th><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>TOTAL DESCUENDO ONP/AFP</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu2">
                            <div class="table-responsive">
                                <table id="tb_otros" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>RENTA 5 CATEGORIA</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>RENUMERACION NETA</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>ESSALUD</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


@endsection






@section('scripts')
    <script>
        var tabla;
        $(document).ready( function () {

            tabla=$('#tb_renumeraciones').DataTable({
                stateSave: true,
                responsive: true,
                processing: false,
                "autoWidth": true,
                serverSide : true,


                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Ningún dato disponible en esta tabla",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                },
                "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;

                    // converting to interger to find total
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };

                    // computing column Total the complete result
                    var monTotal = api
                        .column( 4 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    var tueTotal = api
                        .column( 5 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    var wedTotal = api
                        .column( 6 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    var thuTotal = api
                        .column( 7 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );




                    // Update footer by showing the total with the reference of the column index
                    $( api.column( 0 ).footer() ).html('Total');
                    $( api.column( 4 ).footer() ).html(monTotal);
                    $( api.column( 5 ).footer() ).html(tueTotal);
                    $( api.column( 6 ).footer() ).html(wedTotal);
                    $( api.column( 7 ).footer() ).html(thuTotal);

                },

                ajax: '{{url('Planilla')}}',
                columns: [
                    {data: 'idPlanilla',name:'idPlanilla'},
                    {data: 'Dni',name:'Dni'},
                    {data: 'fulname',name:'fulname'},
                    {data: 'Ocupacion',name:'Ocupacion'},
                    {data: 'Sueldo_Basico',name:'Sueldo_Basico'},
                    {data: 'descuento_inasistencia',name:'descuento_inasistencia'},
                    {data: 'sueldo_basicoxmes',name:'sueldo_basicoxmes'},
                    {data: 'Asignacion_familiar',name:'Asignacion_familiar'},

                    {"mRender": function ( data, type, row ) {
                            return '<a onclick="detalle('+row.idPlanilla+')"  title="Detalle Planilla" class="btn btn-success "  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye text-warning"></i></a>' +
                                '<a title="Eliminar Planilla" style="margin-left: 5px" class="btn btn-danger " onclick="eliminar('+row.idPlanilla+')"><i class="fa fa-remove text-warning"></i></a>' +
                                '<a title="ver totales" style="margin-left: 5px" class="btn btn-primary " onclick="eliminar('+row.idPlanilla+')"><i class="fa fa-eye text-warning"></i></a>'
                        },
                    }



                ],

            });




        });
        function detalle(id) {
            $('#tb_renumeraciones1').DataTable({
                stateSave: true,
                responsive: true,
                processing: false,
                "autoWidth": true,
                serverSide : true,
                "ordering": false,


                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Ningún dato disponible en esta tabla",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                },

                ajax: '{{url('Listar_Beneficios')}}/'+id,
                columns: [
                    {data: 'monto_horasEstrasx25',name:'monto_horasEstrasx25'},
                    {data: 'monto_horasEstrasx35',name:'monto_horasEstrasx35'},
                    {data: 'cts',name:'cts'},
                    {data: 'vacaciones',name:'vacaciones'},
                    {data: 'bonificacion',name:'bonificacion'},
                    {data: 'bonificacion_extraord',name:'bonificacion_extraord'},
                    {data: 'total_renumeracion_bruta',name:'total_renumeracion_bruta'},
                    {data: 'base_calculo',name:'base_calculo'},



                ],
                destroy:true,

            });
            $('#tb_renumeraciones2').DataTable({
                stateSave: true,
                responsive: true,
                processing: false,
                "autoWidth": true,
                serverSide : true,
                "ordering": false,


                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Ningún dato disponible en esta tabla",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                },

                ajax: '{{url('Listar_Retenciones')}}/'+id,
                columns: [
                    {data: 'nombre_tipo',name:'nombre_tipo'},
                    {data: 'nombre_Seguro',name:'nombre_Seguro'},
                    {data: 'aporte_obligatorio_monto',name:'aporte_obligatorio_monto'},
                    {data: 'comisison_sobre_renumeracion_total',name:'comisison_sobre_renumeracion_total'},
                    {data: 'Prima_Seguros_monto',name:'Prima_Seguros_monto'},
                    {data: 'total_DescuentoAFP_ONP',name:'total_DescuentoAFP_ONP'},




                ],
                destroy:true,
            });
            $('#tb_otros').DataTable({
                stateSave: true,
                responsive: true,
                processing: false,
                "autoWidth": true,
                serverSide : true,
                "ordering": false,


                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Ningún dato disponible en esta tabla",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                },

                ajax: '{{url('Listar_Otros')}}/'+id,
                columns: [
                    {data: 'Quinta_Categoria',name:'Quinta_Categoria'},
                    {data: 'Renumeracion_neta',name:'Renumeracion_neta'},
                    {data: 'Salud',name:'Salud'},


                ],
                destroy:true,
            });

        }
    </script>
    @endsection
