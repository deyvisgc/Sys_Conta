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
                    <h2>Lista de Usuarios Activos</h2>

                </header>

                <!-- widget div-->
                <div>
                    <div class="widget-body no-padding">

                        <p class="card-description">
                        <div class="card-body">
                            <h2 style="padding-left: 10px"><i class="fa fa-user fa-lg  text-success" ></i>Usuarios <a id="Usuarios" class="btn btn-info txt-color-blue"><i class="fa fa-plus text-success"></i></a></h2>

                            <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                <tr>
                                    <th data-hide="phone">Usuario</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Nombres</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>DNI</th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>FECHA INGRESO</th>
                                    <th data-hide="phone,tablet">DIRECCION</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>ROL</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>ESTADO</th>
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
    @include('Modal.modalUsuarios')

@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
            var tabla;

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
                ajax: '{{url('Usuarios')}}',
                columns: [
                    {data: 'usuario', name: 'usuario'},
                    {data: 'full_name', name: 'full_name'},
                    {data: 'Dni', name: 'Dni'},
                    {data: 'Telefono', name: 'Telefono'},
                    {data: 'Fecha_Nacimiento',name:'Fecha_Nacimiento'},
                    {data: 'Direccion',name:'Direccion'},
                    {data: 'nombre_rol',name:'nombre_rol'},
                    {data: 'user_estado',name:'user_estado'},
                    {"mRender": function ( data, type, row ) {
                            return '<a style="margin-left: 5px" class="btn btn-success btnEdit" data-edit="/Trabajador/'+row.idUsuarios+'/edit" ><i class="fa fa-edit text-warning"></i></a>' +
                                '<a style="margin-left: 5px" class="btn btn-danger " onclick="eliminarUsuario('+row.idUsuarios+')"><i class="fa fa-remove text-warning"></i></a>' +
                                '<a style="margin-left: 5px" class="btn btn-warning" href=""><i class="fa fa-eye text-success"></i></a>';
                        }
                    },

                ]



            });

            $('#Usuarios').click(function () {
                $('#ModalUsuario').modal('show');

                $('#RegistrarUsuario').click(function () {
                    var data={};

                    data.usuario=$('#Usuario').val();
                    data.password=$('#password').val();
                    data.foto=$('#foto').val();
                    data.rol=$('#rol').val();
                    data.nombre_Per=$('#nombre_Per').val();
                    data.apellidos=$('#Apellido').val();
                    data.dni=$('#dni').val();
                    data.car_extran=$('#car_extran').val();
                    data.direccion=$('#direccion').val();
                    data.n_cuenta=$('#n_cuenta').val();
                    data.Correo=$('#Correo').val();
                    data.phone=$('#phone').val();
                    data.estado=$('#estado').val();
                    data.fecha_nacimiento=$('#fecha_nacimiento').val();
                    data._token=$('#_token').val();
                    $.ajax({
                        url:'{{url('Usuarios')}}',
                        type:'post',
                        data:data,
                        dataType:'json',
                        success:function (response) {

                            if (response.success===true){
                               // data.trigger('reset');
                                $('#ModalUsuario').modal('hide');
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


        });

function eliminarUsuario(id) {
    alert(id);

}
    </script>
    @endsection
