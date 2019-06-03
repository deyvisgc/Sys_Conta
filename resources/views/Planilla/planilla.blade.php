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
                    <a   style="margin-left: 10px;margin-top: 5px" id="ListarTotales" class="btn btn-outline-warning  txt-color-blue"> <i class="fa fa-eye text-success" data-toggle="modal" data-target="#totales"> TOTALES DE PLANILLA</i></a>
                    <a   style="margin-left: 10px;margin-top: 5px" id="Asiento_contable" class="btn btn-outline-danger  txt-color-blue"> <i class="fas fa-chart-line text-warning" data-toggle="modal" data-target="#asiento_contable"> ASIENTOS CONTABLES</i></a><br><br>

                    <div class="widget-body no-padding">

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
                    <h5 class="modal-title" id="exampleModalLabel">DETALLE DE PLANILLA</h5>
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
                                        <th><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>TOTAL DESCUENDO AFP</th>
                                        <th><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>TOTAL DESCUENDO ONP</th>
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
    <div class="modal fade" id="totales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLE DE LOS TOTALES DE LA PLANILLA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color: #0aa699">
                        <li class="nav-item">
                            <a class="nav-link active"  id="home-tab" data-toggle="tab" href="#totales1" role="tab" aria-controls="home" aria-selected="true">TOTALES INGRESOS </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#totales2" role="tab" aria-controls="profile" aria-selected="false">TOTALES RETENCIONES </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">OTROS TOTALES</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="totales1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive">
                                <table id="tb_total" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>Horasx25 25%</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>Horasx35 35%</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>cts</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>Vacaciones</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>bonificacion</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>bonificacion_Extra</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>Renumeracion_Bruta</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>Base_Calculo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="totales2" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-responsive">
                                <table id="tb_totales1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>APORTE OBLIGATORIO</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>COMISON SOBRE R.A</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>PRIMA DE SEGURO</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>TOTAL DESCUENTO AFP</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>TOTAL DESCUENTO ONP 13%</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="table-responsive">
                                <table id="tb_total2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>RENTA 5 CATEGORIA</th>
                                        <th ><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>RENUMERACION NETA</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>ESSALUD 9%</th>
                                        <th ><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>SCTR 1.25%</th>
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
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
   @include('Planilla.asiento_contable');
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
                                '<a title="Imprimir Boleta de pago" style="margin-left: 5px" class="btn btn-primary " onclick="Imprimir('+row.idPlanilla+')"><i class="fa fa-print text-warning"></i></a>'
                        },
                    }



                ],

            });
            $('#Asiento_contable').click(function () {
                var hola;
              $.ajax({
                  url:'{{url('Asiento_Contable')}}',
                  type:'get',
                  dataType:'json',
                  success:function (response) {
                      $.each(response,function (index,val) {
                          $('#reumeraciones1').val(val.renumeracion_bruta);
                          $('#regimen_presentaciones').val(val.salud);
                          $('#seguro_complementario').val(val.sctr);
                          $('#seguridad_prevision1').val(val.total_seguro);
                          $('#essalud1').val(val.salud);
                          $('#onp1').val(val.descuento_ONP);
                          $('#otras_instituciones1').val(val.sctr);
                          $('#renumeracion_pagar1').val(val.renumeracion_neta);
                          $('#afp1').val(val.prima_seguros+val.aporte_obligatorio+val.comision_sobre);
                          $('#gastos_personal').val(val.renumeracion_bruta+val.total_seguro);
                          $('#tributs_aportes1').val(val.salud+val.descuento_ONP+val.sctr);
                          $('#renumeraciones_participaciones1').val(val.renumeracion_neta);
                          $('#cuentas_diversas1').val(val.prima_seguros+val.aporte_obligatorio+val.comision_sobre);

                      });



                  }
              });
            });



$('#ListarTotales').click(function () {
  $('#tb_total').DataTable({
      stateSave: true,
      responsive: true,
      processing: false,
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

      ajax: '{{url('Totales_ingresos')}}',
      columns: [
          {data: 'horasx25',name:'horasx25'},
          {data: 'horasx35',name:'horasx35'},
          {data: 'CTS',name:'CTS'},
          {data: 'vacaciones',name:'vacaciones'},
          {data: 'bonificacion',name:'bonificacion'},
          {data: 'bonificacionExtra',name:'bonificacionExtra'},
          {data: 'renumeracion_bruta',name:'renumeracion_bruta'},
          {data: 'base_calculo',name:'base_calculo'},



      ],
      destroy:true,

  });

    $('#tb_totales1').DataTable({
        stateSave: true,
        responsive: true,
        processing: false,
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

        ajax: '{{url('Totales_aportes')}}',
        columns: [
            {data: 'aporte_obligatorio',name:'aporte_obligatorio'},
            {data: 'comision_sobre',name:'comision_sobre'},
            {data: 'prima_seguros',name:'prima_seguros'},
            {data: 'descuento_AFP',name:'descuento_AFP'},
            {data: 'descuento_ONP',name:'descuento_ONP'},



        ],
        destroy:true,

    });
    $('#tb_total2').DataTable({
        stateSave: true,
        responsive: true,
        processing: false,
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

        ajax: '{{url('Totales_0tros')}}',
        columns: [
            {data: 'quinta_categoria',name:'quinta_categoria'},
            {data: 'renumeracion_neta',name:'renumeracion_neta'},
            {data: 'salud',name:'salud'},
            {data: 'sctr',name:'sctr'},




        ],
        destroy:true,

    });











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
                    {data: 'total_DescuentoAFP',name:'total_DescuentoAFP'},
                    {data: 'Total_descuentoONP',name:'Total_descuentoONP'},




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
