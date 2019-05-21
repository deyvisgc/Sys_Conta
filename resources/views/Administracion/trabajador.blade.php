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
                            <h2 style="padding-left: 10px"><i class="fa fa-user fa-lg  text-success" ></i>Trabajadores Activos <a href="javascript:void(0);" class="btn btn-info txt-color-blue"><i class="fa fa-plus text-success"></i></a></h2>

                            <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                <tr>
                                    <th data-hide="phone">N°</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Nombre</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>DNI</th>
                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>CARNE EXTRANJERIA</th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i>DIRECCION</th>
                                    <th data-hide="phone,tablet">City</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>FECHA NACIMIENTO</th>
                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>NUMERO DE CUENTA</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jennifer</td>
                                    <td>1-342-463-8341</td>
                                    <td>Et Rutrum Non Associates</td>
                                    <td>35728</td>
                                    <td>Fogo</td>
                                    <td>03/04/14</td>
                                    <td>35728</td>


                                    <td ><a  class="btn btn-success" href=""><i class="fa fa-remove text-danger"></i></a>
                                        <a class="btn btn-info" href=""><i class="fa fa-edit text-warning"></i></a>
                                    <a class="btn btn-warning" href=""><i class="fa fa-eye text-success"></i></a></td>

                                </tr>

                                </tr>
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
            $('#dt_basic').DataTable();
        } );
    </script>

@endsection
