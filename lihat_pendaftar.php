<?php include "ini.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="robots" content="noindex, nofollow">

    <title>Admin Page LCC 2014</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/other_images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- owl carousel css -->
    <link href="assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <!-- intro animations -->
    <link href="assets/js/wow/animate.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- lightbox -->
    <link href="assets/js/lightbox/css/lightbox.css" rel="stylesheet">

    <!-- styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- place your extra custom styles in this file -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="background-image-overlay"></div>

    <div id="outer-background-container" data-default-background-img="assets/images/other_images/bg5.jpg" style="background-image:url(assets/images/other_images/bg5.jpg);"></div>
    <!-- end: #outer-background-container -->    

    <!-- Outer Container -->
    <div id="outer-container">

      <!-- Left Sidebar -->
      <section id="left-sidebar">
        
        <div class="logo">
          <a href="#intro" class="link-scroll">
					<img src="assets/images/other_images/logo.png" alt="LCC 2014"></a>
        </div><!-- .logo -->

        <!-- Menu Icon for smaller viewports -->
        <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>

        <ul id="main-menu">
          <li id="menu-item-text" class="menu-item scroll"><a href="#text">Info Pendaftar</a></li>
          <li id="menu-item-contact" class="menu-item scroll"><a href="#contact">Data Pendaftar</a></li>
          <li id="menu-item-contact" class="menu-item scroll"><a href="#axquired">Need help</a></li>
        </ul><!-- #main-menu -->

      </section><!-- #left-sidebar -->
      <!-- end: Left Sidebar -->

      <section id="main-content" class="clearfix">
        
        <article id="intro" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg2.jpg">
          <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-sm-10 col-md-9 pull-right">

                <section class="feature-text">
                  <h1>Admin Page</h1>
                  <p>Selamat datang dihalaman admin. <br>Gunakan menu disebelah kiri untuk navigasi.</p>
                  <p><a href="#text" class="link-scroll btn btn-outline-inverse btn-lg">Lanjutkan</a></p>
                </section>

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="text" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg1.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 class="section-title">Informasi Pendaftar</h1>

                <p class="feature-paragraph"><img data-img-src="assets/images/other_images/transp-image5b.png" class="lazy pull-right" alt="Lorem Ipsum">Halaman ini berisi berbagai informasi pendaftar LCC 2014</p>
                <h4>Info Pendaftar</h4>
                <p>Banyak Pendaftar: <strong>32 Sekolah</strong>
										<br> Pendaftar Terakhir pada <strong>27 November 2014</strong> <br>
										dari <strong>SMKN Negeri 2 Terbanggi Besar</strong>.
										
									</p>
                <p><a href="#contact" class="link-scroll btn btn-outline-inverse btn-sm">read more</a></p>
                
            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="contact" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg4.jpg">
          <div class="content-wrapper clearfix">
            
              <h1 class="section-title">Data Pendaftar</h1>
              
                <!-- Tabel Pendaftar -->
                <div class="col-sm-12 col-md-12">
									<table class="table table-bordered table-striped titleCase">
										<thead class="upperCase">
											<th>No</th>
											<th>Terdaftar</th>
											<th>Nama Sekolah</th>
											<th>Peserta</th>
											<th>Opsi</th>
										</thead>										
										<tbody>
											<?php
												$col = array("nama_sekolah","email","telepon_sekolah","alamat_sekolah","nama1","kelas1","telepon1","nama2","kelas2","telepon2","nama3","kelas3","telepon3","pesan","tanggal_daftar");
												$code = "SELECT * FROM pendaftaran order by id_sekolah DESC";
												$do = mysql_query($code);
												$d = 1;
												while($view=mysql_fetch_array($do)){												
											?>
											<tr>
												<td><?php echo $d; ?></td>
												<td><?php echo $view[$col[14]]; ?></td>
												<td><?php echo $view[$col[0]]; ?></td>
												<td><?php echo $view[$col[4]].", ".$view[$col[7]].", ".$view[$col[10]]; ?></td>
												<td>
													<a title="Data lengkap" href="#?id=<?php echo $view["id_sekolah"]; ?>" class="btn btn-outline-inverse btn-xs"><span class="glyphicon glyphicon-list"></span></a>
													<!-- <a title="Hapus" href="#?id=<?php echo $view["id_sekolah"]; ?>" class="btn btn-outline-inverse btn-xs"><span class="glyphicon glyphicon-fire"></span></a> -->
												</td>
											</tr>
											<?php $d+=1; }; ?>
										</tbody>
									</table>
                </div><!-- end: Tabel pendaftar -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->
				
        <article id="axquired" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg3.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 class="section-title">Need help</h1>

                <p class="feature-paragraph"><img data-img-src="assets/images/other_images/transp-image2.png" class="lazy pull-right" alt="Albert Septiawan">Butuh bantuan tentang navigasi dan template ini? <a href="http://albertseptiawan.wordpress.com">Contact me</a></p>
                <h4>Atau</h4>
                <p>FB: <strong>fb.com/axquiredsaint24</strong>
										<br> Email <strong>albertseptiawan24@gmail.com</strong> <br>
										
									</p>
                <p><a href="mailto:albertseptiawan24@gmail.com" class="btn btn-outline-inverse btn-sm">Compose mail</a></p>
                
            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->
				

      </section><!-- #main-content -->

      <!-- Footer -->
      <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onClick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

        <ul class="social-icons">
          <li><a href="#" target="_blank" title="Facebook"><img src="assets/images/theme_images/social_icons/facebook.png" alt="Facebook"></a></li>
          <li><a href="#" target="_blank" title="Twitter"><img src="assets/images/theme_images/social_icons/twitter.png" alt="Twitter"></a></li>
          <li><a href="#" target="_blank" title="Google+"><img src="assets/images/theme_images/social_icons/googleplus.png" alt="Google+"></a></li>
        </ul>

        <!-- copyright text -->
        <div class="footer-text-line">&copy; 2014 Himatif UMS | LCC 2014</div>
      </section>
      <!-- end: Footer -->      

    </div><!-- #outer-container -->
    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body">
          </div><!-- .modal-body -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->    

    <!-- Javascripts
    ================================================== -->

    <!-- Jquery and Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <!-- background image fix for IE 9 or less
       - use same background as set above to <body> -->
    <!--[if lt IE 9]>
    <script type="text/javascript">
    $(document).ready(function(){
      jQuery("#outer-background-container").backstretch("assets/images/other_images/bg5.jpg");
    });
    </script> 
    <![endif]-->  

    <!-- detect mobile browsers -->
    <script src="assets/js/detectmobilebrowser.js"></script>

    <!-- owl carousel js -->
    <script src="assets/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- lightbox js -->
    <script src="assets/js/lightbox/js/lightbox.min.js"></script>

    <!-- intro animations -->
    <script src="assets/js/wow/wow.min.js"></script>

    <!-- Custom functions for this theme -->
    <script src="assets/js/functions.min.js"></script>
    <script src="assets/js/initialise-functions.js"></script>

    <!-- IE9 form fields placeholder fix -->
    <!--[if lt IE 9]>
    <script>contact_form_IE9_placeholder_fix();</script>
    <![endif]--> 

    <!-- GA -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-48808360-1', 'stephenmuscat.com');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');

    </script> 

  </body>
</html>