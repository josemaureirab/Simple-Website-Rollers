@extends('layouts.baseencuesta')

@section('content')
<script>

function cambioSeleccion() {

var eleccion = document.getElementById("Selector");
document.getElementById("Texto").value = "";
}
</script> 
<div class="container">
            <div class="card ce-card">
                <div class="card-header text-md-center">¿Pregunta?</div>
                    <div class="Select">
                        <select id = "Selector" onclick="cambioSeleccion()">
                            <option value="0" style="font-size=30px;">No</option>
                            <option value="1"  style="font-size=30px;" onclick="cambioSeleccion();">Si</option>
                        </select>
                    </div>
                    <div class="TextArea">
                        <textarea id = "Texto" class="text-center">¿Donde?</textarea>
                    </div>
                    <div>
                    <br>
                    </div>
                    <div class="Button">    
                    <a href="../askFour" class="btn btn-warning">Siguiente</a>
                    </div>
                    <br></br>
                    <div>
                    <br>
                    </div>
                <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  <label>50%</label>
</div>
<br></br>
                </div> 
            </div>      
@endsection