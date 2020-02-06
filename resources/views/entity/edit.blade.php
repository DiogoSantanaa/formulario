@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form</div>

                <div class="card-body">
                <form action="{{route('entity.update', $entity->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                    @include('entity.form')
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection