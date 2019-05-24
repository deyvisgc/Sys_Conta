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


                                                    <fieldset>
                                                        <div class="row">
                                                            <section class="col col-4">
                                                                <label class="input"> <i class="icon-prepend fas fa-address-card"></i></i>
                                                                    <input type="text"  name="dni" placeholder="N° DNI" id="dni">
                                                                </label>
                                                            </section>
                                                            <section class="col col-4">
                                                                <label class="input"> <i class="icon-prepend fas fa-code"></i>
                                                                    <input type="text" name="cuspp" placeholder="CUSPP" id="cuspp">
                                                                </label>
                                                            </section>
                                                            <section class="col col-4">
                                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                    <input type="text" name="nombres" id="nombres" placeholder="APELLIDOS Y NOMBRES">
                                                                </label>
                                                            </section>
                                                            <section class="col col-4">
                                                                <label class="input"><i class=" icon-prepend  fas fa-calendar-alt"></i>
                                                                    <input type="date" name="fecha"  id="fecha" placeholder="FECHA INGRESO" >
                                                                </label>
                                                            </section>
                                                            <section class="col col-4">
                                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                    <input type="text" id="ocupasion" name="ocupasion" placeholder="CARGO U OCUPASION">
                                                                </label>
                                                            </section>
                                                            <section class="col col-4">
                                                                <label class="select">
                                                                    <select name="asignacion_family" id="asignacion_family" aria-required="true" aria-invalid="false" class="valid">
                                                                        <option value="0" selected="" disabled="">tipo seguro</option>
                                                                        <option value="SI" >SI</option>
                                                                        <option value="SI" >NO</option>
                                                                    </select></label>
                                                            </section>
                                                            <section class="col col-6">

                                                                <label class="select">
                                                                    <select  name="horastrabajadas" id="horastrabajadas" aria-required="true" aria-invalid="false" class="valid form-control">
                                                                        <option value="0" selected="" disabled="">Horas Extras</option>
                                                                        <option value="1" >Horas extras normales</option>
                                                                        <option value="2" >Horas nocturnas </option>

                                                                    </select></label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-times"></i>
                                                                    <input type="text" id="nume_horasextars" name="nume_horasextars" placeholder="Horas extras">
                                                                </label>
                                                            </section>
                                                        </div>

                                                    </fieldset>

                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <strong><center><h2 style="color: black">INGRESOS DEL TRABAJADOR Y RENUMERACION</h2></center></strong>
                                                <fieldset>
                                                    <div class="row">
                                                        <section class="col col-3">
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" onkeyup="clularHoras();" name="sueldo_basico" id="sueldo_basico" placeholder="SUELDO BASICO">
                                                            </label>
                                                        </section>


                                                        <section class="col col-3">
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" name="horas_extras"  id="horas_extras" placeholder="Calculo de hora extras">
                                                            </label>
                                                        </section>

                                                        <section class="col col-3">
                                                            <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                <input type="number" name="asigna_familiar" id="asigna_familiar" placeholder="ASIGNACION FAMILIAR">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label class="input"> <i class="icon-prepend fa fa-car"></i>
                                                                <input type="number" id="movilidad" name="movilidad" placeholder="MOVILIDAD">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label class="input"> <i class="icon-prepend fas fa-utensils"></i>
                                                                <input type="number" id="alimentacion" name="alimentacion" placeholder="ALIMENTACION">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" id="bonox_Extras" name="bonox_Extras" placeholder="BONOS EXTRA">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" id="otros" name="otros" placeholder="OTROS">
                                                            </label>
                                                        </section>
                                                        <section class="col col-3">
                                                            <label class="input"> <i class="icon-prepend fa fa-money"></i>
                                                                <input type="number" name="total_renumeracion" placeholder="TOTAL RENUMERACION">
                                                            </label>
                                                        </section>
                                                    </div>

                                                    <strong><center><h2 style="color: black">CALCULOS CONTABLES</h2></center></strong>


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
    $(document).ready(function() {
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

                return false;
            }


        });

    });
    function clularHoras() {
        var horasextrastipe=$('#horastrabajadas').val();

        var pagobasico=$('#sueldo_basico').val();
        var cantidadhoras=$('#nume_horasextars').val();
        var pagoxhora=parseFloat(pagobasico)/30;
        var horaslaborales=parseFloat(pagoxhora)/8;
        var tipodehoras=1;
        var tipodehoras2=2;
        if (tipodehoras==horasextrastipe){

            if(cantidadhoras==2){
                var total1=parseFloat(horaslaborales)*1.25*2;
                $('#horas_extras').val( Math.round(total1.toFixed(3)));

            }else if(cantidadhoras>2){
                var total2=parseFloat(horaslaborales)*1.35*parseFloat(cantidadhoras);
                $('#horas_extras').val( Math.round(total2.toFixed(3)));
            }

        }else {
            if (tipodehoras2==horasextrastipe){
                var total2=parseFloat(horaslaborales)*1.35;
                $('#horas_extras').val( Math.round(total2.toFixed(2)));


            }
        }

    }
</script>
@endsection
