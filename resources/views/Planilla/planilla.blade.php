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
                    <h2>BANDEJA DE ENTRADA DE PLANILLAS</h2>

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
    @include('Planilla.boleta')
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
                                '<a  title="Eliminar Planilla"  style="margin-left: 5px" class="btn btn-danger " onclick="eliminarPlanilla('+row.idPlanilla+')"><i class="fa fa-remove text-warning"></i></a>' +
                                '<a data-toggle="modal" data-target="#boleta" title="Imprimir Boleta de pago" style="margin-left: 5px" class="btn btn-primary " onclick="Imprimir('+row.Trabajador_idTrabajador+')"><i class="fa fa-print text-warning"></i></a>'
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
                          $('#gastos_personal').val(val.total_seguro+val.renumeracion_bruta);
                            $('#tributs_aportes1').val(val.salud+val.descuento_ONP+val.sctr);
                        //  $('#tributs_aportes1').val(val.salud+val.descuento_ONP+val.sctr);
                          $('#renumeraciones_participaciones1').val(val.renumeracion_neta);
                          $('#cuentas_diversas1').val(val.prima_seguros+val.aporte_obligatorio+val.comision_sobre);
                          var tributos_aportes= $('#tributs_aportes1').val();
                          var renumeraciones_participaciones1=$('#renumeraciones_participaciones1').val();
                          var cuentas_diversas1= $('#cuentas_diversas1').val();
                          var totalhaber=parseFloat(tributos_aportes)+parseFloat(renumeraciones_participaciones1)+parseFloat(cuentas_diversas1);
                          $('#total_haber').val(totalhaber.toFixed(2));

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
        function Imprimir(id) {

            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            var f=new Date();
            $('#meses').text(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());

            $.ajax({
                url: '{{url('BoletaPagos')}}/'+id,
                type: 'get',
                dataType: 'json',
                success:function (response) {
                    var cuerpo=$('#cuerpo').html("");
                    var cuerpoTrabajador=$('#cuerpoTrabajador').html("");
                   var traba_razonocial=$('#traba_razonocial').html("");
                    var dias_deltrabajador=$('#dias_deltrabajador').html("");
                    var renumeraciones=$('#Renumeraciones').html("");
                    var totales=$('#pie_totatales').html("");
                    $.each(response,function (index,val) {

                        var tabla=
                       '<tr>'+
                       '<td>'+val.Ruc+'</td>'+
                       '<td>'+val.Razon_Social+'</td>'+
                       '<td>'+val.Rubro_empresa+'</td>'+
                       '<td>'+val.Direccion+'</td>'+
                       '</tr>';
                        cuerpo.append(tabla);


                        var tabla1=
                            '<tr>'+
                            '<td>'+val.idPersona+'</td>'+
                            '<td>'+val.nombre_personas+'</td>'+
                            '<td>'+val.apellidos_Per+'</td>'+
                            '<td>'+val.Dni+'</td>'+
                            '<td>'+val.Fecha_Nacimiento+'</td>'+
                            '<td>'+val.tra_hijos+'</td>'+
                            '<td>'+val.Direccion_Persona+'</td>'+
                            '</tr>';
                        cuerpoTrabajador.append(tabla1);
                        var tabla2=
                            '<tr>'+
                            '<td>'+val.Ocupacion+'</td>'+
                            '<td>'+val.Periodo_trabajo+'</td>'+
                            '<td>'+val.nombre_tipo+'</td>'+
                            '<td>'+val.nombre_Seguro+'</td>'+
                            '<td>'+val.CUSPP+'</td>'+
                            '<td>'+val.fecha_Ingreso+'</td>'+
                            '<td>'+val.fecha_Salida+'</td>'+
                            '</tr>';
                        traba_razonocial.append(tabla2);
                        var tabla3= '<tr>'+
                            '<td>'+val.dias_laborales+'</td>'+
                            '<td>'+val.total_horas_trabajadas+'</td>'+
                            '<td>'+val.monto_horasEstrasx25+'</td>'+
                            '<td>'+val.monto_horasEstrasx35+'</td>'+
                            '<td>'+val.dias_faltantes+'</td>'+
                            '</tr>';

                        dias_deltrabajador.append(tabla3);
                        //suma las renumeraciones
                      var suma= parseFloat(val.Renumeracion_neta)+parseFloat(val.Asignacion_familiar)
                            +parseFloat(val.vacaciones)+parseFloat(val.cts);
                        //suma los descuentos
                        var suma2=parseFloat(val.aporte)+parseFloat(val.comisison_sobre)+
                            parseFloat(val.prima)+parseFloat(val.Total_descuentoONP)+parseFloat(val.descuento_inasistencia)+parseFloat(val.Quinta_Categoria);
                        //suma las aportaciones del empleador
                     var suma3=parseFloat(suma)+parseFloat(suma2);






                        var tabla4= '<tr>'+
                            '<td>' +
                            '<strong><label style="color: black;">Sueldo Computable: $.</label></strong> '+val.Renumeracion_neta+'' +'<br>'+
                            '<strong><label style="color: black;">Asignacion Familiar: $.</label></strong> ' +val.Asignacion_familiar+'' +'<br>'+
                            '<strong><label style="color: black;">Renumeracion Vaca: $.</label></strong> '+val.vacaciones+'' +'<br>'+
                            '<strong><label style="color: black;">Comicion por CTS: $.</label></strong>'+val.cts+'' +'<br>'+
                            '</td>'+

                            '<td>' +
                            '<strong><label style="color: black;">AFP Apore Obligatorio: $.</label></strong>        '        +val.aporte+'' +'<br>'+
                            '<strong><label  style="color: black;">AFP Comisión: $.</label></strong>                 '        +val.comisison_sobre+'' +'<br>'+
                            '<strong><label style="color: black;">AFP Seguro: $.</label></strong>                   '        +val.prima+'' +'<br>'+
                            '<strong><label style="color: black;">ONP: $.</label></strong>                          '        +val.Total_descuentoONP+'' +'<br>'+
                            '<strong><label style="color: black;">Faltas:  $.</label></strong>                      '        +val.descuento_inasistencia+'' +'<br>'+
                            '<strong><label style="color: black;">Retenciones 5ta:   $.</label></strong>             '        +val.Quinta_Categoria+'' +'<br>'+
                            '</td>'+
                            '<td>' +
                            '<strong><label style="color: black;">Essalud:$.</label></strong> '+val.Salud+''+'<br >'+

                            '<strong><label style="color: black;">S.C.T.R.:$.</label></strong> ' +val.SCTR+'<br>' +

                            '</td>'+

                        '</tr>';

                        renumeraciones.append(tabla4);

                        var tabla5= '<tr>'+
                            '<td>TOTAL RENU: $.'+suma.toFixed(2)+'</td>'+
                            '<td>TOTAL DESC: $.'+suma2.toFixed(2)+'</td>'+
                            '<td>NETO A PAGAR: $.'+suma3.toFixed(2)+'</td>'+
                            '</tr>';

                        totales.append(tabla5);



                    });



                }


            });
            document.querySelector("#btnImprimir").addEventListener("click", function() {
                var div = document.querySelector(".cotenido");
                imprimirElemento(div);
            });


        }
        function imprimirElemento(div) {
            var ventana = window.open('', 'PRINT', 'height=400,width=600');
            ventana.document.write('<html><head><title>Boleta de pago</title>');
            ventana.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">');
            ventana.document.write('</head><body >');
            ventana.document.write(div.innerHTML);
            ventana.document.write('</body></html>');
            ventana.document.close();
            ventana.focus();
            ventana.onload = function() {
                ventana.print();
                ventana.close();
            };
            return true;
        }
        function RegistrarAsientos() {
            var data = {};
            data.renumeraciones = $('#reumeraciones').val();
            data.renumeraciones1 = $('#reumeraciones1').val();
            data.seguridad_prevision = $('#seguridad_prevision').val();
            data.seguridad_prevision1 = $('#seguridad_prevision1').val();
            data.regimen_presentaciones = $('#regimen_presentaciones').val();
            data.regimen_presentaciones1 = $('#regimen_presentaciones1').val();
            data.seguro_complementario = $('#seguro_complementario').val();
            data.seguro_complementario1 = $('#seguro_complementario1').val();
            data.instituciones_publicas = $('#instituciones_publicas').val();
            data.instituciones_publicas1 = $('#instituciones_publicas1').val();
            data.essalud = $('#essalud').val();
            data.essalud1 = $('#essalud1').val();
            data.onp = $('#onp').val();
            data.onp1 = $('#onp1').val();
            data.otras_instituciones = $('#otras_instituciones').val();
            data.otras_instituciones1 = $('#otras_instituciones1').val();
            data.sctr = $('#sctr').val();
            data.sctr1 = $('#sctr1').val();
            data.renumeracion_pagar = $('#renumeracion_pagar').val();
            data.renumeracion_pagar1 = $('#renumeracion_pagar1').val();
            data.otras_cuentas = $('#otras_cuentas').val();
            data.otras_cuentas1 = $('#otras_cuentas1').val();
            data.afp = $('#afp').val();
            data.afp1 = $('#afp1').val();
            data.gastos_personal = $('#gastos_personal').val();
            data.gastos_personal1 = $('#gastos_personal1').val();
            data.tributs_aportes = $('#tributs_aportes').val();
            data.tributs_aportes1 = $('#tributs_aportes1').val();
            data.tributs_participaciones = $('#renumeraciones_participaciones').val();
            data.tributs_participaciones1 = $('#renumeraciones_participaciones1').val();
            data.cuentas_diversas = $('#cuentas_diversas').val();
            data.cuentas_diversas1 = $('#cuentas_diversas1').val();
            data.total_haber = $('#total_haber').val();
            data._token = $('#_token').val();
            $.ajax({
                url: '{{url('Asiento')}}',
                type: 'post',
                data: data,
                dataType: 'json',
                success: function (response) {
                    if (response.success===true){
                        // data.trigger('reset');
                        $('#asiento_contable').modal('hide');
                        iziToast.success({
                            title: 'OK',
                            message: 'Successfully Registrado Correctamente!',
                        });


                    }

                }
            })
        }
        function eliminarPlanilla(id) {
            iziToast.question({
                timeout: 20000,
                close: false,
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                title: 'Hey',
                message: 'Are you sure about that?',
                position: 'center',
                buttons: [
                    ['<button><b>YES</b></button>', function (instance, toast) {

                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        $.ajax({
                            url : '{{url('DeleTPlanilla')}}/'+id,
                            type : 'get',
                            datatype : 'json',
                            success:function(response){
                                if (response.success===true){
                                    tabla.ajax.reload();
                                    iziToast.success({
                                        title: 'OK',
                                        message: 'Successfully Eliminado Correctamente!',
                                    });
                                }

                            }

                        });
                    }, true],
                    ['<button>NO</button>', function (instance, toast) {

                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        iziToast.error({
                            title: 'Error',
                            message: 'confirme para eliminar',
                        });
                    }],
                ],
                onClosing: function(instance, toast, closedBy){
                    console.info('Closing | closedBy: ' + closedBy);
                },
                onClosed: function(instance, toast, closedBy){
                    console.info('Closed | closedBy: ' + closedBy);
                }
            });



        }


    </script>
    @endsection
