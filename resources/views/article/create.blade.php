@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            @include('article.partials.errors')

            <div class="col-xs-12 panel">
                <div class="panel-heading">Créer un nouvel article</div>

                @include('article.partials.form', ['item' => $task])
            </div>
        </div>
    </div>

@endsection