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
                    <h2>BAMDEJA DE ENTRADA DE SEGUROS</h2>

                </header>

                <!-- widget div-->
                <div>
                    <div class="widget-body no-padding">

                        <p class="card-description">
                        <div class="card-body">
                            <h2 style="padding-left: 10px"><i class="fas fa-ambulance fa-lg  text-danger" ></i> Seguros a Afiliar <a id="MSeguros" class="btn btn-outline-warning txt-color-blue"><i class="fas fa-ambulance text-success"></i></a></h2>

                            <table id="tab_seguros" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                <tr>
                                    <th data-class="expand"><i class="fas fa-ambulance  text-muted hidden-md hidden-sm hidden-xs"></i> NOMBRE SEGURO</th>
                                    <th data-class="expand"><i class="fas fa-ambulance text-muted hidden-md hidden-sm hidden-xs"></i> APORTE OBLIGATORIO</th>
                                    <th data-class="expand"><i class="fas fa-ambulance text-muted hidden-md hidden-sm hidden-xs"></i> PRIMA SEGURO</th>
                                    <th data-hide="phone"><i class="fas fa-ambulance text-muted hidden-md hidden-sm hidden-xs"></i> COMISION RENUMERACION</th>
                                    <th data-hide="phone,tablet"><i class="fas fa-ambulance txt-color-blue hidden-md hidden-sm hidden-xs"></i> OPCIONES</th>
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
        var id;
        $(document).ready( function () {
            $('#MSeguros').click(function () {
                $('#ModalSeguros').modal('show');
                $('#RegistrarSeguro').click(function (e) {
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var frm=  $('#Seguros');
                    $.ajax({
                        url:'{{url('Seguros')}}',
                        type: 'post',
                        data:frm.serialize(),
                        dataType:'json',
                        success:function (data) {
                            if (data.success===true){
                                // data.trigger('reset');
                                $('#ModalSeguros').modal('hide');
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

            tabla=$('#tab_seguros').DataTable({


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
                ajax: '{{url('Seguros')}}',
                columns: [
                    {data: 'nombre_Seguro', name: 'nombre_Seguro'},
                    {data: 'aporte_obligatorio', name: 'aporte_obligatorio'},
                    {data: 'Prima_Seguro', name: 'Prima_Seguro'},
                    {data: 'comision_renumeracion', name: 'comision_renumeracion'},
                    {"mRender": function ( data, type, row ) {
                            return '<a style="margin-left: 5px"  class="btn btn-outline-success btnEdit" data-edit="/Seguros/'+row.idseguros+'/edit" ><i class="fa fa-edit text-warning"></i></a>' +
                                '<a style="margin-left: 5px" class="btn btn-outline-danger" onclick="eliminarSeguro('+row.idseguros+')"><i class="fa fa-remove text-warning"></i></a>';
                        }
                    },

                ]



            });

            $('#tab_seguros').on('click','.btnEdit[data-edit]',function(e){
                e.preventDefault();
                var url = $(this).data('edit');
                $.ajax({
                    url : url,
                    type : 'GET',
                    datatype : 'json',
                    success:function(response){
                        $(".modal-title").html('Actualizar Seguros');
                        $('.regis').html('Actualizar');
                        $('#ModalSeguros').modal('show');
                        $('#nombre_seguro').val(response.nombre_Seguro);
                        $('#aporte_obligatorio').val(response.aporte_obligatorio);
                        $('#prima_seguros').val(response.Prima_Seguro);
                        $('#comision').val(response.comision_renumeracion);
                       $('#idseguros').val(response.idseguros);
                       id=$('#idseguros').val();


                    }

                });

            });
            $('.regis').click(function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var frm=$('#Seguros');
                $.ajax({
                    url:'{{url('Seguros')}}/'+id,
                    type:'put',
                    dataType:'json',
                    data:frm.serialize(),
                    success:function (response) {
                        if (response.success===true){
                            frm.trigger('reset');
                            $('#ModalSeguros').modal('hide');
                            iziToast.success({
                                title: 'OK',
                                message: 'Successfully Actualizado Correctamente!',
                            });

                            tabla.ajax.reload();

                        }


                    }

                });
            });


        });

        function eliminarSeguro(id) {
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
                            url : '{{url('SegurosDelete')}}/'+id,
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
