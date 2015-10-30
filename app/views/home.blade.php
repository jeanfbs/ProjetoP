
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Portal XYZ</title>

    <!-- Bootstrap core CSS -->
     {{HTML::style('css/bootstrap.min.css')}}
    <!-- Import Font Awesome -->
    {{HTML::style('css/font-awesome.min.css')}}
    <!-- Custom styles for this template -->
    {{HTML::style('css/offcanvas.css')}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<div class="verde"></div>
  	<div class="amarelo"></div>

  <nav class="navbar navbar-default navbar-fixed-top">

  <div class="container-fluid">
  	<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_top" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">
        <span id="logo"><center>XYZ</center></span>

        <span id="nome">Faculdade de Computação</span>
        <br>
        <span><center>MINISTÉRIO DA EDUCAÇÃO</center></span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="menu_top">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="{{url('img/br.png')}}" alt="Bandeira do Brasil" /> Português</a></li> 
        <li><a href="#"><img src="{{url('img/en.png')}}" alt="Bandeira dos Estados Unidos" /> English</a></li>
        <li><a href="#"><img src="{{url('img/es.png')}}" alt="Bandeira da Espanha" /> Español</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
      <div class="row">
        <div class="col-md-9">
          <ul class="nav navbar-nav navbar-right" id="redes">
            <li><a href="#" ><i class="fa fa-facebook-square fa-3x"></i></a></li> 
            <li><a href="#" ><i class="fa fa-twitter fa-3x"></i></a></li>
            <li><a href="#" ><i class="fa fa-google-plus fa-3x"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3" id="pesquisar">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Busque no site...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search fa-fw"></i></button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</nav><!-- /.navbar -->
    <div class="menu">
      <ul class="menu-list">
        <li><a href="#" > Contatos</a> </li>
        <li class="divider"></li>
        <li><a href="#" > Contatos</a> </li>
        <li><a href="#" > Contatos</a> </li>
        <li><a href="#" > Contatos</a> </li>
      </ul>
    </div>
    <div class="container" id="conteudo">
      <div class="row row-offcanvas row-offcanvas-right">
      	<div class="col-xs-2 col-sm-2 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Faculdade</a>
            <a href="#" class="list-group-item">Ciencia da Computação</a>
            <a href="#" class="list-group-item">Sistemas de Informação</a>
            <a href="#" class="list-group-item">Pós-Graduação</a>
            <a href="#" class="list-group-item"></a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
          
        </div><!--/.sidebar-offcanvas-->
        <div class="col-xs-8 col-sm-8" >
       	  <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-2 col-sm-2 sidebar-offcanvas" id="sidebar2">
          	<div class="alert alert-warning" role="alert">Abertas Inscrições de Processo Seletivos</div>
          	<br>
          	<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title pull-left">Noticias</h3>
			    <i class="fa fa-compress pull-right"></i>
			    <br>
			  </div>
			  <div class="panel-body">
			    Panel content
			  </div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">
			    <h3 class="panel-title pull-left">Cursos</h3>
			    <i class="fa fa-compress pull-right"></i>
			    <br>
			  </div>
			  <div class="panel-body">
			    Panel content
			  </div>
			</div>
			<div class="panel panel-warning">
			  <div class="panel-heading">
			    <h3 class="panel-title pull-left">Comunidade</h3>
			    <i class="fa fa-compress pull-right"></i>
			    <br>
			  </div>
			  <div class="panel-body">
			    Panel content
			  </div>
			</div>
			<div class="panel panel-danger">
			  <div class="panel-heading">
			    <h3 class="panel-title pull-left">Destaques</h3>
			    <i class="fa fa-compress pull-right"></i>
			    <br>
			  </div>
			  <div class="panel-body">
			    Panel content
			  </div>
			</div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{HTML::script('js/jquery.min.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/offcanvas.js')}}
    
  </body>
</html>
