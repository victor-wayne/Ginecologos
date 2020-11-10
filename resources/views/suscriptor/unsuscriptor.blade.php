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
                <p>El Colegio de Ginecologia y Obstetricia de Celaya, te da la mas coordial bienvenida<br>

                  Suscribite al mejor contenido, con mas de 100 horas de video, mas de 50 manuales y cientos de tutoriales.
                </p>
              </div>
              <div class="span4">
                <div class="project-widget">
                  <h4><i class="icon-48 icon-group"></i></i><span style="color:#d98880;"><strong>Suscripción</strong></span></h4><br>
                  <ul class="project-detail">
                    <li><label>Proyecto :</label> Video Cursos Interactivos</li>
                    <li><label>Categoria :</label> Ginecologia y Obstetricia</li>
                    <li><label>Beneficios :</label> Acceso a Contenido Exclusivo</li>
                    <li><label>Nombre: </label>{{ Auth::user()->name }}</li>
                    <li><label>Email: </label> {{ Auth::user()->email }}</li>
                    <li><label>Precio :</label> <span style="color: #2980b9;font-weight:bold;">$3000.00 MXN</span></li>
                    <h4 align="center">Paga Aqui</h4><br>
                    <li style="text-align: center;">

                        <a href="{{ url('/suscriptor/paypal/pay') }}">
                            <img src="assets/img/paypal_ic.png" alt="Paypal" width="70px" height="70px" />
                        </a>
                    </li>
                    <li><span style="font-size: 10px;">*Aplica<span style="color:#239b56;">Terminos y Condiciones</span></span></li>
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
