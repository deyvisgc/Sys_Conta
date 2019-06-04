<!-- Modal -->
<div class="modal fade" id="ModalUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <strong><h5 style="color: black ;font-family:'Arial Black' " class="modal-title" id="exampleModalLabel">Registrar Trabajador</h5></strong></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">INICIO DE SESION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">DATOS PERSONALES</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form id="regisTraba" class="smart-form" novalidate="novalidate">
                            <!-- widget div-->
                            <div>
                                <div class="widget-body no-padding">
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label  style="color: black" > Usuario(*)</label>
                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                    <input type="text" name="Usuario"  id="Usuario" placeholder="Usuario">
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label  style="color: black" > Contraseña(*)</label>
                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                    <input type="password" name="password" id="password" placeholder="******">
                                                </label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label  style="color: black" > Foto(*)</label>
                                                <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                    <input type="file" id="foto" name="foto" >
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label  style="color: black" > Roles(*)</label>
                                                <label class="select">
                                                    <select name="rol" id="rol" aria-required="true" aria-invalid="false" class="valid">
                                                        <option value="0" selected="" disabled="">tipo seguro</option>
                                                        @foreach($roles as $ro)
                                                            <option value="{{$ro->idRol}}">{{$ro->nombre_rol}}</option>
                                                        @endforeach

                                                    </select>
                                                </label>
                                            </section>
                                        </div>


                                    </fieldset>


                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form id="regisTraba" class="smart-form" novalidate="novalidate">
                        <!-- widget div-->

                        <div>
                            <div class="widget-body no-padding">
                                <fieldset>
                                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                <input type="text" id="nombre_Per" name="nombre_Per" placeholder="Nombre">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                <input type="text" id="Apellido" name="Apellido" placeholder="Apellido">
                                            </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                <input type="text" id="dni" name="dni" placeholder="DNI">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fas fa-address-card"></i>
                                                <input type="text" id="car_extran" name="car_extran" placeholder="CARNE EXTRANJERIA">
                                            </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-share-square"></i>
                                                <input type="text" id="direccion" name="direccion" placeholder="Direccion">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend far fa-credit-card	"></i>
                                                <input type="number" id="n_cuenta" name="n_cuenta" placeholder="Numero de Cuenta">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                <input type="Correo" id="Correo" name="Correo" placeholder="E-mail">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                <input type="tel" id="phone" name="phone" placeholder="Celular" data-mask="(999) 999-9999">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                <input type="text" id="estado" value="ACTIVO" name="estado"  readonly>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="date"  name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Expected finish date" class="hasDatepicker valid" aria-invalid="false">
                                            </label>
                                        </section>
                                    </div>

                                </fieldset>



                                <footer>
                                    <button type="button" id="RegistrarUsuario" class="btn btn-success">Registrar</button>
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
    </div>
</div>

<div class="modal fade" id="ModalTrabajador1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <strong><h5 style="color: black ;font-family:'Arial Black' " class="modal-title" id="exampleModalLabel">ACTUALZIAR DATOS DEL TRABAJADOR</h5></strong></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>

        </div>

    </div>
</div>
