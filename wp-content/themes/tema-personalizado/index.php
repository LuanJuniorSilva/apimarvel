<?php get_header(); ?>
<header class="header">
	<img class="img-responsive" src="<?php echo bloginfo("template_url"); ?>/images/marvel.jpg" alt="">
</header>
<nav class="navbar navbar-default">
  <div class="container center-block">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Página Inicial <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Página de Contato</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Novidades<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Novidade 1</a></li>
            <li><a href="#">Novidade 2</a></li>
          </ul>
        </li>
        <li><a href="#">Sobre</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Digite sua busca ...">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<h1>Lista de Posts - INDEX</h1>

<div class="clearfix"></div>
<div id="resp" class="container">

</div>
<div class="clearfix"></div>

<?php get_footer(); ?>