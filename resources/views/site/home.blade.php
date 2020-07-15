@extends('site.Master.layoutMaster')

@section('contentMaster')

<div class="logo">
<i class="fa fa-home" aria-hidden="true"><span>Bem Vindo:</span></i>
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
        <a class="smooth-scroll" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#About">Sobre</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Services">Cursos</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Contact">Contato/Cadastrar</a>
      </li>
    </ul>
  </nav>
  <!-- Header Starts -->
  <section id="Banner" class="content-section">
    <div class="container content-wrap text-center">
      <h1>TEC FÁCIL CURSOS</h1>
      <h3>
          <em>Olá, aqui você vai encontrar curso sobre tecnologia de maneira rapida e pratica!</em>
        </h3>
      <a class="btn btn-primary btn-xl" href="{{route('site.login')}}">Login</a>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- Header Ends -->
  <!-- About Us Starts -->
  <section id="About" class="content-section">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <div class="block-heading">
            <h2>Sobre Nós</h2>
          </div>
          <p class="lead">O maior foco é disponibilizarmos cursos totalmente gratis de forma rapida e pratica!
            com professores totalmente treinados em determinada tecnologia!</p>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- About Us Starts -->
  <section id="Services" class="content-section text-center">
    <div class="container">
      <div class="block-heading">
        <h2>O que oferecemos</h2>
        <p>Segue a lista de nossos principais nichos</p>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon yellow">
              <div class="front-content">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <h3>infraestrutura</h3>
              </div>
            </div>
            <div class="service-content">
              <h3>infraestrutura</h3>
              <p>Aqui você aprenderar como montar uma instrutura de TI, com todos os requisitos necessarios para a mesma.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon orange">
              <div class="front-content">
                <i class="fa fa-suitcase"></i>
                <h3>Segurança da Informação</h3>
              </div>
            </div>
            <div class="service-content">
              <h3>Segurança da Informação</h3>
              <p>Nesse curso você apredenderar as principais tecnicas para manter seus dandos em seguraça.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box ">
            <div class="service-icon red">
              <div class="front-content">
                <i class="fa fa-male" aria-hidden="true"></i>
                <h3>Banco de dados</h3>
              </div>
            </div>
            <div class="service-content">
              <h3>Banco de dados</h3>
              <p>Aqui você aprenderar umas das areas mais importantes da tecnologia atual, como instalar, configurar e administrar os data centers </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon grey">
              <div class="front-content">
                <i class="fa fa-users"></i>
                <h3>Programação</h3>
              </div>
            </div>
            <div class="service-content">
              <h3>Programação</h3>
              <p>A programação é um campo de atuação voltado para o desenvolvimento de softwares que são utilizados por empresas, pessoas, portais eletrônicos e sites, e também para a manutenção desses produtos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
  </section>
  <section id="Contact" class="content-section">
    <div class="container">
      <div class="block-heading">
        <h2>Faça sua Incrição</h2>
        <p>Cadastre-se e faça seu teste gratis por 10 dias</p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="contact-wrapper">
            <div class="address-block border-bottom">
              <h3 class="add-title">Nosso contato</h3>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="c-info">&nbsp;Rua jack - Maceió/AL. CEP 57014-000</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="c-info">(82) 98745-6541</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="c-info">jackmon@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="form-wrap">
            <form action="{{route('site.cadastrar')}}" method="post"> 
              @csrf             
              <div class="fname floating-label">
                <input type="text" class="form-control" name="nome" />
                <label for="nome">Nome Completo</label>
              </div>
              <div class="email floating-label">
                <input type="email" class="form-control" name="email" />
                <label for="email">Email</label>
              </div>
              <div class="contact floating-label">
                <input type=password class="form-control" name="senha" />
                <label for="senha">Senha</label>
              </div>
              <div class="company floating-label">
                <input type="password" class="form-control" name="repsenha" />
                <label for="senha">Repetir Senha</label>
              </div>
              <div class="submit-btn">
                <button type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
  </script>
  <script>
      (function () {
          window.onload = function () {
            localStorage.removeItem('blipSdkUAccount');
              new BlipChat()
              .withAppKey('Y3Vyc29mYWNpbGNoYXQ6NWFmZWYzY2QtMjZhNy00ODk2LWEzM2YtZTNhYWY2MTEyN2Jk')
              .withButton({"color":"#2CC3D5","icon":""})
              .withCustomCommonUrl('https://chat.blip.ai/')
              .build();
          }
      })();
  </script>
    
@endsection