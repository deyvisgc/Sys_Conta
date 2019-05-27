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
                                        <form id="checkout-form" class="smart-form" novalidate="novalidate">
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
                                                                    <input type="text" name="" id="nombres" placeholder="APELLIDOS Y NOMBRES">
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
                                                                    <select  name="horastrabajadas" id="horastrabajadas" aria-required="true" aria-invalid="false" class="valid form-control">
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
                                                                    <input type="text" onkeyup="CalcularInasistencias();" id="Faltas" name="Faltas" placeholder="Faltas">
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
                                                                    <input type="number"  name="cts" placeholder="CTS" id="cts">
                                                                </label>
                                                                <input type="hidden"  name="numero_fecha" placeholder="CTS" id="numero_fecha">

                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > VACACIONES(*)</label>

                                                                <label class="input"> <i class="icon-prepend fas fa-code"></i>
                                                                    <input type="number" value="0" name="vacaciones_trun" placeholder="VACACIONES TRUNCADAS" id="vacaciones_trun">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > BONIFICACION(*)</label>

                                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                    <input type="number" name="bonificacion" id="bonificacion" placeholder="$.00">
                                                                </label>
                                                            </section>
                                                            <section class="col col-3">
                                                                <label  style="color: black" > BONIFICACION EXTRAORDINARIA(*)</label>
                                                                <label class="input"><i class=" icon-prepend  fas fa-calendar-alt"></i>
                                                                    <input type="number" name="bonificacion_extraordinaria"  id="bonificacion_extraordinaria" placeholder="$.00" >
                                                                </label>
                                                            </section>



                                                        </div>
                                                    </fieldset>

                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <strong><center><h2 style="color: black">INGRESOS DEL TRABAJADOR Y RENUMERACION  </h2> </center></strong>
                                                <button type="button" style="margin-left: 10px"  title="calcular gratificaciones"   onclick="calculalarRenumeracion();" class="btn btn-outline-info"> <i class="fa fa-calculator"> RENUMERACION</i></button>
                                                <fieldset>
                                                    <div class="row">
                                                        <section class="col col-3">
                                                            <label  style="color: black" > DESCUENTO POR FALTAS(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number"  name="inasistencias"  id="inasistencias" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > PAGO DE CADA MES(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number"  name="valorxmes"  id="valorxmes" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > HORAS EXTRAS AL 25%(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" name="horas_extras"  id="horas_extrasx25" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > HORAS EXTRAS AL 35%(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" name="horas_extras"  id="horas_extrasx35" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > MOVILIDAD(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-car"></i>
                                                                <input type="number" id="movilidad" name="movilidad" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > ALIMENTACION(*)</label>
                                                            <label class="input"> <i class="icon-prepend fas fa-utensils"></i>
                                                                <input type="number" id="alimentacion" name="alimentacion" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > BONOS EXTRAS(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" id="bonox_Extras" name="bonox_Extras" placeholder="$.00">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label  style="color: black" > OTROS(*)</label>
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" id="otros" name="otros" placeholder="$.00">
                                                            </label>
                                                        </section>

                                                    </div>

                                                    <strong><center><h2 style="color: black">CALCULOS FINALES</h2></center></strong>

                                                    <button type="button" style="margin-left: 10px"  title="calcular Pensiones"   onclick="calculalarPensiones();" class="btn btn-outline-dark"> <i class="fa fa-calculator"> PENSIONES</i></button>
                                                    <br><br>
                                                     <div class="row">
                                                         <section class="col col-3">
                                                             <label  style="color: black" >RENUMRACION BRUTA(*)</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" name="total_renumeracion" id="total_renumeracion" placeholder="TOTAL RENUMERACION">
                                                             </label>
                                                         </section>


                                                         <section class="col col-3">
                                                             <label  style="color: black" >BASE CALCULOS  (ONP/AFP)</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" name="base_calculo" id="base_calculo" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >TIPO SEGUROS</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="text" name="tipo_seguro" id="tipe_Seguo" placeholder="$.00">
                                                             </label>
                                                         </section>

                                                         <section class="col col-3">
                                                             <label  style="color: black" >SEGUROS</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="text" name="seguros" id="seguro1" placeholder="$.00">
                                                             </label>
                                                         </section>

                                                         <input type="number" hidden name="aporte_obligatorio" id="aporte_obligatorio" placeholder="$.00">

                                                         <input type="number" hidden  name="comision_renumeracion" id="comision_renumeracion" placeholder="$.00">

                                                         <input type="number" hidden name="prima_Seguros" id="prima_Seguros" placeholder="$.00">

                                                         <section class="col col-3">
                                                             <label  style="color: black" >APORTE OBLIGATORIO</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" name="aporte_obligatorio1" id="aporte_obligatorio1" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >Comisión sobre la remuneración </label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" name="comision_renumeracion1" id="comision_renumeracion1" placeholder="$.00">
                                                             </label>
                                                         </section>
                                                         <section class="col col-3">
                                                             <label  style="color: black" >PRIMA SEGUROS</label>
                                                             <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                 <input type="number" name="prima_Seguros1" id="prima_Seguros1" placeholder="$.00">
                                                             </label>
                                                         </section>

                                                     </div>
                                                </fieldset>
                                            </div>

                                        </div>
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
                $('#nombres').val(ui.item.nombre);
                $('#tipe_Seguo').val(ui.item.nombre_tipo);
                $('#seguro1').val(ui.item.seguro);
                $('#aporte_obligatorio').val(ui.item.aporte_obligatorio);
                $('#comision_renumeracion').val(ui.item.comision_renumeracion);
                $('#prima_Seguros').val(ui.item.Prima_Seguro);

                return false;
            }


        });

    });

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
        } else {
            var subtotal = parseFloat(asisganacion_familair) + parseFloat(cts) + parseFloat(vacaciones) + parseFloat(bonificacion) + parseFloat(bonifi_extraor);
            var subtotal1 = parseFloat(pagoxcademes) + parseFloat(horas_extras25) + parseFloat(horasextras35) + parseFloat(movilidad) + parseFloat(alimentacion) +
                parseFloat(bonosextras) + parseFloat(otros);
            var total = parseFloat(subtotal) + parseFloat(subtotal1);
            $('#total_renumeracion').val(total.toFixed(2));
            $('#base_calculo').val(total.toFixed(2));

            if (vacaciones!=0){
                var pagoxcademes=$('#valorxmes').val();
                var asisganacion_familair=$('#asigna_familiar').val();
                var vacaciones=$('#vacaciones_trun').val();
                var liquidacion=parseFloat(pagoxcademes)+parseFloat(asisganacion_familair)+parseFloat(vacaciones);
                $('#base_calculo').val(liquidacion.toFixed(2));
                $('#total_renumeracion').val(total.toFixed(2));
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
        var base_Calculo=$('#base_calculo').val();
        var aporte_obligatorio=$('#aporte_obligatorio').val();
        var comision_sobre_renumeracion=$('#comision_renumeracion').val();
        var prima_Seguros=$('#prima_Seguros').val();
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


    }


</script>
@endsection
