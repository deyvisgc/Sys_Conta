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
                    <h2>Lista de Trabajadores</h2>

                </header>

                <!-- widget div-->
                <div>
                    <div class="widget-body no-padding">

                        <p class="card-description">
                        <div class="card-body">
                            <h2 style="padding-left: 10px"><i class="fa fa-user fa-lg  text-success" ></i>Trabajadores Contratados <a id="RegisTrabajador" class="btn btn-info txt-color-blue"><i class="fa fa-plus text-success"></i></a></h2>

                            <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                <tr>
                                    <th data-hide="phone">N°</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Nombre</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>DNI</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>CARNE</th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i>DIRECCION</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>FECHA</th>

                                    <th data-hide="phone,tablet">Seguros</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Tipo seguro</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Operacopmes</th>

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


    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="ModalTrabajador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <center> <strong><h5 style="color: black ;font-family:'Arial Black' " class="modal-title" id="exampleModalLabel">Registrar Trabajador</h5></strong></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="regisTraba" class="smart-form" novalidate="novalidate">
                    <!-- widget div-->
                    <div>
                        <div class="widget-body no-padding">
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                <input type="text" name="nombre_Per" placeholder="Nombre">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                <input type="text" name="Apellido" placeholder="Apellido">
                                            </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                <input type="text" name="dni" placeholder="DNI">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                <input type="text" name="car_extran" placeholder="CARNE EXTRANJERIA">
                                            </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-share-square"></i>
                                                <input type="text" name="direccion" placeholder="Direccion">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend far fa-credit-card	"></i>
                                                <input type="number" name="n_cuenta" placeholder="Numero de Cuenta">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                <input type="Correo" name="Correo" placeholder="E-mail">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                <input type="tel" name="phone" placeholder="Celular" data-mask="(999) 999-9999">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                <input type="text" name="estado" value="Contratado" readonly>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="date" name="fecha_naci" id="fecha_naci" placeholder="Expected finish date" class="hasDatepicker valid" aria-invalid="false">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">

                                            <label class="select">
                                                <select name="seguros" aria-required="true" aria-invalid="false" class="valid">
                                                    <option value="0" selected="" disabled="">Seguro</option>
                                                    @foreach($seguros as $segu)
                                                        <option value="{{$segu->idseguros}}">{{$segu->nombre_Seguro}}</option>
                                                        @endforeach
                                                </select></label>
                                        </section>
                                        <section class="col col-6">

                                            <label class="select">
                                                <select name="tipo_seguros" aria-required="true" aria-invalid="false" class="valid">
                                                    <option value="0" selected="" disabled="">tipo seguro</option>

                                                @foreach($tipo_Seguro as $tipo)
                                                        <option value="{{$tipo->idTipo_seguro}}">{{$tipo->nombre_tipo}}</option>

                                                    @endforeach
                                                </select></label>
                                        </section>
                                    </div>
                                </fieldset>



                                <footer>
                                    <button type="button" id="RegistrarTraba" class="btn btn-success">Registrar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </footer>


                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->
                    </form>
                </div>

            </div>

            </div>
        </div>
    </div>

@endsection
@section('scripts')

    <script>
        var tabla;
        $(document).ready( function () {
       tabla=$('#dt_basic').DataTable({


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
                ajax: '{{url('Trabajador')}}',
                columns: [
                    {data: 'idTrabajador', name: 'idTrabajador'},
                    {data: 'nombres', name: 'nombres'},
                    {data: 'Dni', name: 'Dni'},
                    {data: 'Care_extranjeria', name: 'Care_extranjeria'},
                    {data: 'Telefono', name: 'Telefono'},
                    {data: 'Direccion',name:'Direccion'},
                    {data: 'Fecha_Nacimiento',name:'Fecha_Nacimiento'},
                    {data: 'nombre_Seguro',name:'nombre_Seguro'},
                    {data: 'nombre_tipo',name:'nombre_tipo'},
                    {"mRender": function ( data, type, row ) {
                            return '<a class="btn btn-danger" href=""><i class="fa fa-remove text-warning"></i></a>' +
                                '<a class="btn btn-info" href=""><i class="fa fa-edit text-warning"></i></a>' +
                                '<a class="btn btn-warning" href=""><i class="fa fa-eye text-success"></i></a>';
                    }
                    },

                ]



        });





              $('#RegisTrabajador').click(function (e) {
                  $('#ModalTrabajador').modal('show');

                  $('#RegistrarTraba').click(function (e) {
                      e.preventDefault();
                      $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                      });

                      var frm=$('#regisTraba');


                      $.ajax({
                          url:'{{url('Trabajador')}}',
                          type:'post',
                          dataType:'json',
                          data:frm.serialize(),
                          success:function (response) {
                              if (response.success===true){
                                  frm.trigger('reset');
                                  $('#ModalTrabajador').modal('hide');
                                  iziToast.success({
                                      title: 'OK',
                                      message: 'Successfully inserted record!',
                                  });

                                  tabla.ajax.reload();

                              }


                          }

                      });
                  });


              });
        } );


    </script>

@endsection
