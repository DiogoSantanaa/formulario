@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form</div>

                <div class="card-body">

                
                    <p>Name: <strong>{{$entity->name}}</strong></p>
                    <p>Social Denomionation: <strong>{{$entity->social_denomination}}</strong></p>
                    <p>NIF: <strong>{{$entity->nif}}</strong></p>
                    <p>Type Company: <strong>{{$entity->type_company}}</strong></p>

                    @if($entity->access_application == '1')
                        <p>Access Application: <strong>Sim</strong></p>
                    @else
                    <p>Access Application: <strong>Não</strong></p>
                    @endif

                    @if($entity->active == '1')
                        <p>Active: <strong>Sim</strong></p>
                    @else
                    <p>Active: <strong>Não</strong></p>
                    @endif 

                    <form action="{{route('entity.destroy', $entity->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn  btn-outline-danger">Delete</button>
                    </form>
                        



                    <!-- <p>Access Application: <strong>{{$entity->access_application}}</strong></p>
                    <p>Active: <strong>{{$entity->active}}</strong></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 