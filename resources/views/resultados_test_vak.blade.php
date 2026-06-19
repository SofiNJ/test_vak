@extends('layout.app')

@section('contenido')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<style>
    body {
        background: #BEEBE3;
        background: radial-gradient(circle,rgba(190, 235, 227, 1) 0%, rgba(115, 158, 175, 1) 54%, rgba(32, 72, 117, 1) 100%);!important;
    }
    
    .resultados-vak {
        font-family: 'Bricolage Grotesque', sans-serif;
    }

    .tarjeta-blanca {
        background: white; 
        padding: 40px; 
        border-radius: 12px; 
        box-shadow: 0 4px 6px rgba(21, 54, 18, 0.2); 
        border: 1px solid #e5e7eb;
    }

    .estilo-destacado {
        color:  #ff83c3;
        font-weight: 800;
        font-size: 32px;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .barra-progreso-contenedor {
        background-color: #f3f4f6;
        border-radius: 8px;
        height: 24px;
        width: 100%;
        overflow: hidden;
        margin-bottom: 8px;
    }

    .barra-progreso-llenado {
        background-color: #325674;
        height: 100%;
        border-radius: 8px;
        transition: width 1s ease-in-out;
    }

    .etiqueta-porcentaje {
        font-weight: bold;
        color: #3f4f73;
        font-size: 15px;
    }
</style>

<div class="resultados-vak" style="max-width: 700px; margin: 0 auto; padding: 40px 20px;">
    
    <div class="tarjeta-blanca text-center">
        
        <h2 style="color: #091c57; font-size: 20px; font-weight: bold; margin-bottom: 5px;">
            Tu Estilo de Aprendizaje Predominante es:
        </h2>
        
        <h1 class="estilo-destacado">
            {{ $datos['ganador'] }}
        </h1>

        <hr style="border-color: #e5e7eb; margin: 30px 0;">

        <h3 class="text-start" style="color: #091c57; font-size: 18px; font-weight: bold; margin-bottom: 20px;">
            Desglose de Probabilidades / Porcentajes:
        </h3>

        <div class="mb-4 text-start">
            <div class="d-flex justify-content-between mb-1">
                <span class="etiqueta-porcentaje">Canal Visual</span>
                <span class="etiqueta-porcentaje">{{ $datos['porcentaje_v'] }}%</span>
            </div>
            <div class="barra-progreso-contenedor">
                <div class="barra-progreso-llenado" style="width: {{ $datos['porcentaje_v'] }}%; background-color: #fca5c8;"></div>
            </div>
        </div>

        <div class="mb-4 text-start">
            <div class="d-flex justify-content-between mb-1">
                <span class="etiqueta-porcentaje">Canal Auditivo</span>
                <span class="etiqueta-porcentaje">{{ $datos['porcentaje_a'] }}%</span>
            </div>
            <div class="barra-progreso-contenedor">
                <div class="barra-progreso-llenado" style="width: {{ $datos['porcentaje_a'] }}%; background-color: #ff98c1;"></div>
            </div>
        </div>

        <div class="mb-5 text-start">
            <div class="d-flex justify-content-between mb-1">
                <span class="etiqueta-porcentaje">Canal Kinestésico</span>
                <span class="etiqueta-porcentaje">{{ $datos['porcentaje_k'] }}%</span>
            </div>
            <div class="barra-progreso-contenedor">
                <div class="barra-progreso-llenado" style="width: {{ $datos['porcentaje_k'] }}%; background-color: #ff8dbb;"></div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('testvak.mostrar') }}" style="background-color: #ff9bc8; color: white; padding: 12px 30px; text-decoration: none; border-radius: 6px; font-weight: bold; display: inline-block; font-size: 15px; transition: background 0.2s;">
                Volver a realizar el Test
            </a>
        </div>

    </div>
</div>
@endsection