@extends('layouts.baseencuesta')

@section('content')

<div class="container">
            <div class="card">
                <div class="card-header text-md-center">¿Le gustaría hacer alguna recomendación?</div>
                    <div class="Select">
                        <select>
                            <option value="de_DE-test">Felicitación</option>
                            <option value="en_US-test">Reclamo</option>
                            <option value="en_US-test">Sugerencia</option>
                        </select>
                    </div>
                    <div class="TextArea">
                        <textarea></textarea>
                    </div>
                    <div>
                    <br>
                    </div>
                    <div class="Button">    
                    <a href="../tranks" class="btn btn-warning">Enviar</a>
                    </div>
                    <br></br>
                    <div>
                    <br>
                    </div>
                <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  <label>100%</label>
</div>
<br></br>
                </div>
            </div>
@endsection