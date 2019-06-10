<div class="modal fade" id="asiento_contable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ASIENTOS CONTABLES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">MONTOS TOTALES </a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">DEBE Y HABER</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="widget-body no-padding">

                            <form id="checkout-form" class="smart-form" novalidate="novalidate">
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-8">
                                            <strong><label style="color: black;">
                                                    <label style="color: black;font-family: 'Arial Black'" >62 </label> GASTOS DE PERSONAL, DIRECTORES Y GERENTES</label></strong>

                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    621  REMUNERACIONES </label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="reumeraciones" value="0.00" id="renumeraciones">
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="reumeraciones1" value="0.00" id="reumeraciones1">
                                            </label>
                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    627 SEGURIDAD Y PREVISIÓN SOCIAL Y OTRAS CONTRIBUCIONES</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="seguridad_prevision" id="seguridad_prevision" value="0.00" >
                                            </label>
                                        </section>

                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="seguridad_prevision1" id="seguridad_prevision1"  value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    6271 RÉGIMEN DE PRESTACIONES DE SALUD</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="regimen_presentaciones" id="regimen_presentaciones">
                                            </label>
                                        </section>

                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly id="regimen_presentaciones1" name="regimen_presentaciones1" value="0.00">
                                            </label>
                                        </section>

                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    6273 SEGURO COMPLEMENTARIO DE TRABAJO DE RIESGO, ACCIDENTES DE TRABAJO Y ENFERMEDADES PROFESIONALES</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly id="seguro_complementario" name="seguro_complementario" value="0.00">
                                            </label>
                                        </section>

                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="seguro_complementario1" id="seguro_complementario1" value="0.00">
                                            </label>
                                        </section>

                                    </div>
                                    <div class="row">
                                        <section class="col col-8">
                                            <strong><label style="color: black;font-family: 'Arial Black'"><label style="color: black;font-family: 'Arial Black'" >40</label> TRIBUTOS Y APORTES AL SISTEMA DE PENSIONES Y DE SALUD POR PAGAR</label></strong>

                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    403 INSTITUCIONES PÚBLICAS</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="instituciones_publicas" id="instituciones_publicas" value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number"  name="instituciones_publicas1" id="instituciones_publicas1" readonly value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    4031 ESSALUD</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="essalud"  id="essalud" value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="essalud1" id="essalud1" value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    4032 ONP</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="onp" id="onp" value="0.00">
                                            </label>
                                        </section>

                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="onp1" id="onp1" value="0.00">
                                            </label>
                                        </section>

                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    4039 OTRAS INSTITUCIONES</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="otras_instituciones" id="otras_instituciones" >
                                            </label>
                                        </section>

                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="otras_instituciones1" id="otras_instituciones1" value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    40391 SCTR</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="sctr" id="sctr" value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="sctr1" id="sctr1" value="0.00">
                                            </label>
                                        </section>


                                    </div>
                                    <div class="row">
                                        <section class="col col-8">
                                            <strong><label style="color: black;font-family: 'Arial Black'"><label style="color: black;font-family: 'Arial Black'" >41</label> REMUNERACIONES Y PARTICIPACIONES POR PAGAR</label></strong>

                                        </section>

                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    411 REMUNERACIONES POR PAGAR</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                <input type="number" readonly name="renumeracion_pagar" id="renumeracion_pagar" value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="renumeracion_pagar1" id="renumeracion_pagar1" value="0.00">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-8">
                                            <strong><label style="color: black;font-family: 'Arial Black'"><label style="color: black;font-family: 'Arial Black'" >46</label> CUENTAS POR PAGAR DIVERSAS – TERCEROS</label></strong>

                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    469 OTRAS CUENTAS POR PAGAR DIVERSAS</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="otras_cuentas" id="otras_cuentas" value="0.00">
                                            </label>
                                        </section>

                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="otras_cuentas1" id="otras_cuentas1" value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-8">
                                            <strong><label style="color: black">
                                                    469 AFP</label></strong>

                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="AFP" id="afp" value="0.00">
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                                <input type="number" readonly name="afp1" id="afp1" value="0.00">
                                            </label>
                                        </section>
                                    </div>


                                </fieldset>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                    <button type="button" onclick="RegistrarAsientos();"  class="btn btn-outline-warning txt-color-blue">REGISTRAR ASIENTOS </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <form id="checkout-form" class="smart-form" novalidate="novalidate">

                            <fieldset>

                                <div class="row">
                                    <section class="col col-6">
                                        <strong><label style="color: black;">
                                                <label style="color: black;font-family: 'Arial Black'" >62 </label> GASTOS DE PERSONAL, DIRECTORES Y GERENTES</label></strong>

                                    </section>
                                    <section class="col col-3">
                                      <center><label>DEBE</label></center>
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="gastos_personal" id="gastos_personal" value="0.00">
                                        </label>
                                    </section>
                                    <section class="col col-3">
                                        <center><label>HABER</label></center>
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="gastos_personal1" id="gastos_personal1" placeholder="0.00">
                                        </label>
                                    </section>

                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <strong><label style="color: black;"><label style="color: black;font-family: 'Arial Black'" >40</label> TRIBUTOS Y APORTES AL SISTEMA DE PENSIONES Y DE SALUD POR PAGAR</label></strong>

                                    </section>
                                    <section class="col col-3">
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="tributs_aportes" id="tributs_aportes" value="0.00">
                                        </label>
                                    </section>
                                    <section class="col col-3">
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="tributs_aportes1" id="tributs_aportes1" value="0.00">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <strong><label style="color: black;"><label style="color: black;font-family: 'Arial Black'" >41</label> REMUNERACIONES Y PARTICIPACIONES POR PAGAR</label></strong>

                                    </section>
                                    <section class="col col-3">
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="renumeraciones_participaciones" id="renumeraciones_participaciones" value="0.00">
                                        </label>
                                    </section>
                                    <section class="col col-3">
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="renumeraciones_participaciones1" id="renumeraciones_participaciones1" value="0.00">
                                        </label>
                                    </section>

                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <strong><label style="color: black;"><label style="color: black;font-family: 'Arial Black'" >46</label> CUENTAS POR PAGAR DIVERSAS – TERCEROS</label></strong>

                                    </section>
                                    <section class="col col-3">
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="cuentas_diversas" id="cuentas_diversas" value="0.00">
                                        </label>
                                    </section>
                                    <section class="col col-3">
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="cuentas_diversas1" id="cuentas_diversas1" value="0.00">
                                        </label>
                                    </section>
                                    <section class="col col-3" style="margin-left: 575px;">
                                      <center><strong><label>Total Haber</label></strong></center>
                                        <label class="input"> <i class="icon-prepend fa fa-dollar"></i>
                                            <input type="number" name="total_haber" id="total_haber" value="0.00">
                                        </label>
                                    </section>



                                </div>


                            </fieldset>
                        </form>
                    </div>

                </div>

            </div>
                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>

