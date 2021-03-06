@extends('layaouts.prinsipal')

@section('content')

    <div class="row" id="hola">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center error-box">
                        <h1 class="error-text-2 bounceInDown animated"><label style="font-family: Bahnschrift;color: #0AA699;" >BIENVENIDO Sr(@)</label>  {{Auth::user()->usuario}} <span class="particle particle--c"></span><label style="font-family: Bahnschrift;color: #0AA699;" >AL SISTEMA COMTABLE</label><span class="particle particle--a"></span><span class="particle particle--b"></span></h1>
                        <div id="content">

                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="well well-light">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="panel panel-teal pricing-big">

                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            N° TRABAJADORES</h3>
                                                    </div>
                                                    <div class="panel-body no-padding text-align-center">
                                                        <div class="the-price">
                                                            <h1>
                                                                <span class="subscript">{{$trabajador}}</span></h1>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="panel panel-teal pricing-big">

                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            N° PLANTILLAS</h3>
                                                    </div>
                                                    <div class="panel-body no-padding text-align-center">
                                                        <div class="the-price">
                                                            <h1>
                                                                <span class="subscript">{{$planilla}}</span></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="panel panel-teal pricing-big">

                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            N° USUARIOS</h3>
                                                    </div>
                                                    <div class="panel-body no-padding text-align-center">
                                                        <div class="the-price">
                                                            <h1>
                                                                <span class="subscript">{{$users}}</span></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="panel panel-teal pricing-big">

                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            N° SEGUROS</h3>
                                                    </div>
                                                    <div class="panel-body no-padding text-align-center">
                                                        <div class="the-price">
                                                            <h1>
                                                                <span class="subscript">{{$seguros}}</span></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>






                                        </div>
                                    </div>
                                </div>
                            </div>



                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>



                        </div>

                    </div>

                </div>

            </div>

        </div>


@endsection
@section('scripts')

@endsection
