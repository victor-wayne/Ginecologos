  <section id="maincontent">
    <div class="container" style="border: 0px solid;">
      <div class="row">
        <div class="span12">
          <article>
            <div class="heading">
              <h4 style="color:#239b56;">Colegio de Ginecologia y Obstetricia de Celaya S.A de C.V</h4>
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span8">
                <!-- start flexslider -->
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="{{ asset('assets/img/slides/sequence/banner-ginecologos2.jpeg') }}" alt="" />
                      </li>
                      <li>
                      <img src="{{ asset('assets/img/slides/sequence/banner-ginecologos.jpeg') }}" alt="" />
                      </li>
                      <li>
                      <img src="{{ asset('assets/img/slides/sequence/banner-ginecologos1.jpeg') }}" alt="" />
                      </li>
                  </ul>
                </div>
                <!-- end flexslider -->

              </div>
              <div class="span4">
                <div class="project-widget">
                  <h4><i class="icon-48 icon-group"></i></i><span style="color:#d98880;"><strong>Suscripción</strong></span></h4><br>
                  <br>
                  <ul style="list-style-type: none; color:#5f6a6a ;">
                    <li><span style="color: #239b56;"><strong>Proyecto :</strong></span> Video Cursos Interactivos</li>
                    <li><span style="color: #239b56;"><strong>Categoría :</strong></span> Ginecología y Obstetricía</li>
                    <li><span style="color: #239b56;"><strong>Suscriptor: </strong></span>{{ Auth::user()->name }}</li>
                    <li><span style="color: #239b56;"><strong>Email: </strong></span> {{ Auth::user()->email }}</li>
                    <li><span style="color: #239b56;"><strong>Beneficios :</strong></span>
                        <ul style="list-style-type: square">
                          <li>Sesiones mensuales de actualización médica continua</li>
                          <li>Conferencias Femecog</li>
                          <li>Obtención de Puntaje Anual para Recertificación por pertenecer a la Federación através de nuestro Colegio</li>
                          <li>Asesoría legal</li>
                          <li>Costo preferente al inscribirse a UpToDate</li>
                          <li>Costo de ingreso y anual preferencial en asociaciones internacionales como elColegio americano de ginecología y obstetricia (ACOG), FIGO, FLASOG, RCOG,etc.</li>
                          <li>Y mucho más!</li>
                        </ul>
                    </li>                    
                    <li>&nbsp;</li>
                    <li><span style="color: #239b56;"><strong>Precio: </strong></span> <span style="font-weight:bold;">$3000.00 MXN</span></li>
                    <li style="text-align: center;">

                        <a href="{{ url('/suscriptor/paypal/pay') }}">
                            <img src="assets/img/paypal_ic.png" alt="Paypal" width="70px" height="70px" />
                        </a>
                    </li>
                    <li><a href="#"><span style="font-size: 10px;">*Aplica<span style="color:#239b56;">Terminos y Condiciones</span></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- end article full post -->
        </div>
      </div>
    </div>
</section>
