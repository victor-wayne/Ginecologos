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
                                Lorem ipsum dolor sit amet, modus salutatus honestatis ex mea. Sit cu probo putant. Nam ne impedit
                                atomorum.
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
                                <li><label><strong>Phone : </strong></label>
                                    <p>
                                        +900 888 707 123
                                    </p>
                                </li>
                                <li><label><strong>Email : </strong></label>
                                    <p>
                                        cgocelaya@gmail.com
                                    </p>
                                </li>
                                <li><label><strong>Adress : </strong></label>
                                    <p>
                                        Pasar kambing 58 Suite X.110 Peterongan Semarang, Indonesia
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4>Redes Sociales</h4>
                            <ul class="social-links">
                                <li><a href="#" title="Twitter"><i class="icon-rounded icon-32 icon-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/ColegiodeGinecologiadeCelaya " title="Facebook"><i class="icon-rounded icon-32 icon-facebook"></i></a></li>

                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="span8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

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