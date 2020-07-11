@extends('layouts.baseencuesta')

@section('content')
<script>
  addEventListener('load',inicio,false);

  function inicio()
  {
    document.getElementById('calificacion').addEventListener('change',cambioCalificacion,false);
  }

  function cambioCalificacion()
  {    
    document.getElementById('cal').innerHTML=document.getElementById('calificacion').value;
    if(document.getElementById('calificacion').value == 0)
    {
        document.getElementById('matrix').src = "/assets/assetsencuesta/img/1.png";
    }
    if(document.getElementById('calificacion').value == 1)
    {
        document.getElementById('matrix').src = "/assets/assetsencuesta/img/2.png";
    }
    if(document.getElementById('calificacion').value == 2)
    {
        document.getElementById('matrix').src = "/assets/assetsencuesta/img/3.png";
    }
    if(document.getElementById('calificacion').value == 3)
    {
        document.getElementById('matrix').src = "/assets/assetsencuesta/img/4.png";
    }
    if(document.getElementById('calificacion').value == 4)
    {
        document.getElementById('matrix').src = "/assets/assetsencuesta/img/5.png";
    }
    if(document.getElementById('calificacion').value == 5)
    {
        document.getElementById('matrix').src = "/assets/assetsencuesta/img/6.png";
    }
  }
</script>  
<div class="container">
            <div class="card">
                <div class="card-header text-md-center">¿Qué tan bien le pareció la comida?</div>

                        <div class="slidecontainer">
                        <input type="range" id="calificacion" min="0" max="5">
                            <span id="cal">3</span>
                        </div>
                        <center>
                        <img id="matrix"  src="/assets/assetsencuesta/img/4.png" width="80" height="80" margin= 20 0></a>
                        </center>
                        <br>
                        <div>
                    <br>
                    </div>
                    <div class="Button" onclick=cambioCalificacion()>    
                    <a href="../askTwo" class="btn btn-warning">Siguiente</a>
                    </div>
                    <div>
                    <br>
                    </div>
                <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <label>0%</label>
</div>
<br></br>
                </div>
            </div>
            @endsection