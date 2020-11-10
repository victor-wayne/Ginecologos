@extends('ginecologos.base')
@section('title','Contacto')
@section('seccion3')

    <section id="subintro">
        <div class="jumbotron subhead" id="overview">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="centered">
                            <h3>Página de Contacto</h3>
                            <p>
                               Aquí puedes contactarnos para mas información.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb notop">
                        <li><a href="#">Home</a><span class="divider">/</span></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside>
                        <div class="widget">
                            <h4>Puedes Contactarnos</h4>
                            <ul>

                                <li><label><strong>Email : </strong></label>
                                    <p>
                                        cgocelaya@gmail.com
                                    </p>
                                </li>
                                <li><label><strong>Dirección : </strong></label>
                                    <p>
                                        Celaya, Gto.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4>Redes Sociales</h4>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/ColegiodeGinecologiadeCelaya " title="Facebook"><i class="icon-rounded icon-32 icon-facebook"></i></a></li>
                            </ul>

                        </div>
                    </aside>
                </div>
                <div class="span8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119566.57558294137!2d-100.88619688266972!3d20.528536290971342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba641e60c675%3A0x998fd3ad9a7d2747!2sCelaya%2C%20Gto.!5e0!3m2!1ses!2smx!4v1604947360746!5m2!1ses!2smx" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

                    <div class="spacer30"></div>
                    <div class="form_contact">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>

                        {!! Form::open(['route' => 'contacto', 'method' => 'post']) !!}
                        <div class="form-group">
                            {!! Form::label('email', 'E-Mail') !!}
                            {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('body', 'Asunto') !!}
                            {!! Form::text('body', null, ['class' => 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('message', 'Mensaje') !!}
                            {!! Form::textarea('message', null, ['class' => 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection