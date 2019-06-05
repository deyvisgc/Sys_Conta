<div class="modal fade" id="ModalEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <strong><h5 style="color: black ;font-family:'Arial Black' " class="modal-title" id="exampleModalLabel">REGISTRAR DATOS DE LA EMPRESA</h5></strong></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FRMEMPRESA" class="smart-form" novalidate="novalidate">
                    <!-- widget div-->

                    <div>
                        <div class="widget-body no-padding">
                            <fieldset>
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-prepend fas fa-building"></i>
                                            <input type="text"  name="Razon_social" placeholder="Razon Social">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-prepend fas fa-fax"></i>
                                            <input type="text"  name="RUC" placeholder="RUC">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-prepend fas fa-directions"></i>
                                            <input type="text"  name="direccion" placeholder="direccion">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-prepend fas fa-calendar-alt"></i>
                                            <input type="date"  name="Fecha" placeholder="Fecha">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-prepend fa fa fa-phone"></i>
                                            <input type="number"  name="Telefono" placeholder="Telefono">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-prepend fab fa-google-plus-g"></i>
                                            <input type="text"  name="Correo" placeholder="Correo">
                                        </label>
                                    </section>
                                </div>

                            </fieldset>



                            <footer>
                                <button type="button" id="RegistrarEmpresa" class="btn btn-success">Registrar</button>
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
