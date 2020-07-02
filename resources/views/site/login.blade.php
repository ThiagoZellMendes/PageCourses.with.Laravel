@extends('site.Master.layoutMaster')

@section('contentMaster')


<div class="logo">
  <i class="fa fa-arrow-right" aria-hidden="true"><span></span></i>
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
          <a href="{{ route('site.home')}}#Services">Cursos</a>
        </li>
        <li class="sidebar-nav-item">
        <a href="{{ route('site.home')}}#Contact">Contato/Cadastrar</a>
        </li>
      </ul>
    </nav>
    <!-- Header Starts -->
<section id="Banner" class="content-section">
    <!--FORMULÁRIO DE LOGIN-->   
<div class="cont" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <div class="contente">      

<div id="login">
  
  @if(session('erro'))  
  <div class="alert alert-danger">
  <strong>Erro!</strong>{{session('erro')}}
  </div>
  @endif



<h1>Login</h1>
<form action="{{route('site.logar')}}"method="post">
    @csrf 
    <p> 
        <label for="nome_login">Seu E-mail</label>
    <input class="form-control" name='email'  type="email" placeholder="ex. contato@htmlecsspro.com"/>
    </p> 
    
    <p> 
        <label for="email_login">Sua Senha</label>
        <input class="form-control" name='senha' type="password" placeholder="ex. senha" /> 
    </p>

    <p> 
        <input type="submit" value="Login" /> 
    </p>
        </form>
    </div>
</section>



@endsection
