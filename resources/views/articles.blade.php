@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 panel panel-default">
                <div class="panel-heading">
                    {{ $article->title }}
                </div>

                <p> {{ $article->description }}</p>

                <p>Auteur: {{ $article->user->name }}</p>
            </div>
        </div>
    </div>
@endsection


