
<form>
                    <h1>Formulario de Registro</h1>
                    <div class="row justify-content-center">
                        <div class="col-sm-7 border border-primary p-4">
                            <div class="form-group">
                                <label  class="col-label-sm">Usuario:</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Username" required />
                            </div>
                            <div class="form-group">
                                <label class="col-label-sm">Email:</label>
                                <input type="email" class="form-control form-control-sm" placeholder="Username" required/>
                              </div>
                              <div class="form-group">
                                <label class="col-label-sm">Contraseña:</label>
                                <input type="password" class="form-control form-control-sm" placeholder="Username" required />
                              </div>
                              <!--form-check para indicar estados marcados o indeterminados.-->
                              <!--Agrupe casillas de verificación o radios en la misma fila horizontal agregando .form-check-inlinea cualquier archivo .form-check.-->
                              <div class="form-check form-check-inline ml-4">
                                <input type="radio" name="sexo" class="form-check-input" value="h" />
                                <label class="form-check-label">Hombre</label>
                              </div>
                              <div class="form-check form-check-inline ml-4">
                                <input type="radio" name="sexo" class="form-check-input" value="m" />
                                <label class="form-check-label">Mujer</label>
                              </div>
                              <div class="form-group">
                                <label class="col-label-sm">Seleccionar foto de perfil:</label>
                                <input type="file" class="form-control-file" />
                              </div>
                              <div class="text-right mb-3">
                                <input type="submit" value="Registrar" class="btn  btn-primary" />
                            </div>
                        </div>
                    </div>
                    </form>