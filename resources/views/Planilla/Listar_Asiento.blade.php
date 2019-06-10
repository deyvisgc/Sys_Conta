@extends('layaouts.prinsipal')

@section('content')

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
                    <h2>Lista de Asientos Contables</h2>

                </header>

                <!-- widget div-->
                <div>
                    <div class="widget-body no-padding">

                        <p class="card-description">
                        <div class="card-body">
                            <h2 style="padding-left: 10px"><i class="fas fa-chart-line fa-lg  text-success" ></i> Asiento Contables Mensuales</h2>

                            <table id="dt_Asiento_Contable" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                <tr>
                                    <th data-hide="phone">Haber</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>Debe</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>Segu Prevencion</th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>Renumeracion</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Regimen</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar"></i>Seg Complemen</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>I.P</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Essalud</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>ONP</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>CTSR</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-dollar txt-color-blue hidden-md hidden-sm hidden-xs"></i>OPCIONES</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>


                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->
            </div>
        </article>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready( function () {


            tabla=$('#dt_Asiento_Contable').DataTable({


                stateSave: true,
                responsive: true,
                processing: false,
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
                ajax: '{{url('Asiento')}}',
                columns: [
                    {data: 'Haber', name: 'Haber'},
                    {data: 'Debe', name: 'Debe'},
                    {data: 'asiento_seguridad_prevencion', name: 'asiento_seguridad_prevencion'},
                    {data: 'asiento_renumeracion', name: 'asiento_renumeracion'},
                    {data: 'Asiento_Regimen',name:'Asiento_Regimen'},
                    {data: 'Aiento_Seguro_complementario',name:'Aiento_Seguro_complementario'},
                    {data: 'Aiento_Instituciones_publicas',name:'Aiento_Instituciones_publicas'},
                    {data: 'Asiento_Essalud',name:'Asiento_Essalud'},
                    {data: 'Asiento_Onp',name:'Asiento_Onp'},
                    {data: 'Asiento_SCTR',name:'Asiento_SCTR'},
                    {"mRender": function ( data, type, row ) {
                            return '<a style="margin-left: 5px" class="btn btn-success btnEdit" data-edit="/Trabajador/'+row.idAsientoContable+'/edit" ><i class="fa fa-edit text-warning"></i></a>'
                        }
                    },

                ]



            });
        })
    </script>
    @endsection
