<!-- <!DOCTYPE html>
<html>
<title><?php echo $title;?></title>

<head>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets').'/';?>img/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url('assets').'/';?>bower_components/Materialize/dist/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('assets').'/';?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets').'/';?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets').'/';?>css/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets').'/';?>css/linearfonts.css">

    <script src="<?php echo base_url('assets').'/';?>bower_components/jquery/dist/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="<?php echo base_url('assets').'/';?>bower_components/Materialize/dist/js/materialize.min.js"></script>
    <script src="<?php echo base_url('assets').'/';?>js/chintantable.js"></script>
    <script src="<?php echo base_url('assets').'/';?>js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url('assets').'/';?>tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url('assets').'/';?>js/formInit.js"></script>
	 <link href="<?php echo base_url('assets').'/';?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets').'/';?>css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets').'/';?>css/style.css" rel="stylesheet" type="text/css">

  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

	<header>
			<nav class="blue darken-4">
			<?php   $menus = $this->menu_model->viewmenus(); 	  ?>
			<?php   $ProjectTitle = $this->menu_model->getProjectTitle(); 	  ?>
			<ul id="slide-out" class="side-nav fixed">
			<li class="sub-menu logo">
                    		<?php   if($ProjectTitle->name !="") 	{ ?>
						<a id="logo-container" href="<?php echo site_url(); ?>" class="align-center blue-text text-darken-4" style="font-size: 28px;">
                           
                            <span style="font-weight: 400;"><?php echo $ProjectTitle->name ?></span>
						</a>
						<?php }
                    else if($ProjectTitle->logo !=""){
                    ?>
                    <div class="logo">
							<img src="<?php echo base_url('uploads').'/'.$ProjectTitle->logo; ?>" width="40" style="margin-top: 15px;-left: 15px; margin-right: 5px;">
						</div>
						
						<?php }?>

                    </li>
                    <?php
				foreach($menus as $row)
				{
					$pieces = explode("/", $row->url);
					$page2="";
					if(empty($pieces) || !isset($pieces[1]))
					{
						$page2="";
					}
					else
						$page2=$pieces[1];
					$submenus = $this->menu_model->getsubmenus($row->id);
					?>
                        <li class="<?php if($page==$page2 || $page == strtolower($row->name)) { echo 'active'; } //echo $page2;
					if(count($submenus > 0))
					{
						$pages =  $this->menu_model->getpages($row->id);
				
						echo ' sub-menu';
						if(in_array($page, $pages,TRUE))
							echo ' active';
					}
					?> ">
                            <a class="waves-effect waves-default" href="<?php
						if($row->url == " ")
							echo "javascript:; ";
						else if($row->linktype == 1) echo site_url($row->url);
						else if($row->linktype == 2) echo base_url($row->url);
						else if($row->linktype == 3) echo ($row->url);
						?>" <?php if($row->linktype == 3) echo ""; ?>>
							<?php
							if($row->icon != "")
							{  ?>
								<i class="<?php echo $row->icon; ?>"></i>
					<?php	}
							?>
							<span><?php echo $row->name;  ?></span>
							<span class="arrow"></span>
						</a>
                            <?php
						if(count($submenus) > 0)
						{  ?>
                                <ul class="sub">
                                    <?php
								foreach($submenus as $row2)
								{
									$pieces2 = explode("/", $row2->url);

									if(empty($pieces2) || !isset($pieces2[1]))
									{
										$page3="";
									}
									else
										$page3=$pieces2[1];
									?>
                                    <li class="<?php if($page==$page3 || $page == strtolower($row2->name))  ?> nopadding">
                                            <a class="waves-effect waves-default" href="<?php
											if($row2->url == " ")
												echo "javascript:; ";
											else if($row2->linktype == 1) echo site_url($row2->url);
											else if($row2->linktype == 2) echo base_url($row2->url);
											else if($row2->linktype == 3) echo ($row2->url);
										?>">
                                                <?php
											if($row2->icon != "")
											{  ?>
                                                    <i class="<?php echo $row2->icon; ?>" <?php if($row2->linktype == 3) echo ""; ?>></i>
                                                    <?php	}
											?>
                                                        <?php echo $row2->name;  ?>
                                            </a>
                                    </li>
										<?php	
								}?>
                                </ul>
								<?php	
						}
						?>
                        </li>
                        <?php }
				?>
                </ul>

                <div class="row">
                    <div class="col s6">
                        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                    <div class="col s6 offset-l6 m6 l6 search">
                        <a href="<?php echo site_url('login/logout'); ?>" class="waves-effect waves-light btn red" style="float:right; margin: 7px 0 0;"><i class="material-icons left" style="line-height: 38px;">power_settings_new</i> Logout</a>
                    </div>
                </div>
        </nav>


    </header>
    <main> -->

	<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?php echo $title;?></title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url('assets').'/';?>images/faviicon.png">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets').'/';?>plugins/morris/morris.css">

    <link href="<?php echo base_url('assets').'/';?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets').'/';?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets').'/';?>css/style.css" rel="stylesheet" type="text/css">
	<!-- DataTables -->
	<link href="<?php echo base_url('assets').'/';?>plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets').'/';?>plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url('assets').'/';?>plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">
	<?php   $menus = $this->menu_model->viewmenus(); 	  ?>
			<?php   $ProjectTitle = $this->menu_model->getProjectTitle(); 	  ?>
      <!-- ========== Left Sidebar Start ========== -->
	  <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
					<?php   if($ProjectTitle->name !="") 	{ ?>
						<a  href="<?php echo site_url(); ?>">
							<h4 class="font-16 text-white"><?php echo $ProjectTitle->name ?></h4>
						</a>
						<?php }
                    else if($ProjectTitle->logo !=""){
                    ?>
                  <a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo base_url('uploads').'/'.$ProjectTitle->logo; ?>" height="33" alt="logo"></a>
						<?php }?>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div class="user-details">
                    <div class="text-center">
                        <img src="<?php echo base_url('assets').'/';?>images/users/avatar-6.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="user-info">
                            <h4 class="font-16 text-white">Elena Retson</h4>
                            <span class="text-white"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                    </div>
                </div>

            <div id="sidebar-menu">
                <ul>

                        <!-- <li>
                            <a href="index.html" class="waves-effect">
                                <i class="ti-home"></i>
                                <span> Dashboard <span class="badge badge-primary pull-right">3</span></span>
                            </a>
                        </li> -->
						

						<?php
				foreach($menus as $row)
				{
					$pieces = explode("/", $row->url);
					$page2="";
					if(empty($pieces) || !isset($pieces[1]))
					{
						$page2="";
					}
					else
						$page2=$pieces[1];
					$submenus = $this->menu_model->getsubmenus($row->id);
					?>
                        <li class="<?php if($page==$page2 || $page == strtolower($row->name)) { echo 'active'; } //echo $page2;
					if(count($submenus > 0))
					{
						$pages =  $this->menu_model->getpages($row->id);
				
						echo ' sub-menu';
						if(in_array($page, $pages,TRUE))
							echo ' active';
					}
					?> ">
                            <a class="waves-effect" href="<?php
						if($row->url == " ")
							echo "javascript:; ";
						else if($row->linktype == 1) echo site_url($row->url);
						else if($row->linktype == 2) echo base_url($row->url);
						else if($row->linktype == 3) echo ($row->url);
						?>" <?php if($row->linktype == 3) echo ""; ?>>
							<?php
							if($row->icon != "")
							{  ?>
								<i class="<?php echo $row->icon; ?>"></i>
					<?php	}
							?>
							<span><?php echo $row->name;  ?></span>
							<!-- <span class="arrow"></span> -->
						</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>
		<!-- Left Sidebar End -->
			
			 <!-- Start right Content here -->

			 <div class="content-page">
				<!-- Start content -->
				<div class="content">

					<!-- Top Bar Start -->
							<div class="topbar">

									<nav class="navbar-custom">

										<ul class="list-inline float-right mb-0">
											<li class="list-inline-item dropdown notification-list">
												<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
													<i class="mdi mdi-email-outline noti-icon"></i>
													<span class="badge badge-danger noti-icon-badge">5</span>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
													<!-- item-->
													<div class="dropdown-item noti-title">
														<h5><span class="badge badge-danger float-right">745</span>Messages</h5>
													</div>

													<!-- item-->
													<a href="javascript:void(0);" class="dropdown-item notify-item">
														<div class="notify-icon"><img src="<?php echo base_url('assets').'/';?>images/users/user-5.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
														<p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
													</a>

													<!-- item-->
													<a href="javascript:void(0);" class="dropdown-item notify-item">
														<div class="notify-icon"><img src="<?php echo base_url('assets').'/';?>images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
														<p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
													</a>

													<!-- item-->
													<a href="javascript:void(0);" class="dropdown-item notify-item">
														<div class="notify-icon"><img src="<?php echo base_url('assets').'/';?>images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
														<p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
													</a>

													<!-- All-->
													<a href="javascript:void(0);" class="dropdown-item notify-item">
															View All
														</a>

												</div>
											</li>

											<li class="list-inline-item dropdown notification-list">
												<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
													<i class="mdi mdi-bell-outline noti-icon"></i>
													<span class="badge badge-success noti-icon-badge">3</span>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
													<!-- item-->
													<div class="dropdown-item noti-title">
														<h5><span class="badge badge-danger float-right">87</span>Notification</h5>
													</div>

													<!-- item-->
													<a href="javascript:void(0);" class="dropdown-item notify-item">
														<div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
														<p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
													</a>

													<!-- item-->
													<a href="javascript:void(0);" class="dropdown-item notify-item">
														<div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
														<p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
													</a>

													<!-- item-->
													<a href="javascript:void(0);" class="dropdown-item notify-item">
														<div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
														<p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
													</a>

													<!-- All-->
													<a href="javascript:void(0);" class="dropdown-item notify-item">
															View All
														</a>

												</div>
											</li>

											<li class="list-inline-item dropdown notification-list">
												<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
													<img src="<?php echo base_url('assets').'/';?>images/users/user-5.jpg" alt="user" class="rounded-circle">
												</a>
												<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
													<a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
													<a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
													<a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
													<a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
												</div>
											</li>

										</ul>

										<ul class="list-inline menu-left mb-0">
											<li class="list-inline-item">
												<button type="button" class="button-menu-mobile open-left waves-effect">
													<i class="ion-navicon"></i>
												</button>
											</li>
											<li class="hide-phone list-inline-item app-search">
												<!-- <h3 class="page-title">Dashboard</h3> -->
											</li>
										</ul>

										<div class="clearfix"></div>

									</nav>

							</div>
					<!-- Top Bar End -->
						<div class="page-content-wrapper ">

							<div class="container-fluid">
