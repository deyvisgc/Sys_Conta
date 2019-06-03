@extends('layaouts.prinsipal')

@section('content')
    <style>
        nav > .nav.nav-tabs{

            border: none;
            color:#fff;
            background:#272e38;
            border-radius:0;

        }
        nav > div a.nav-item.nav-link,
        nav > div a.nav-item.nav-link.active
        {
            border: none;
            padding: 18px 25px;
            color:#fff;
            background:#272e38;
            border-radius:0;
        }

        nav > div a.nav-item.nav-link.active:after
        {
            content: "";
            position: relative;
            bottom: -60px;
            left: -10%;
            border: 15px solid transparent;
            border-top-color: #e74c3c ;
        }
        .tab-content{
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top:5px solid #e74c3c;
            border-bottom:5px solid #e74c3c;
            padding:30px 25px;
        }

        nav > div a.nav-item.nav-link:hover,
        nav > div a.nav-item.nav-link:focus
        {
            border: none;
            background: #e74c3c;
            color:#fff;
            border-radius:0;
            transition:background 0.20s linear;
        }
    </style>

    <section id="widget-grid" class="">

        <!-- row -->
        <div class="row">

            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-0">
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
                        <span class="widget-icon"> <i class="fa fa-comments"></i> </span>
                        <h2>Registro De Renumeraciones</h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->
                            <input class="form-control" type="text">
                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body">

                            <!-- widget div-->

                            <div class="container">
                                <div class="row">

                                    <div class="col-xs-12 " style="margin-left: 70px">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">PLANILLA</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">RENUMERACIONES</a>
                                            </div>
                                        </nav>
                                        <form id="RegisPlanilla" class="smart-form" novalidate="novalidate">
                                            <input type="text"  hidden name="idtrabajador" placeholder="DESCRIPCION....." id="idtrabajador">

                                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                                                <button type="button"   title="calcular Fechas"  style="margin-left: 10px" onclick="calcularfechas();" class="btn btn-outline-success"><i class="fa fa-calendar"> CALCULAR TOTAL DE MESES</i></button>
                                                    <fieldset>
                                                        <div class="row">
                                                            <section class="col col-3">
                                                               <strong><label style="color: black">DNI(*)</label></strong>

                                                                <label class="input"> <i class="icon-prepend fas fa-address-card"></i></i>
                                                                    <input type="text"  name="dni" placeholder="DESCRIPCION....." id="dni">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label style="color: black" >NOMBRES(*)</label>
                                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                    <input type="text" readonly name="" id="nombres" placeholder="APELLIDOS Y NOMBRES">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" >FECHA INGRESO(*)</label>
                                                                <label class="input"><i class=" icon-prepend  fas fa-calendar-alt"></i>
                                                                    <input type="date" name="fecha1"  id="fecha1" placeholder="FECHA INGRESO" >
                                                                </label>
                                                            </section>

                                                            <section class="col col-3">
                                                                <label  style="color: black" >FECHA SALIDA(*)</label>
                                                                <label class="input"><i class=" icon-prepend  fas fa-calendar-alt"></i>
                                                                    <input type="date" name="fecha2" id="fecha2" placeholder="FECHA SALIDA" >
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label style="color: black" >CUSPP(*)</label>
                                                                <label class="input"> <i class="icon-prepend fas fa-code"></i>
                                                                    <input type="text" name="cuspp" placeholder="CUSPP" id="cuspp">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" >OCUPACION(*)</label>
                                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                    <input type="text" id="ocupasion" name="ocupasion" placeholder="CARGO U OCUPASION">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">

                                                                <label class="select">
                                                                    <label  style="color: black" >TIPO HORAS EXTRAS(*)</label>
                                                                    <select  name="tipos_horas_extras" id="horastrabajadas" aria-required="true" aria-invalid="false" class="valid form-control">
                                                                        <option value="0" selected="" disabled="">Horas Extras</option>
                                                                        <option value="1" >Horas extras normales</option>
                                                                        <option value="2" >Horas nocturnas </option>

                                                                    </select></label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > HORA EXTRA AL 25%(*)</label>
                                                                <label class="input"> <i class="icon-prepend fa fa-times"></i>
                                                                    <input type="text" id="nume_horasextars" name="nume_horasextars" placeholder="Horas extras al 25%">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > HORA EXTRA AL 35%(*)</label>
                                                                <label class="input"> <i class="icon-prepend fa fa-times"></i>
                                                                    <input type="text" id="nume_horasal35" name="nume_horasal35" placeholder="Horas extras al 35%">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" >ASIGNACION FAMILIAR(*)</label>
                                                                <label title="asignacion familiar" class="input"><i class="icon-prepend fa fa-user"></i>
                                                                    <input type="number" readonly value="93" name="asigna_familiar"  id="asigna_familiar" placeholder="ASIGNACION FAMILIAR">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > SUELDO BASICO(*)</label>
                                                                <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                    <input type="number" onkeyup="clularHoras();" name="sueldo_basico" id="sueldo_basico" placeholder="SUELDO BASICO">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > DIAS DE FALTAS(*)</label>
                                                                <label class="input"> <i class="icon-prepend fa fa-times"></i>
                                                                    <input type="text" value="0" onkeyup="CalcularInasistencias();" id="Faltas" name="Faltas" placeholder="Faltas">
                                                                </label>
                                                            </section>


                                                        </div>
                                                        <strong><center><h2 style="color: black">LIQUIDACION DE BENEFICIOS SOCIALES</h2></center></strong>
                                                        <button type="button"   title="calcular cts"  style="margin-left: 10px" onclick="calcularbeneficios();" class="btn btn-outline-success"><i class="fa fa-calculator"> CALCULAR CTS</i></button>
                                                        <button type="button"   title="calcular Vacaciones"  style="margin-left: 10px" onclick="calcularVacaciones();" class="btn btn-outline-danger"><i class="fa fa-calculator"> VACACIONES</i></button>
                                                        <button type="button"   title="calcular gratificaciones"  style="margin-left: 10px" onclick="calcularGratificacion();" class="btn btn-outline-warning"><i class="fa fa-calculator"> GRATIFICACIONES</i></button>
                                                        <br><br>

                                                        <div class="row">
                                                            <section class="col col-3">
                                                                <label  style="color: black" > CTS(*)</label>

                                                                <label class="input"> <i class="icon-prepend fas fa-address-card"></i></i>
                                                                    <input type="number" readonly  name="cts" placeholder="CTS" id="cts">
                                                                </label>
                                                                <input type="hidden"  name="numero_fecha" placeholder="CTS" id="numero_fecha">

                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > VACACIONES(*)</label>

                                                                <label class="input"> <i class="icon-prepend fas fa-code"></i>
                                                                    <input type="number" readonly value="0" name="vacaciones_trun" placeholder="VACACIONES TRUNCADAS" id="vacaciones_trun">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > BONIFICACION(*)</label>

                                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                    <input type="number" value="0.00" readonly name="bonificacion" id="bonificacion" placeholder="$.00">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > BONIFICACION EXTRAORDINARIA(*)</label>
                                                                <label class="input"><i class=" icon-prepend  fas fa-calendar-alt"></i>
                                                                    <input type="number" value="0.00" readonly name="bonificacion_extraordinaria"  id="bonificacion_extraordinaria" placeholder="$.00" >
                                                                </label>
                                                            </section>



                                                        </div>
                                                    </fieldset>

                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <strong><center><h2 style="color: black">INGRESOS DEL TRABAJADOR Y RENUMERACION  </h2> </center></strong><br>
                                                <button type="button" style="margin-left: 10px"  title="calcular gratificaciones"   onclick="calculalarRenumeracion();" class="btn btn-outline-info"> <i class="fa fa-calculator"> RENUMERACION</i></button>
                                                <button type="button" style="margin-left: 10px"  id="informacion_categoria" title="Informacion de la 5 categoria"   class="btn btn-outline-danger"> <i class="fa fa-calculator"></i> AYUDA SOBRE LA 5 CATEGORIA</button><br>


                                                <fieldset>
                                                    <div class="row">
                                                        <section class="col col-3">
                                                            <label  style="color: black" > DESCUENTO POR FALTAS(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" value="0.00" readonly  name="inasistencias"  id="inasistencias" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > PAGO DE CADA MES(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" value="0.00" readonly name="valorxmes"  id="valorxmes" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > HORAS EXTRAS AL 25%(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" readonly value="0" name="horas_extras25"  id="horas_extrasx25" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > HORAS EXTRAS AL 35%(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" value="0" readonly name="horas_extras35"  id="horas_extrasx35" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > MOVILIDAD(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-car"></i>
                                                                <input type="number" id="movilidad" name="movilidad" value="0.00" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > ALIMENTACION(*)</label>
                                                            <label class="input"> <i class="icon-prepend fas fa-utensils"></i>
                                                                <input type="number" id="alimentacion" name="alimentacion" value="0.00" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > BONOS EXTRAS(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" id="bonox_Extras" name="bonox_Extras" value="0.00" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > OTROS(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" id="otros" name="otros" value="0.00" placeholder="$.00">
                                                            </label>
                                                        </section>

                                                    </div>

                                                    <strong><center><h2 style="color: black">CALCULOS FINALES</h2></center></strong>

                                                    <button type="button" style="margin-left: 10px"  title="calcular Pensiones"   onclick="calculalarPensiones();" class="btn btn-outline-dark"> <i class="fa fa-calculator"> PENSIONES</i></button>
                                                    <button type="button" style="margin-left: 10px"  title="calcular 5 Categoria"   onclick="calculalar5CATEGORIA();" class="btn btn-outline-warning"> <i class="fa fa-calculator">CALCULO 5 CATEGORIA</i></button>
                                                    <br><br>
                                                     <div class="row">
                                                         <section class="col col-3">
                                                             <label  style="color: black" >RENUMRACION BRUTA(*)</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" value="0.00" readonly name="total_renumeracion" id="total_renumeracion" placeholder="TOTAL RENUMERACION">
                                                             </label>
                                                         </section>


                                                         <section class="col col-3">
                                                             <label  style="color: black" >BASE CALCULOS  (ONP/AFP)</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" name="base_calculo" id="base_calculo" value="0.00" readonly placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >TIPO SEGUROS</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="text" name="tipo_seguro" id="tipe_Seguo" readonly placeholder="tipos seguros">
                                                             </label>
                                                         </section>

                                                         <section class="col col-3">
                                                             <label  style="color: black" >SEGUROS</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="text" name="seguros" id="seguro1" readonly placeholder="seguro">
                                                             </label>
                                                         </section>

                                                         <input type="number" hidden name="aporte_obligatorio" id="aporte_obligatorio" placeholder="$.00">

                                                         <input type="number" hidden  name="comision_renumeracion" id="comision_renumeracion" placeholder="$.00">

                                                         <input type="number" hidden name="prima_Seguros" id="prima_Seguros" placeholder="$.00">

                                                         <section class="col col-3">
                                                             <label  style="color: black" >APORTE OBLIGATORIO</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" readonly name="aporte_obligatorio_total" id="aporte_obligatorio1" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >Comisión sobre la remuneración </label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" readonly name="comision_renumeracion_total" id="comision_renumeracion1" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >PRIMA SEGUROS</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" readonly name="prima_Seguros_monto" id="prima_Seguros1" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >TOTAL DESCUENTO AFP</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" readonly name="total_Descuento_afp" id="total_Descuento_afp" value="0.00">
                                                             </label>
                                                         </section>

                                                         <section class="col col-3">
                                                             <label  style="color: black" >TOTAL DESCUENTO ONP</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" readonly name="total_Descuento_onp" value="0.00" id="prima_Seguros_ONP" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >RENTA A LA 5TA CATEGORIA</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" readonly name="renta_5_categoria" id="renta_5_categoria" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >RENUMERACION NETA</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" readonly name="renumeracion_neta" id="renumeracion_neta" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >ESSALUD(9%)</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" readonly name="essalud" id="essalud" placeholder="$.00">
                                                             </label>

                                                         </section>
                                                         <input type="hidden" readonly name="SCTR" id="SCTR" value="0.00" placeholder="$.00">

                                                     </div>
                                                </fieldset>
                                            </div>

                                        </div>
                                            <footer>    <br><br>
                                                <center><button type="button"  id="registrar_planilla" class="btn btn-success">REGISTRAR PLANILLA</button></center>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                                            </footer>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>





    <div class="modal fade" id="calcular5categoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center> <strong><h5 style="color: black ;font-family:'Arial Black' " class="modal-title" id="exampleModalLabel">CALCULO IMPUESTO A LA RENTA 5TA CATEGORIA</h5></strong></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">CALCULAR RENTA NETA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">CALCULAR 5 CATEGORIA</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="home">
                            <form id="UPDATATRABAJADOR" class="smart-form" novalidate="novalidate">
                                <!-- widget div-->
                                <input type="hidden" data-chat-id="fecha_naci" name="id_persona" id="id_persona" placeholder="Expected finish date" class="hasDatepicker valid" aria-invalid="false">
                                <input type="hidden" data-chat-id="fecha_naci" name="id_trabajador" id="id_trabajador" placeholder="Expected finish date" class="hasDatepicker valid" aria-invalid="false">

                                <div>
                                    <div class="widget-body no-padding">
                                        <fieldset>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label  style="color: black" >SUELDO ANUAL(*)</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly id="sueldo_anual" name="sueldo_anual" placeholder="$.00">
                                                    </label>
                                                </section>
                                                <section class="col col-6">
                                                    <label  style="color: black" >GRATIFICACIONES(J/D)</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly id="gratificaciones_j_d" name="gratificaciones_j_d" placeholder="$.00">
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label  style="color: black" >BONIFICACION EXTRA(*)</label>
                                                    <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                        <input type="number" readonly id="bonificacion_extra" name="bonificacion_extra" placeholder="$.00">
                                                    </label>
                                                </section>
                                                <section class="col col-6">
                                                    <label  style="color: black" >TOTAL HORAS EXTRAS(*)</label>
                                                    <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                        <input type="number" readonly id="total_horas" name="total_horas" placeholder="$.00">
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label  style="color: black" >VACACIONES TRUNCADAS(*)</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-share-square"></i>
                                                        <input type="number" readonly value="0" id="vaca_trunc" name="vaca_trunc" placeholder="$.00">
                                                    </label>
                                                </section>
                                                <section class="col col-6">
                                                    <label  style="color: black" >RENTA BRUTA(*)</label>
                                                    <label class="input"> <i class="icon-prepend far fa-credit-card	"></i>
                                                        <input type="number" readonly id="renta_bruta" name="renta_bruta" placeholder="$.00">
                                                    </label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label  style="color: black" >TOTAL INGRESOS(*)</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                        <input type="number" readonly id="total_ingre" name="total_ingre" placeholder="$.00">
                                                    </label>
                                                </section>
                                                <section class="col col-6">
                                                    <label  style="color: black" >RENTA NETA(*)</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                        <input type="number" readonly id="renta_neta" name="renta_neta" placeholder="$.00">
                                                    </label>
                                                </section>
                                            </div>


                                        </fieldset><br>

                                        <footer>    <br><br>
                                            <center><button type="button" onclick="renta5categoria();" id="CalcularCategoria" class="btn btn-dark">CALCULAR 5 CATEGORIA</button></center>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                                        </footer>


                                    </div>
                                    <!-- end widget content -->

                                </div>
                                <!-- end widget div -->
                            </form>

                        </div>
                        <div class="tab-pane container fade" id="menu1">
                            <form id="UPDATATRABAJADOR" class="smart-form" novalidate="novalidate">
                                <!-- widget div-->
                                <input type="hidden" data-chat-id="fecha_naci" name="id_persona" id="id_persona" placeholder="Expected finish date" class="hasDatepicker valid" aria-invalid="false">
                                <input type="hidden" data-chat-id="fecha_naci" name="id_trabajador" id="id_trabajador" placeholder="Expected finish date" class="hasDatepicker valid" aria-invalid="false">

                                <div>
                                    <div class="widget-body no-padding">
                                        <fieldset>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label  style="color: black" >5UIT(8%)</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly id="5uit" name="sueldo_anual" placeholder="$.00">
                                                    </label>
                                                </section>
                                                <section class="col col-6">
                                                    <label  style="color: black" >RENTA 5TA</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly id="renta_5uit" value="0.00" name="gratificaciones_j_d" placeholder="$.00">
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label  style="color: black" >20UIT(14%)</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly id="20uit" value="0.00" name="gratificaciones_j_d" placeholder="$.00">
                                                    </label>
                                                </section>
                                                <section class="col col-6">
                                                    <label  style="color: black" >RENTA 5TA</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly id="renta_20uit" value="0.00"  name="gratificaciones_j_d" placeholder="$.00">
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label  style="color: black" >35UIT(17%)</label>
                                                    <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                        <input type="number" readonly id="35uit" name="bonificacion_extra" placeholder="$.00">
                                                    </label>
                                                </section>

                                                <section class="col col-6">
                                                    <label  style="color: black" >RENTA 5TA</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly id="renta_35uit" value="0.00" name="gratificaciones_j_d" placeholder="$.00">
                                                    </label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label  style="color: black" >45UIT(20%)</label>
                                                    <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                        <input type="number" readonly id="45uit" name="total_horas" placeholder="$.00">
                                                    </label>
                                                </section>
                                                <section class="col col-6">
                                                    <label  style="color: black" >RENTA 5TA</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly id="renta_45uit"  value="0.00" name="gratificaciones_j_d" placeholder="$.00">
                                                    </label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label  style="color: black" >45UIT(30%)</label>
                                                    <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                        <input type="number" readonly id="45uit1" name="total_horas" placeholder="$.00">
                                                    </label>
                                                </section>

                                                <section class="col col-6">
                                                    <label  style="color: black" >RENTA 5TA</label>
                                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                        <input type="number" readonly  id="renta_45uit1" value="0" name="gratificaciones_j_d" placeholder="$.00">
                                                    </label>
                                                </section>
                                            </div>
                                        </fieldset>
                                        <footer>
                                            <button type="button"  class="btn btn-dark" onclick="sumarRentas();">SUMAR RENTAS</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

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
    </div>

    <div class="modal fade" id="ModalInformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center> <strong><h5 style="color: black ;font-family:'Arial Black' " class="modal-title" id="exampleModalLabel">INFORMACION DE LA QUINTA CATE</h5></strong></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">

                                <header>
                                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                    <h2>RENTA NETA IMPONIBLE DE TRABAJO</h2>

                                </header>

                                <!-- widget div-->
                                <div>

                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->

                                    </div>
                                    <!-- end widget edit box -->

                                    <!-- widget content -->
                                    <div class="widget-body">

                                        <div class="table-responsive">

                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>DESCRIPCION RENTA POR UIT</th>
                                                    <th>PORCENTAJE DE UIT</th>
                                                    <th>TOPE MAXIMO DE CADA UIT</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>HASTA 5 UIT 0 $21000</td>
                                                    <td>8%</td>
                                                    <td>21000</td>

                                                </tr>
                                                <tr>
                                                    <td>POR EL EXCESO DE 5UIT $/21000 hasta 20UIT $/84000</td>
                                                    <td>14%</td>
                                                    <td>63000</td>
                                                </tr>
                                                <tr>
                                                    <td>POR EL EXCESO DE 20UIT $/84000 hasta 35UIT $/147000</td>
                                                    <td>17%</td>
                                                    <td>63000</td>
                                                </tr>
                                                <tr>
                                                    <td>POR EL EXCESO DE 35UIT $/147000 hasta 45UIT $/189000</td>
                                                    <td>20%</td>
                                                    <td>42000</td>
                                                </tr>
                                                <tr>
                                                    <td>POR EL EXCESO DE 45UIT $/189000 </td>
                                                    <td>30%</td>
                                                    <td>NO TIENE TOPE</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <!-- end widget content -->

                                </div>
                                <!-- end widget div -->

                            </div>

                            <footer>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="button" id="informacionojo" class="btn btn-success">OJO</button>

                            </footer>

                        </article>
                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->
                    </form>
                </div>

            </div>

        </div>
    </div>

@endsection






@section('scripts')
<script>
    var fecha_Actual;
    $(document).ready(function() {

        fecha_Actual= get_fhoy();
        $('#fecha1').val(fecha_Actual);
        $('#fecha2').val(fecha_Actual);
        $( "#dni" ).autocomplete({

            source: function(request, response) {
                $.ajax({
                    url: "{{url('buscador')}}",
                    data: {
                        term : request.term
                    },
                    dataType: "json",
                    success: function(data){


                        response(data.list_persona);


                    },


                });
            },

            minLength: 1,
            select:function (event,ui) {
                $('#dni').val(ui.item.value);
                $('#nombres').val(ui.item.nombre);
                $('#tipe_Seguo').val(ui.item.nombre_tipo);
                $('#seguro1').val(ui.item.seguro);
                $('#aporte_obligatorio').val(ui.item.aporte_obligatorio);
                $('#comision_renumeracion').val(ui.item.comision_renumeracion);
                $('#prima_Seguros').val(ui.item.Prima_Seguro);
                $('#idtrabajador').val(ui.item.idtrabajador);
                return false;
            }


        });
        $('#informacion_categoria').click(function () {
            $('#ModalInformacion').modal('show');

        });
        $('#informacionojo').click(function () {
            Swal.fire('los topes maximo se sacan restando el tope mayor de cada renta con el otro');
        });

        $('#registrar_planilla').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var frm =$('#RegisPlanilla');
            $.ajax({
                url: '{{url('Planilla')}}',
                type:'post',
                dataType: 'json',
                data:frm.serialize(),
                success:function (response) {

                    if(response.success===true){
                        frm.trigger('reset');

                        iziToast.success({
                            title: 'OK',
                            message: 'Successfully Planilla Registrada!',
                        });
                    }

                }

            })

        })
    });


    function calculalar5CATEGORIA() {
        $('#calcular5categoria').modal('show');
        var asisganacion_familair=$('#asigna_familiar').val();
        var pagobasico=$('#sueldo_basico').val();
        var inasistencias= $('#inasistencias').val();
        var horasextrasx25=$('#horas_extrasx25').val();
        var horasextrasx35=$('#horas_extrasx35').val();


        if(inasistencias==''){
            //calculo sueldo anual
            var sueldo_anual=parseFloat(asisganacion_familair)+parseFloat(pagobasico)*12;
            $('#sueldo_anual').val(sueldo_anual.toFixed(2));
            //calculo de las bonificaciones anuales
            var bonificacion=parseFloat(pagobasico)*2;
            $('#gratificaciones_j_d').val(bonificacion.toFixed(2));

            var bonificacionfinal=$('#gratificaciones_j_d').val();
            //calculo de las bonificaciones extras
            var bonificacionextra=parseFloat(bonificacionfinal)*0.09;
            $('#bonificacion_extra').val(bonificacionextra.toFixed(2));

            var bonificacionextrafinal=$('#bonificacion_extra').val();
            var sueldo_final=$('#sueldo_anual').val();
            //calculo de las horas extras
            var sumar_horas=parseFloat(horasextrasx25)+parseFloat(horasextrasx35);
            $('#total_horas').val(sumar_horas.toFixed(2));
            var total_horas= $('#total_horas').val();

            //calculo de suma de todos
            var sumarrentas=parseFloat(sueldo_final)+parseFloat(bonificacionfinal)+parseFloat(bonificacionextrafinal)+parseFloat(total_horas);


            $('#renta_bruta').val(sumarrentas.toFixed(2));
            $('#total_ingre').val(sumarrentas.toFixed(2));
            var total_ingreso=$('#total_ingre').val();
            var totalrenta=parseFloat(total_ingreso)-29400.00;
            iziToast.success({
                title: 'OK',
                message: 'Exito al calcular la 5 categoria!',
            });
            $('#renta_neta').val(totalrenta.toFixed(2));

        }else if(inasistencias==inasistencias){
            //calculo sueldo anual
            var subsueldo=parseFloat(pagobasico)+parseFloat(asisganacion_familair);
            var sueldo_anual=parseFloat(subsueldo)*12-parseFloat(inasistencias);
            $('#sueldo_anual').val(sueldo_anual.toFixed(2));
            //calculo de las bonificaciones anuales
            var bonificacion=parseFloat(pagobasico)*2;
            $('#gratificaciones_j_d').val(bonificacion.toFixed(2));

            var bonificacionfinal=$('#gratificaciones_j_d').val();
            //calculo de las bonificaciones extras
            var bonificacionextra=parseFloat(bonificacionfinal)*0.09;
            $('#bonificacion_extra').val(bonificacionextra.toFixed(2));

            var bonificacionextrafinal=$('#bonificacion_extra').val();
            var sueldo_final=$('#sueldo_anual').val();
            //calculo de las horas extras
            var sumar_horas=parseFloat(horasextrasx25)+parseFloat(horasextrasx35);
            $('#total_horas').val(sumar_horas.toFixed(2));
            var total_horas= $('#total_horas').val();

            //calculo de suma de todos
            var sumarrentas=parseFloat(sueldo_final)+parseFloat(bonificacionfinal)+parseFloat(bonificacionextrafinal)+parseFloat(total_horas);


            $('#renta_bruta').val(sumarrentas.toFixed(2));
            $('#total_ingre').val(sumarrentas.toFixed(2));
            var total_ingreso=$('#total_ingre').val();
            var totalrenta=parseFloat(total_ingreso)-29400.00;
            iziToast.success({
                title: 'OK',
                message: 'Exito al calcular la 5 categoria!',
            });
            $('#renta_neta').val(totalrenta.toFixed(2));
        }








    }
    function renta5categoria() {
        var primerauit=21000;
        var segundauit=63000;
        var tercerauit=63000;
        var cuartauit=42000;
        var subtotal1;
        var subtotal2;
       var  subtotal3;
       var subtotal4;
        var subtotal5;
        var subtota7;
        var subtotal8;
        var subtotal9;
       var renta_neta= $('#renta_neta').val();

           //primera categoria
           if(renta_neta<=primerauit){
               subtotal1=parseFloat(renta_neta)-0;
               $('#5uit').val(subtotal1.toFixed(2));
               var rentauitcinco=$('#5uit').val();
               var rentatotal5=parseFloat(rentauitcinco)*0.08;
               $('#renta_5uit').val(rentatotal5.toFixed(2));

           }
           else if(renta_neta>=21000){
               $('#5uit').val(primerauit);
               var rentauitcinco1=$('#5uit').val();
               var rentatotal51=parseFloat(rentauitcinco1)*0.08;

               $('#renta_5uit').val(rentatotal51.toFixed(2));
               subtotal2=parseFloat(renta_neta)-primerauit;

             //  alert(subtotal2);
           }

           if(subtotal2<=segundauit){
            subtotal3=parseFloat(subtotal2);
            var segundouit=parseFloat(subtotal3)-0;
               $('#20uit').val(segundouit.toFixed(2));

               var rentauitveinte= $('#20uit').val();
               var rentatotal20=parseFloat(rentauitveinte)*0.14;
               $('#renta_20uit').val(rentatotal20.toFixed(2));

        }if(subtotal2>=segundauit){
            subtotal4=parseFloat(subtotal2)-parseFloat(segundauit);
            $('#20uit').val(subtotal4.toFixed(2));

            var rentauitveinte1= $('#20uit').val();
            var rentatotal201=parseFloat(rentauitveinte1)*0.14;
            $('#renta_20uit').val(rentatotal201.toFixed(2));
         //   alert(subtotal4);
            //fin segunda categoria


            //tercera categoria

        }if(subtotal4<=tercerauit){
            subtotal5=parseFloat(subtotal4);
          var subtotal6=parseFloat(subtotal5)-0;
            $('#35uit').val(subtotal6.toFixed(2));

            var rentauittreinta5= $('#35uit').val();
            var rentatreinta5=parseFloat(rentauittreinta5)*0.17;
            $('#renta_35uit').val(rentatreinta5.toFixed(2));
        }

           if(subtotal4>=tercerauit){
            subtota7=parseFloat(subtotal4)-parseFloat(tercerauit);
            $('#35uit').val(subtota7.toFixed(2));

               var rentauittreinta51= $('#35uit').val();
               var rentatreinta51=parseFloat(rentauittreinta51)*0.17;
               $('#renta_35uit').val(rentatreinta51.toFixed(2));
           // alert(subtota7);
        }
        //fin de la 3 categoria
        //cuarta categoria
           if(subtota7<=cuartauit){
               subtotal8=parseFloat(subtota7);
               var subtotal10=parseFloat(subtotal8)-0;
               $('#45uit').val(subtotal10.toFixed(2));
               var rentauitcuarentacinco= $('#45uit').val();
               var rentacuarentacinco=parseFloat(rentauitcuarentacinco)*0.2;
               $('#renta_45uit').val(rentacuarentacinco.toFixed(2));

            //   alert(subtotal10);
        }

           if(subtota7>=cuartauit){
            subtotal9=parseFloat(subtota7)-parseFloat(cuartauit);
            $('#45uit').val(subtotal9.toFixed(2));
               var rentauitcuarentacinco1= $('#45uit').val();
               var rentacuarentacinco1=parseFloat(rentauitcuarentacinco1)*0.2;
               $('#renta_45uit').val(rentacuarentacinco1.toFixed(2));

        }




       /*
        //segunda categoria
       if(renta_neta>primerauit){
           if(renta_neta<=segundauit){
               alert('sasa');
               $('#20uit').val(segundauit);
               var segundauit1=$('#20uit').val();
               var catorceporciento=parseFloat(segundauit1)*0.14;
               $('#renta_20uit').val(catorceporciento);
               subtotal2=parseFloat(subtotal1)-segundauit;
               alert(subtotal2);
           }

        }
        //tercera categoria

       if(subtotal2>=tercerauit){
            $('#35uit').val(tercerauit.toFixed(2));
           var tercerauit1=$('#35uit').val();
           var diecicieteporciento=parseFloat(tercerauit1)*0.17;
           $('#renta_35uit').val(diecicieteporciento);
            subtotal3=parseFloat(subtotal2)-tercerauit;

        }
        //cuarta categoria

       if(subtotal3>=cuartauit){
            $('#45uit').val(cuartauit.toFixed(2));
            var cuartauit1= $('#45uit').val();
           var veinteporciento=parseFloat(cuartauit1)*0.2;
           $('#renta_45uit').val(veinteporciento);
            subtotal4=parseFloat(subtotal3)-cuartauit;
            alert(subtotal4);

        }
       /*
        switch (true) {

            case renta_neta>= 21000:
                subtotal1=parseFloat(renta_neta)-2100;
                break;
            case subtotal1>= 63000:
                subtotal2=parseFloat(subtotal1)-63000;
                alert(subtotal2);
                break;

            case subtotal2<=63000:
                subtotal3=parseFloat(renta_neta)-63000;
                alert(subtotal3);
                break;
            case subtotal2<=42000:
                subtotal4=parseFloat(renta_neta)-42000;
                alert(subtotal4);
                break;
            default:
                //Sentencias_def ejecutadas cuando no ocurre una coincidencia con los anteriores casos
                break;
        }
        */

    }
    function sumarRentas() {
        var renta1=$('#renta_5uit').val();
        var renta2=$('#renta_20uit').val();
        var renta3=$('#renta_35uit').val();
        var renta4=$('#renta_45uit').val();
        var renta5=$('#renta_45uit1').val();
        var subtotal=parseFloat(renta1)+parseFloat(renta2)+parseFloat(renta3)+parseFloat(renta4)+
            parseFloat(renta5);
        var total=parseFloat(subtotal)/12;
        $('#renta_5_categoria').val(total.toFixed(2));

        var total_renumeracion=$('#total_renumeracion').val();
        var totaldescuentoAFP=$('#total_Descuento_afp').val();
        var totaldescuentoONP=$('#prima_Seguros_ONP').val();
        var total5categoria=$('#renta_5_categoria').val();
       var esaludmaximo=83.7;

        var renumeracion_neta=parseFloat(total_renumeracion)-parseFloat(totaldescuentoAFP)-parseFloat(totaldescuentoONP)-parseFloat(total5categoria);
        iziToast.success({
            title: 'OK',
            message: 'Exito al sumar la renta 5ta categoria!',
        });
          $('#renumeracion_neta').val(renumeracion_neta.toFixed(2));
        var base_Calculo=$('#base_calculo').val();
        var subtotalesalud=parseFloat(base_Calculo)*0.09;
        var SCTR=parseFloat(base_Calculo)*0.0125;
        if(subtotalesalud<esaludmaximo){
            $('#essalud').val(83.7);
        }else {
            $('#essalud').val(subtotalesalud.toFixed(2));
            $('#SCTR').val(SCTR.toFixed(2));
        }



    }
    function calculalarRenumeracion() {
        var asisganacion_familair = $('#asigna_familiar').val();
        var cts = $('#cts').val();
        var vacaciones = $('#vacaciones_trun').val();
        var bonificacion = $('#bonificacion').val();
        var bonifi_extraor = $('#bonificacion_extraordinaria').val();
        var pagoxcademes = $('#valorxmes').val();
        var horas_extras25 = $('#horas_extrasx25').val();
        var horasextras35 = $('#horas_extrasx35').val();
        var movilidad = $('#movilidad').val();
        var alimentacion = $('#alimentacion').val();
        var bonosextras = $('#bonox_Extras').val();
        var otros = $('#otros').val();

        if (cts == '') {
            $('#cts').val(0);
        }
        //se activa cuando el canpo vacaciones no tienen valor
        else {
            var subtotal = parseFloat(asisganacion_familair) + parseFloat(cts) + parseFloat(vacaciones) + parseFloat(bonificacion) + parseFloat(bonifi_extraor);
            var subtotal1 = parseFloat(pagoxcademes) + parseFloat(horas_extras25) + parseFloat(horasextras35) + parseFloat(movilidad) + parseFloat(alimentacion) +
                parseFloat(bonosextras) + parseFloat(otros);
            var total = parseFloat(subtotal) + parseFloat(subtotal1);
            $('#total_renumeracion').val(total.toFixed(2));
            $('#base_calculo').val(total.toFixed(2));
            iziToast.success({
                title: 'OK',
                message: 'Exito en las renumeraciones!',
            });

            //se activa cuando las vaciones tiene valor
            if (vacaciones!=0){
                var pagoxcademes=$('#valorxmes').val();
                var asisganacion_familair=$('#asigna_familiar').val();
                var vacaciones=$('#vacaciones_trun').val();
                var liquidacion=parseFloat(pagoxcademes)+parseFloat(asisganacion_familair)+parseFloat(vacaciones);
                $('#base_calculo').val(liquidacion.toFixed(2));
                $('#total_renumeracion').val(total.toFixed(2));
                iziToast.success({
                    title: 'OK',
                    message: 'Exito en las renumeraciones!',
                });
            }
        }









    }
    function calcularfechas() {
        var fecha=new Date($('#fecha1').val());
        var fecha2=new Date($('#fecha2').val());
        if(fecha==null){
            iziToast.error({
                title: 'Error',
                message: 'Es necesario elegir las fechas',
            });
        }if(fecha2==null){
            iziToast.error({
                title: 'Error',
                message: 'Es necesario elegir las fechas',
            });

        }else {
            var  months = (fecha2.getFullYear() - fecha.getFullYear());

            var fechafinal=months*12;
            fechafinal -= fecha.getMonth();
            fechafinal += fecha2.getMonth();
            if (fechafinal===fechafinal){
                iziToast.info({
                    title: 'fechas',
                    message: 'la cantidad de meses agarrados son:'+fechafinal,
                });
                $('#numero_fecha').val(fechafinal);
                $('#numero_fecha1').val(fechafinal);



            }
        }



    }
    function CalcularInasistencias() {
        var pago=$('#sueldo_basico').val();
        var inasistencias=$('#Faltas').val();
        //saco el saldo del monto por  dia
        var totalpagoxdia=parseFloat(pago)/30;
        //valor del dia domingo
        var totalxdomingo=parseFloat(totalpagoxdia)/30;
        //valor de la inasistencia
        var totalinasistencia=parseFloat(totalxdomingo)+totalpagoxdia;
        var totalxdia=parseFloat(totalinasistencia)*inasistencias;
        $('#inasistencias').val(totalxdia.toFixed(2));

        deyvis();

    }
    function deyvis() {
        var pago=$('#sueldo_basico').val();
        var inasistencia=$('#inasistencias').val();
        var pago1=parseFloat(pago)-parseFloat(inasistencia);

        $('#valorxmes').val(pago1.toFixed(2));
    }
    function clularHoras() {

        var horasextrastipe=$('#horastrabajadas').val();
        var asisganacion_familair=$('#asigna_familiar').val();
        var pagobasico=$('#sueldo_basico').val();
        var cantidadhorasal25=$('#nume_horasextars').val();
        var cantidadhoraextras=$('#nume_horasal35').val();

        if(cantidadhorasal25>2){
            iziToast.error({
                title: 'Error',
                message: 'no se tiene que pasar de 2 horas en el 25%',
            });
        }else {
            if(asisganacion_familair==''){
                $('#asigna_familiar').val(0);
            }else {
                var totalbasico=parseFloat(pagobasico)+parseFloat(asisganacion_familair);
                var pagoxhora=parseFloat(totalbasico)/30/8;
                var tipodehoras=1;
                var tipodehoras2=2;
                if (tipodehoras==horasextrastipe){

                    if(cantidadhorasal25<=2){
                        var total1=parseFloat(pagoxhora)*parseFloat(cantidadhorasal25)*1.25;
                        $('#horas_extrasx25').val(total1.toFixed(2));

                    }if(cantidadhoraextras>0){
                        var total2=parseFloat(pagoxhora)*1.35*parseFloat(cantidadhoraextras);
                        $('#horas_extrasx35').val(total2.toFixed(2));
                    }

                }else {
                    if (tipodehoras2==horasextrastipe){
                        var total2=parseFloat(cantidadhoraextras)*1.35;
                        $('#horas_extrasx35').val( Math.round(total2.toFixed(2)));


                    }
                }

            }
        }


    }
    function calcularbeneficios() {
        var numero_fecha= $('#numero_fecha').val();
        var pagobasico=$('#sueldo_basico').val();
        var asisganacion_familair=$('#asigna_familiar').val();
        if(pagobasico==''){
            iziToast.warning({
                title: 'Caution',
                message: 'Registre el saldo basico',
            });
        }
        else if(numero_fecha==''){
            iziToast.warning({
                title: 'Caution',
                message: 'Registre el numero de mes a sacar calculo',
            });
        }

        else {
            var totalbasico=parseFloat(pagobasico)+parseFloat(asisganacion_familair);
            var cts=parseFloat(totalbasico)/6;
            var totalmonto=parseFloat(totalbasico)+parseFloat(cts);
            var totalsuma=parseFloat(totalmonto)/12*numero_fecha;
            $('#cts').val(totalsuma.toFixed(2));

        }


    }
    function calcularVacaciones() {
        var numero_fecha= $('#numero_fecha').val();
        var pagobasico=$('#sueldo_basico').val();
        var asisganacion_familair=$('#asigna_familiar').val();
        if(pagobasico==''){
            iziToast.warning({
                title: 'Caution',
                message: 'Registre el saldo basico',
            });
        }
        else if(numero_fecha==''){
            iziToast.warning({
                title: 'Caution',
                message: 'Registre el numero de mes a sacar calculo',
            });
        }else {
            var totalbasico=parseFloat(pagobasico)+parseFloat(asisganacion_familair);
            var vacaciones=parseFloat(totalbasico)/12*parseFloat(numero_fecha);
            $('#vacaciones_trun').val(vacaciones.toFixed(2));
        }

    }
    function calcularGratificacion() {
        var numero_fecha= $('#numero_fecha').val();
        var pagobasico=$('#sueldo_basico').val();
        var asisganacion_familair=$('#asigna_familiar').val();
        if(pagobasico==''){
            iziToast.warning({
                title: 'Caution',
                message: 'Registre el saldo basico',
            });
        }
        else if(numero_fecha==''){
            iziToast.warning({
                title: 'Caution',
                message: 'Registre el numero de mes a sacar calculo',
            });
        }else{
            var totalbasico=parseFloat(pagobasico)+parseFloat(asisganacion_familair);
            var bonificacion=parseFloat(totalbasico)/6*parseFloat(numero_fecha);
            var bonificacion_extraordinaria=parseFloat(bonificacion)*0.09;
            $('#bonificacion').val(bonificacion.toFixed(2));
            $('#bonificacion_extraordinaria').val(bonificacion_extraordinaria.toFixed(2));
        }




    }
    function calculalarPensiones() {
      var tipo_seguros=$('#tipe_Seguo').val();
        if(tipo_seguros==0){
            iziToast.error({
                title: 'Error',
                message: 'Es necesario agregar el tipo de seguro',
            });
        }else{
            if(tipo_seguros=='AFP'){

                var base_Calculo=$('#base_calculo').val();
                var aporte_obligatorio=$('#aporte_obligatorio').val();
                var comision_sobre_renumeracion=$('#comision_renumeracion').val();
                var prima_Seguros=$('#prima_Seguros').val();
                if(base_Calculo==0){
                    iziToast.error({
                        title: 'Error',
                        message: 'Es necesario agregar el monto base calculo',
                    });

                }else{
                    //se divide entre 100% para sacar el porcentaje de cada valor que viene
                    var subtotalaporte=parseFloat(aporte_obligatorio)/100;
                    var subtotalcomicion=parseFloat(comision_sobre_renumeracion)/100;
                    var subtotalprima_Seguros=parseFloat(prima_Seguros)/100;
                    //calculo de las pensiones por cada tipo
                    var totalaporte=parseFloat(base_Calculo)*parseFloat(subtotalaporte);
                    $('#aporte_obligatorio1').val(totalaporte.toFixed(2));

                    var totalcomision=parseFloat(base_Calculo)*parseFloat(subtotalcomicion);
                    $('#comision_renumeracion1').val(totalcomision.toFixed(2));

                    var primaseguros=parseFloat(base_Calculo)*parseFloat(subtotalprima_Seguros);
                    $('#prima_Seguros1').val(primaseguros.toFixed(2));

                    var totalpensiones=parseFloat(totalaporte)+parseFloat(totalcomision)+parseFloat(primaseguros);
                    $('#total_Descuento_afp').val(totalpensiones.toFixed(2));
                }

            }else if(tipo_seguros=='ONP'){

                if(base_Calculo==0){
                    iziToast.error({
                        title: 'Error',
                        message: 'Es necesario agregar el monto base calculo',
                    });

                }else{
                    var base_Calculo=$('#base_calculo').val();
                    var totalONP=parseFloat(base_Calculo)*0.13;

                    $('#prima_Seguros_ONP').val(totalONP.toFixed(2));
                }

            }
        }




    }


</script>
@endsection
