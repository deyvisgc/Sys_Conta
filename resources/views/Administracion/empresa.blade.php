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
                    <h2>Empresas</h2>

                </header>

                <!-- widget div-->
                <div>
                    <div class="widget-body no-padding">

                        <p class="card-description">
                        <div class="card-body">
                            <h2 style="padding-left: 10px"><i class="fas fa-building fa-lg  text-info" ></i> EMPRESAS <a id="Mempresa" class="btn btn-outline-warning txt-color-blue"><i class="fa fa-plus text-success"></i></a></h2>

                            <table id="tab_empresa" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                <tr>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>RAZON SOCIAL</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>RUC</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>DIRECCION</th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i>FECHA CREACION</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>TELEFONO</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>CORREO EMPRESA</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>OPCIONES</th>
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
    @include('Modal.ModalEmpresa')
    @endsection
@section('scripts')
    <script>
        var tabla;
        $(document).ready( function () {
             $('#Mempresa').click(function () {
                 $('#ModalEmpresa').modal('show');
                 $('#RegistrarEmpresa').click(function (e) {
                     e.preventDefault();
                     $.ajaxSetup({
                         headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                     });
                   var frm=  $('#FRMEMPRESA');
                   $.ajax({
                       url:'{{url('Empresa')}}',
                       type: 'post',
                       data:frm.serialize(),
                       dataType:'json',
                       success:function (data) {
                           if (data.success===true){
                               // data.trigger('reset');
                               $('#ModalEmpresa').modal('hide');
                               iziToast.success({
                                   title: 'OK',
                                   message: 'Successfully Registrado Correctamente!',
                               });

                               tabla.ajax.reload();

                           }
                       }

                   })
                 });
             });

            tabla=$('#tab_empresa').DataTable({


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
                ajax: '{{url('Empresa')}}',
                columns: [
                    {data: 'Razon_Social', name: 'Razon_Social'},
                    {data: 'Ruc', name: 'Ruc'},
                    {data: 'Direccion', name: 'Direccion'},
                    {data: 'fecha_creacion', name: 'fecha_creacion'},
                    {data: 'telefono_empresa',name:'telefono_empresa'},
                    {data: 'correo_empresa',name:'correo_empresa'},
                    {"mRender": function ( data, type, row ) {
                            return '<a style="margin-left: 5px" class="btn btn-success btnEdit" data-edit="/Trabajador/'+row.idEmpresa+'/edit" ><i class="fa fa-edit text-warning"></i></a>' +
                                '<a style="margin-left: 5px" class="btn btn-danger " onclick="eliminarEmpresa('+row.idEmpresa+')"><i class="fa fa-remove text-warning"></i></a>';
                        }
                    },

                ]



            });

        });

        function eliminarEmpresa(id) {
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
                            url : '{{url('DeleEmpresa')}}/'+id,
                            type : 'get',
                            datatype : 'json',
                            success:function(response){
                                if (response.success===true){
                                    tabla.ajax.reload();
                                    iziToast.success({
                                        title: 'OK',
                                        message: 'Successfully Eliminado Correctamente!',
                                    });

                                    tabla.ajax.reload();
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
