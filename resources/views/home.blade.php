@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('administração') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está Logado no Sistema') }}
                </div>


      <div class="card text-center">
                  <div class="card-header">
                 Instalação do Sanctum no Laravel 8
                </div>
                <div class="card-body">
                <a href="https://laravel.com/docs/8.x/sanctum" class="btn btn-primary">Documentação</a>
                 </div>
                    <div class="card-footer text-muted">
                </div>
                </div>

               
                <div class="card text-center">
                  <div class="card-header">
                 Artigo Construindo Autenticação com Sanctum
                </div>
                <div class="card-body">
                <a href="https://www.positronx.io/build-secure-php-rest-api-in-laravel-with-sanctum-auth/" class="btn btn-primary">Documentação</a>
                 </div>
                    <div class="card-footer text-muted">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
