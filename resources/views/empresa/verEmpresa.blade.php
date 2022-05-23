@extends('empresa.plantilla')
@section('titulo')
    Ver Empresa
@endsection
@section('contenido')
    <p>Nombre: {{ $empresa[0]->nombreComercial }}</p>
    <p>CIF: {{ $empresa[0]->cif }}</p>
    <p>Tipo: {{ $empresa[0]->tipo }}</p>
    <p>Teléfono: {{ $empresa[0]->telefono }}</p>
    <p>Email: {{ $empresa[0]->email }}</p>
    <p>Web: {{ $empresa[0]->web }}</p>
    <p>Actividad: {{ $empresa[0]->actividad }}</p>
    <p>Horario: {{ $empresa[0]->horario }}</p>
    <p>Observaciones: {{ $empresa[0]->observaciones }}</p>
@endsection
