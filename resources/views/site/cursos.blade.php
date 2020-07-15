@extends('site.Master.layoutMaster')

@section('contentMaster')

<div class="logo">
<i class="fa fa-arrow-right" aria-hidden="true">
  <span>Escolha o seu curso: {{session('nome')}}</span></i>
</div>
<a class="menu-toggle rounded" href="#">
  <i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <li class="sidebar-brand">
      <a class="smooth-scroll" href="#Header"></a>
    </li>
    <li class="sidebar-nav-item">
    <a href="{{ route('site.home')}}">Home</a>
    <li class="sidebar-nav-item">
      <a href="{{ route('site.home')}}#About">Sobre</a>
    </li>
    <li class="sidebar-nav-item">
    <a href="{{ route('site.home')}}#Contact">Contato/Cadastrar</a>
    </li>
    <li class="sidebar-nav-item">
      <a href="{{ route('site.logout')}}">Logout</a>
      </li>
  </ul>
</nav>

<section id="Banner" class="content-section">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Linguagem PHP<span class="text-muted">Progração</span></h2>
        <p class="lead">Aprenda as principais forma de programas com essa linguagem, e muito mais!</p>
        <a class="btn btn-primary btn-xl" href="{{route('site.login')}}">Ir para o curso</a>
      </div>
      <div class="col-md-5 order-md-1">
        <figure>
          <img src="{{url('img/php-logo-w.png')}}" alt="Curso PHP">
        </figure>

      </div>
    </div>
</section> 

    <hr class="featurette-divider">

<section id="Banner" class="content-section">
    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">POSTGRESS<span class="text-muted">Banco de dados.</span></h2>
        <p class="lead">Se tranforme em ninja e manipulação de banco de dados com essa ferramenta!.</p>
        <a class="btn btn-primary btn-xl" href="{{route('site.login')}}">Ir para o curso</a>
      </div>
    <div class="col-md-5 order-md-1">
      <figure>
        <img src="{{url('img/maxresdefault.jpg')}}" alt="Curso PHP">
      </figure>

    </div>
    </div>
</section> 

    <hr class="featurette-divider">

<section id="Banner" class="content-section">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Redes de computadores<span class="text-muted">Infraestrutura</span></h2>
        <p class="lead">Crie todos tipos de redes e aprenda como gerenciar todas as maquinas de sua rede.</p>
        <a class="btn btn-primary btn-xl" href="{{route('site.login')}}">Ir para o curso</a>
      </div>
    <div class="col-md-5 order-md-1">
      <figure>
        <img src="{{url('img/REDES.png')}}" alt="Curso PHP">
      </figure>

    </div>
    </div>
</section>

      <hr class="featurette-divider">

<section id="Banner" class="content-section">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Segurança da Informação<span class="text-muted">Segurança</span></h2>
        <p class="lead">Nesse curso você apredenderar as principais tecnicas para manter seus dandos em seguraça.</p>
        <a class="btn btn-primary btn-xl" href="{{route('site.login')}}">Ir para o curso</a>
      </div>
    <div class="col-md-5 order-md-1">
      <figure>
        <img src="{{url('img/seguranca.jpg')}}" alt="Curso PHP">
      </figure>


    </div>
    </div>
</section> 

@endsection
