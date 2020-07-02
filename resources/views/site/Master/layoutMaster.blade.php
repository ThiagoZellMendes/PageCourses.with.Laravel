<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso rapidos</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Stylesheet" href="{{url('css/style.css')}}">
    <link rel="Stylesheet" href="{{url('css/custom-responsive-styles.css')}}">
    <link rel="Stylesheet" href="{{url('css/loginstyle.css')}}">
    <link rel="Stylesheet" href="{{url('css/cursostyle.css')}}">

    <script type="text/javascript" src="{{url('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/all-plugins.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins-activate.js')}}"></script>
</head>

<body id="page-top">

  @yield('contentMaster')
    
<footer class="footer text-center">
  <div class="container">
    <ul class="list-inline">
      <li class="list-inline-item">
        <a class="social-link rounded-circle text-white mr-3" href="javascript:void(0)">
        <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
        <a class="social-link rounded-circle text-white mr-3" href="javascript:void(0)">
        <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
        <a class="social-link rounded-circle text-white" href="javascript:void(0)">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
        <p class="text-muted small mb-0">Copyright © {{ date('Y')}}</p>
        <p class="text-muted small mb-0">Designed by Thiago Mendes</p>
      </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>