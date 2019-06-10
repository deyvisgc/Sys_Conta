



    <!-- Modal -->
    <div class="modal fade" id="boleta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">BOLETAS DE PAGO POR TRABAJADOR</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="cotenido">
                        <center><h2>BOLETA DE PAGO</h2></center>
                        <center><p>ART. 19 DEL DECRETO SUPREMO N° 001-98-TR DEL 22-01-98</p></center>

                        <div class="row">
                            <section class="col col-12" style="border-radius: 2px;">
                                <center><strong><label  style="color: black;">MES: <span id="meses"></span></label></strong></center>

                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-3"  style=" border: 1px solid black; background-color: #F2C9C3;margin-left: 15px">
                                <strong><center><label style="color: black; padding-top: 5px;">DATOS DE LA EMPRESA</label></center></strong>

                            </section>
                        </div><br>
                        <div class="row">
                            <section class="co col-12">
                                <div class="table-responsive" >
                                    <table id="tb_Empresa" style="background-color:#F7BFBF " class="table table-striped table-bordered "  width="100%">
                                        <thead>
                                        <tr>
                                            <th  style="background-color:#E58484 "><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>RUC</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>RAZON SOCIAL</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>RUBRO DE LA EMPRESA</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>DIRECCIÓN</th>
                                        </tr>
                                        </thead>
                                        <tbody id="cuerpo">
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                        <div class="row">

                            <section class="col col-md-3"  style=" border: 1px solid black; background-color:#F2C9C3;margin-left: 15px">
                                <strong><center><label style="color: black; padding-top: 5px;">DATOS DEL TRAJADOR</label></center></strong>

                            </section>
                        </div><br>
                        <div class="row">
                            <section class="co col-12">
                                <div class="table-responsive" >
                                    <table id="tb_total2" style="background-color:#F7BFBF " class="table table-striped table-bordered "  width="100%">
                                        <thead>
                                        <tr>
                                            <th  style="background-color:#E58484 "><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>CODIGO</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>NOMBRES</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>APELLIDOS</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>D.N.I.</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>F. NAC.</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>HIJOS</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>DIRECCIÓN</th>
                                        </tr>
                                        </thead>
                                        <tbody id="cuerpoTrabajador">
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-8"  style=" border: 1px solid black; background-color: #F2C9C3;margin-left: 15px">
                                <strong><center><label style="color: black; padding-top: 5px;">DATOS DEL TRABAJADOR VINCULADOS A LA RELACION LABORAL</label></center></strong>

                            </section>
                        </div><br>
                        <div class="row">
                            <section class="co col-12">
                                <div class="table-responsive" >
                                    <table id="tb_total2" style="background-color:#F7BFBF " class="table table-striped table-bordered "  width="100%">
                                        <thead>
                                        <tr>
                                            <th  style="background-color:#E58484 "><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>CARGO</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>PERIODIC.</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>ONP</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>A.F.P.</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollar text-muted hidden-md hidden-sm hidden-xs"></i>C.U.S.P.P.</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>F. ING.</th>
                                            <th style="background-color:#E58484 "><i class="fa fa-fw fa-dollartext-muted hidden-md hidden-sm hidden-xs"></i>F. CESE</th>
                                        </tr>
                                        </thead>
                                        <tbody id="traba_razonocial">

                                        </tbody>
                                    </table>
                                </div>
                            </section>

                        </div>
                        <div class="row">
                            <section class="co col-12">
                                <div class="table-responsive" >
                                    <table id="tb_total2" style="background-color:#F7BFBF " class="table table-striped table-bordered "  width="100%">
                                        <thead>
                                        <tr>
                                            <th  style="background-color:#E58484 ">DIAS LABORADOS</th>
                                            <th style="background-color:#E58484 ">TOTAL HORAS LABORADAS</th>
                                            <th style="background-color:#E58484 ">HORAS EXTRAS AL 25%</th>
                                            <th style="background-color:#E58484 ">HORAS EXTRAS AL 35%</th>
                                            <th style="background-color:#E58484 ">DIAS NO LABORADOS</th>

                                        </tr>
                                        </thead>
                                        <tbody id="dias_deltrabajador">
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                        <div class="row">

                            <section class="co col-12">
                                <div class="table-responsive" >
                                    <table id="tb_total2" style="background-color:#F7BFBF " class="table table-striped table-bordered "  width="100%">
                                        <thead>
                                        <tr>
                                            <th  style="background-color:#E58484 "><center>REMUNERACIONES</center></th>
                                            <th  style="background-color:#E58484 "><center>RETENCIONES / DESCUENTOS</center></th>
                                            <th  style="background-color:#E58484 "><center>APORTACIONES DEL EMPLEADOR</center></th>
                                        </tr>
                                        </thead>
                                        <tbody id="Renumeraciones">
                                        </tbody>
                                        <tfoot id="pie_totatales">
                                        </tfoot>
                                    </table>
                                </div>
                            </section>
                        </div>

                        <div class="row">

                            <section class="co col-6">
                                <hr size="10" style="background-color: black; margin-left: 10px" />
                               <center><p>EMPLEADOR</p></center>
                            </section>
                            <section class="co col-6">

                                <hr size="10" style="background-color: black; margin-left: 10px" />
                               <center><p>TRABAJADOR</p></center>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-dismiss="modal">DESCARGAR PDF</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="button" id="btnImprimir" class="btn btn-outline-success">IMPRIMIR</button>
                </div>
            </div>
        </div>
    </div>

