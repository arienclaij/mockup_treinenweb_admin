<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Treinenweb CMS | Index </title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="assets/AdminLTE2/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/AdminLTE2/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/AdminLTE2/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/AdminLTE2/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
	      page. However, you can choose any other skin. Make sure you
	      apply the skin class to the body tag so the changes take effect. -->
	<link rel="stylesheet" href="assets/AdminLTE2/dist/css/skins/skin-yellow.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
	      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">

	    <!-- Main Header -->
	    <header class="main-header">

		<!-- Logo -->
		<a href="index.php" class="logo">
		    <!-- mini logo for sidebar mini 50x50 pixels -->
		    <span class="logo-mini"><b>TW</b></span>
		    <!-- logo for regular state and mobile devices -->
		    <span class="logo-lg"><b>Treinenweb</b> CMS</span>
		</a>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation">
		    <!-- Sidebar toggle button-->
		    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		    </a>
		    <!-- Navbar Right Menu -->
		    <div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			    <!-- User Account Menu -->
			    <li class="dropdown user user-menu">
				<!-- Menu Toggle Button -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				    <!-- The user image in the navbar-->
				    <img src="assets/AdminLTE2/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
				    <!-- hidden-xs hides the username on small devices so only the image appears. -->
				    <span class="hidden-xs">Ariën Claij</span>
				</a>
				<ul class="dropdown-menu">
				    <!-- The user image in the menu -->
				    <li class="user-header">
					<img src="assets/AdminLTE2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

					<p>
					    Ariën Claij
					    <small>Administrator</small>
					</p>
				    </li>
				    <!-- Menu Body -->
				    <!-- Menu Footer-->
				    <li class="user-footer">
					<div class="pull-left">
					    <a href="#" class="btn btn-default btn-flat">Profiel beheren</a>
					</div>
					<div class="pull-right">
					    <a href="#" class="btn btn-default btn-flat">Uitloggen</a>
					</div>
				    </li>
				</ul>
			    </li>
			    <!-- Control Sidebar Toggle Button -->
			    <li>
				<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
			    </li>
			</ul>
		    </div>
		</nav>
	    </header>
	    <!-- Left side column. contains the logo and sidebar -->
	    <aside class="main-sidebar">

		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

		    <!-- Sidebar user panel (optional)
		    <div class="user-panel">
		      <div class="pull-left image">
			<img src="assets/AdminLTE2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
		      </div>
		      <div class="pull-left info">
			<p>Alexander Pierce</p>
			--Status-- comment
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		      </div>
		    </div>-->

		    <!-- search form (Optional)
		    <form action="#" method="get" class="sidebar-form">
		      <div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search...">
			<span class="input-group-btn">
			    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
			    </button>
			  </span>
		      </div>
		    </form>
		     /.search form -->

		    <!-- Sidebar Menu -->
		    <ul class="sidebar-menu" data-widget="tree">
			<li class="header">Menu</li>
			<!-- Optionally, you can add icons to the links -->
			<!--<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>-->
			<li class="treeview">
			    <a href="#"><i class="fa fa-user"></i> <span>Over jezelf</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="#">Wijzig profiel</a></li>
				<li><a href="#">Beveiliging</a></li>
				<li><a href="#">Uitloggen</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-users"></i> <span>Gebruikers</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="#">Toevoegen</a></li>
				<li><a href="#">Overzicht</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-key"></i> <span>Rechten</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="index.php?module=rights&amp;action=add">Voeg gebruikersgroep toe</a></li>
				<li><a href="index.php?module=rights&amp;action=list">Gebruikersgroep overzicht</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-tags"></i> <span>Tags</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="#">Tags overzicht</a></li>
				<li><a href="#">Tag zoeken</a></li>
				<li><a href="#">Nieuws koppelen</a></li>
				<li><a href="#">Media koppelen</a></li>

			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-file-text"></i> <span>Paginabeheer</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="#">Toevoegen</a></li>
				<li><a href="#">Overzicht</a></li>
				<li><a href="#">Defineer index-pagina</a></li>
				<li><a href="#">Menu volgorde</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-newspaper-o "></i> <span>Nieuws</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="index.php?module=news&amp;action=add">Toevoegen</a></li>
				<li><a href="index.php?module=news&amp;action=list">Overzicht</a></li>
				<li><a href="index.php?module=news&amp;action=queue">Gepland</a></li>
				<li><a href="index.php?module=news&amp;action=external">Externe bronnen</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa fa-calendar"></i> <span>Agenda</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="#">Toevoegen</a></li>
				<li><a href="#">Overzicht</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-file-text"></i> <span>Reviews</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="#">Toevoegen</a></li>
				<li><a href="#">Overzicht</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-twitter"></i> <span>Social media</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="#">Verstuur bericht</a></li>
				<li><a href="#">Wachtrij</a></li>
				<li><a href="#">Voeg account toe</a></li>
				<li><a href="#">Beheer accounts</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-youtube"></i> <span>Video</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href="#">Toevoegen</a></li>
				<li><a href="#">Overzicht</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-video-camera"></i> <span>Webcams</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href='index.php?module=webcams&amp;action=add'>Toevoegen</a></li>
				<li><a href='index.php?module=webcams&amp;action=list'>Overzicht</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-map-marker"></i> <span>Locaties</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href='index.php?module=locations&amp;action=add'>Toevoegen</a></li>
				<li><a href='index.php?module=locations&amp;action=search'>Zoeken / beheren</a></li>
				<li><a href='index.php?module=locations&amp;action=synchronize_stations'>Synchroniseer stations</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-train"></i> <span>Vervoerders</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href='index.php?module=transportcompanies&amp;action=add'>Toevoegen</a></li>
				<li><a href='index.php?module=transportcompanies&amp;action=list'>Overzicht</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-train"></i> <span>Materieel</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href='index.php?module=vehicles&amp;action=materieel_add'>Materieel toevoegen</a></li>
				<li><a href='index.php?module=vehicles&amp;action=materieel_list'>Materieel overzicht</a></li>
				<li><a href='index.php?module=vehicles&amp;action=materieelnummers_multiedit'>Beheer materieelnummers</a></li>
				<li><a href='index.php?module=vehicles&amp;action=materieelnummers_add'>Mat.nr. ranges toevoegen</a></li>
				<li><a href='index.php?module=vehicles&amp;action=materieelnummers_category_add'>Categorie&euml;n toevoegen</a></li>
				<li><a href='index.php?module=vehicles&amp;action=materieelnummers_category_list'>Categorie&euml;n overzicht</a></li>
				<li><a href='index.php?module=vehicles&amp;action=materieelnummers_csvimport'>Import mat.nummers</a></li>
				<li><a href='index.php?module=vehicles&amp;action=materieelnummers_drglomloop'>CSV import materieelinzet</a></li>
				<li><a href='index.php?module=vehicles&amp;action=materieelnummers_inzet_koppelingen'>Materieelinzet koppelingen</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-train"></i> <span>Treinseries</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href='index.php?module=trainseries&amp;action=add'>Toevoegen</a></li>
				<li><a href='index.php?module=trainseries&amp;action=list'>Overzicht</a></li>
				<li><a href='index.php?module=trainseries&amp;action=duplicate'>Dupliceer</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-external-link"></i> <span>Extern nieuws</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href='index.php?module=external_news&amp;action=add'>Toevoegen</a></li>
				<li><a href='index.php?module=external_news&amp;action=list'>Overzicht</a></li>
				<li><a href='index.php?module=external_news&amp;action=keywords'>Keywords</a></li>
			    </ul>
			</li>
			<li class="treeview">
			    <a href="#"><i class="fa fa-cog"></i> <span>Systeem & logging</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			    </a>
			    <ul class="treeview-menu">
				<li><a href='index.php?module=system&amp;action=logging'>Admin-log</a></li>
				<li><a href='index.php?module=system&amp;action=cronlog'>Cron-log</a></li>
				<li><a href='index.php?module=system&amp;action=stats'>Statistieken</a></li>
				<li><a href='index.php?module=system&amp;action=server'>Serverconfiguratie</a></li>
				<li><a href='index.php?module=system&amp;action=upload_converter'>Upload converter</a></li>
			    </ul>
			</li>

		    </ul>
		    <!-- /.sidebar-menu -->
		</section>
		<!-- /.sidebar -->
	    </aside>

	    <!-- Content Wrapper. Contains page content -->
	    <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		    <h1>
			Page Header
			<small>Optional description</small>
		    </h1>
		    <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		    </ol>
		</section>

		<!-- Main content -->
		<section class="content container-fluid">

		    <?php
		    $allowed_pages = array('news', 'pages','rights','system');
		    if (isset($_GET['module'])) {
			if (in_array($_GET['module'], $allowed_pages)) {
			    include "modules/" . $_GET['module'] . ".php";
			} else {
			    include "modules/no_access.php";
			}
		    } else {
			include "modules/home.php";
		    }
		    ?>

		</section>
		<!-- /.content -->
	    </div>
	    <!-- /.content-wrapper -->

	    <!-- Main Footer -->
	    <footer class="main-footer">
		<!-- To the right -->
		<div class="pull-right">
		    Versie: 1.10		</div>
		<!-- Default to the left -->
		<strong>Copyright &copy; <?php date("Y"); ?> <a href="#">Treinenweb</a></strong>
	    </footer>

	    <!-- Control Sidebar -->
	    <aside class="control-sidebar control-sidebar-dark">
		<!-- Create the tabs -->
		<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
		    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
		    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
		    <!-- Home tab content -->
		    <div class="tab-pane active" id="control-sidebar-home-tab">
			<h3 class="control-sidebar-heading">Recent Activity</h3>
			<ul class="control-sidebar-menu">
			    <li>
				<a href="javascript:;">
				    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

				    <div class="menu-info">
					<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

					<p>Will be 23 on April 24th</p>
				    </div>
				</a>
			    </li>
			</ul>
			<!-- /.control-sidebar-menu -->

			<h3 class="control-sidebar-heading">Tasks Progress</h3>
			<ul class="control-sidebar-menu">
			    <li>
				<a href="javascript:;">
				    <h4 class="control-sidebar-subheading">
					Custom Template Design
					<span class="pull-right-container">
					    <span class="label label-danger pull-right">70%</span>
					</span>
				    </h4>

				    <div class="progress progress-xxs">
					<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
				    </div>
				</a>
			    </li>
			</ul>
			<!-- /.control-sidebar-menu -->

		    </div>
		    <!-- /.tab-pane -->
		    <!-- Stats tab content -->
		    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
		    <!-- /.tab-pane -->
		    <!-- Settings tab content -->
		    <div class="tab-pane" id="control-sidebar-settings-tab">
			<form method="post">
			    <h3 class="control-sidebar-heading">General Settings</h3>

			    <div class="form-group">
				<label class="control-sidebar-subheading">
				    Report panel usage
				    <input type="checkbox" class="pull-right" checked>
				</label>

				<p>
				    Some information about this general settings option
				</p>
			    </div>
			    <!-- /.form-group -->
			</form>
		    </div>
		    <!-- /.tab-pane -->
		</div>
	    </aside>
	    <!-- /.control-sidebar -->
	    <!-- Add the sidebar's background. This div must be placed
	    immediately after the control sidebar -->
	    <div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 3 -->
	<script src="assets/AdminLTE2/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/AdminLTE2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/AdminLTE2/dist/js/adminlte.min.js"></script>

	<script src="assets/AdminLTE2/bower_components/ckeditor/ckeditor.js"></script>
	<script>
	    $(function() {
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace('editor')
	    })
	</script>
	<!-- Optionally, you can add Slimscroll and FastClick plugins.
	     Both of these plugins are recommended to enhance the
	     user experience. -->
    </body>
</html>