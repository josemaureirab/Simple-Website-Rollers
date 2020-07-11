@extends('layouts.base')

@section('content')
<div class="main app form" id="main" style="background:url({{ asset('images/header-bg.jpeg') }}) !important; background-size: cover !important;"><!-- Main Section-->
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card auth-card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('send/email') }}">
                            @csrf

                            @if(Session::has("success"))
                                <div class="alert alert-success">
                                    <b>Successfull</b>, your email has been sent.
                                </div>
                            @endif

                            <div class="form-group row">
                                <label 
                                for="name"
                                class="col-sm-4 col-form-label text-md-right">
                                    Name
                                </label>

                                <div class="col-md-6">
                                    <input 
                                    id="name"
                                    name="name"
                                    type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                    value="{{ old('name') }}"
                                    placeholder="Nombre" 
                                    autofocus
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label 
                                for="email"
                                class="col-sm-4 col-form-label text-md-right">
                                    Email
                                </label>

                                <div class="col-md-6">
                                    <input 
                                    id="email"
                                    name="email"
                                    type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                    value="{{ old('email') }}" 
                                    placeholder="Correo" 
                                    autofocus
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label 
                                for="subject"
                                class="col-sm-4 col-form-label text-md-right">
                                    Subject
                                </label>

                                <div class="col-md-6">
                                    <input 
                                    id="subject"
                                    name="subject"
                                    type="text"
                                    class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" 
                                    value="{{ old('subject') }}" 
                                    placeholder="Asunto" 
                                    autofocus
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label 
                                for="message"
                                class="col-sm-4 col-form-label text-md-right">
                                    Message
                                </label>

                                <div class="col-md-6">
                                    <textarea 
                                    id="message"
                                    name="message"
                                    class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" 
                                    cols="30" 
                                    rows="5"
                                    placeholder="Mensaje"
                                    ></textarea>
                                </div>
                            </div>
                            

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Send Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
@endsection
