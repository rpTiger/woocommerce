<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <?php wp_head(); ?>
    <?php $cookie_name = "user";
    $cookie_value = "Visited";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_site_url(); ?>/assets/img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/vendor/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/vendor/flaticon.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/vendor/icomoon.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/vendor/tractor-icon.min.css">
      <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/plugins/lightgallery.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/style.css">
    <link href="<?php echo get_site_url(); ?>/assets/revolution/css/settings.css" rel="stylesheet">
    <link href="<?php echo get_site_url(); ?>/assets/revolution/css/navigation.css" rel="stylesheet">
    <link href="<?php echo get_site_url(); ?>/assets/revolution/custom-setting.css" rel="stylesheet">
    <link href="<?php echo get_site_url(); ?>/assets/css/custom-new.css" rel="stylesheet">
    <link href="<?php echo get_site_url(); ?>/assets/css/custom-gmdc-k.css" rel="stylesheet">
    <link href="<?php echo get_site_url(); ?>/assets/css/responsive.css" rel="stylesheet">
    <script src="<?php echo get_site_url(); ?>/assets/js/tab-slider.js"></script>
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/tab-slider.css.css">
    <!-- table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
   <!--  <script src="<?php echo get_site_url(); ?>/assets/Chart.js/dist/Chart.js"></script>
    <script src="<?php echo get_site_url(); ?>/assets/Chart.js/dist/utils.js"></script> -->
    <!-- header code -->
    <script src="<?php echo get_site_url(); ?>/assets/js/chart.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    $(function () {
    
    let darkMode = localStorage.getItem("dark-mode");
    function style_change(stylename) {
    }
    $(document).ready(function(){
    $("#aBlack").click(function(){
    document.getElementById('aStyleLink').href='<?php echo get_site_url(); ?>/assets/frontend/css/black-theme.css';
    localStorage.setItem("dark-mode", "black");
    });
    
    $("#aBlackMobile").click(function(){
    document.getElementById('aStyleLink').href='<?php echo get_site_url(); ?>/assets/frontend/css/black-theme.css';
    localStorage.setItem("dark-mode", "black");
    });
    $("#aNormal").click(function(){
    document.getElementById('aStyleLink').href='#';
    localStorage.setItem("dark-mode", "white");
    });
    
    $("#aNormalMobile").click(function(){
    document.getElementById('aStyleLink').href='#';
    localStorage.setItem("dark-mode", "white");
    });
    if (darkMode === "black") {
    document.getElementById('aStyleLink').href='<?php echo get_site_url(); ?>/assets/frontend/css/black-theme.css'; // set state of darkMode on page load
    }
    
    else if (darkMode === "white") {
    document.getElementById('aStyleLink').href='#';
    }
    });
    
    })
    /****** End color change  *****/
    </script>
    <script>
    var section;
    var factor = 0.9;
    var count = 0;
    function getFontSize(el)
    {
    var fs = $(el).css('font-size');
    if (!el.originalFontSize)
    el.originalFontSize = fs; //set dynamic property for later reset
    return  parseFloat(fs);
    }
    function setFontSize(fact) {
    if (section == null)
    section = $('body').not('.font-size-change').find('*')
    .filter(
    function () {
    return  $(this).clone()
    .children()
    .remove()
    .end()
    .text().trim().length > 0;
    }); //filter -> exclude all elements without text
    section.each(function () {
    var newsize = fact ? getFontSize(this) * fact : this.originalFontSize;
    if (newsize)
    $(this).css('font-size', newsize);
    });
    }
    function resetFont() {
    setFontSize();
    count = 0;
    }
    function increaseFont() {
    if (count < 1)
    {
    setFontSize(1 / factor);
    count++
    }
    }
    function decreaseFont() {
    if (count > -1)
    {
    setFontSize(factor);
    count--
    }
    }
    </script>
    <!-- header code -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TPQ4598');</script>
    <!-- End Google Tag Manager -->
  </head>
  <body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPQ4598"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- menu -->
    <div class="header-area header-sticky">
      <div class=" header-area__desk">
        <!--=======  header top bar  =======-->
        <div class="header-top-bar">
                    <div class="container-fluid container-fluid--cp-60">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <!-- top bar right -->
                                <div class="top-bar-right-wrapper">
                                    <ul class="d-inline-block cu-pr">
                                        <li><a href="<?php echo get_site_url(); ?>/screen-reader-access/"  class="scrollLink">Screen Reader Access</a></li>
                                    </ul>
                                   <!--  <ul class="d-inline-block cu-pr lang">
                                        <li><a href="#">Eng</a></li>
                                        <li><a href="#">Guj</a></li>
                                    </ul> -->
                                    <div class="header_font-color">
                                        <div class="font_size cu-pr"> <a href="javascript:void(0)" onclick="decreaseFont();" class="font_small">A-</a> <a href="javascript:void(0)" onclick="resetFont();">A</a> <a href="javascript:void(0)" onclick="increaseFont();" class="font_big">A+</a> </div>
                                        <div class="theme_col cu-pr">
                                            <a href="javascript:void(0)" id="aNormal" onclick="style_change('normal')">
                                                <div><img title="" alt="" src="<?php echo get_site_url(); ?>/assets/img/theme1.jpg" /></div>
                                            </a>
                                            <a href="javascript:void(0)" id="aBlack" onclick="style_change('black')">
                                                <div><img title="" alt="" src="<?php echo get_site_url(); ?>/assets/img/theme2.jpg" /></div>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="topbar-info">
                                        <li><a href="<?php echo get_site_url(); ?>/news/"><i class="icomoon-calendar"> </i> Media Library</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/current-tenders/"><i class="ion-ios-list-outline"></i> Tenders</a></li>
                                    </ul>
                                    <div class="social-links social-links--white-topbar d-inline-block">
                                        <ul>
                  <li><a href="https://www.facebook.com/profile.php?id=100077082217367" target="_blank"><i class="ion-social-facebook"></i></a></li>
                  
                  <li><a href="https://twitter.com/OfficialGMDC" target="_blank"><i class="ion-social-twitter"></i></a></li>
                  <li>                  <a href="https://www.linkedin.com/company/gmdc-official/"  target="_blank"><i class="ion-social-linkedin"></i></a>
</li>
                </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!--=======  End of header top bar  =======-->
    <!--=======  header navigation area  =======-->
    <div class="header-navigation-area container-fluid container-fluid--cp-60">
      <div class="row no-gutters">
        <div class="col-lg-12 position-static">
          <div class="header-navigation-container">
            <!-- logo -->
            <div class="logo main-logo"> <a href="<?php echo get_site_url(); ?>"> <img src="<?php echo get_site_url(); ?>/assets/img/logo.jpg" class="img-fluid" alt="">
              <div class="logo-text">
                <h3>Gujarat Mineral Development Corporation Ltd</h3>
                <span>(A Government of Gujarat Enterprise)</span> </div>
              </a>
              <!--               <div class="logo-text">
                <h3>Gujarat Mineral Development Corporation Ltd</h3>
                <span>(A Government of Gujarat Enterprise)</span> </div> -->
              </div>
              <div class="header-navigation-wrapper">
                <div class="">
                  <div class="header-navigation__nav position-static">
                    <nav>
                      <ul>
                        <li class="has-children has-children--multilevel-submenu"> <a href="#">About GMDC</a>
                        <ul class="submenu mega-menu">
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-6 p-0">
                                <div class="menu-title">
                                  <h4>About<span class="hide-menu"> GMDC</span></h4>
                                  <img src="<?php echo get_site_url(); ?>/assets/img/menu/menu-about.png"  alt="">
                                  <p>GMDC is India’s leading mining and mineral processing company, and the country’s No.1 Merchant Seller of Lignite and the No.2 Producer of Lignite.</p>
                                </div>
                              </div>
                              <!-- <div class="col-lg-3 p-0">
                                <div class="menu-title">
                                  <h4 > <a href="#">ABOUT GMDC</a></h4>
                                  <p>GMDC is a multi-product company supplying a variety of high-utility minerals and power that comprise Thermal, Wind, and Solar</p>
                                </div>
                              </div>-->
                              <!--<div class="col-lg-3">
                                <div class="menu-img-bottm"> <img src="assets/img/menu/menu-about.png"  alt="">
                                  <p>GMDC is in the business of exploring nature, to identify and isolate products that find applications in different industries. In the process we liberate wealth from nature</p>
                                </div>
                              </div>-->
                              <div class="col-lg-3 p-0">
                                <li><a href="<?php echo get_site_url(); ?>/about/company-profile/">Company Profile</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/about/company-profile/the-journey">The Journey</a></li>
                                <!--<li><a href="<?php echo get_site_url(); ?>/about/company-profile/chairmans-message">Chairman's Message</a></li>-->
                                <!--<li><a href="<?php echo get_site_url(); ?>/about/company-profile/mds-message">MD's Message</a></li>-->
                                <li class="has-children"> <a href="#">The Team</a>
                                <ul class="submenu verti-menu">
                                  <li><a href="<?php echo get_site_url(); ?>/about/company-profile/board-of-directors">Board of Directors</a></li>
                                  <li><a href="<?php echo get_site_url(); ?>/about/company-profile/functional-divisions">Functional Divisions</a></li>
                                  <li><a href="<?php echo get_site_url(); ?>/about/organisation-chart/">Organisation Chart</a></li>
                                </ul>
                              </li>
                              <li><a href="<?php echo get_site_url(); ?>/about/project-shikhar">Project Shikhar</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/about/company-profile/awards-accolades">Awards & Accolades</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/about/company-profile/corporate-policies-gmdc">Corporate Policies</a></li>
                              <li><a href="http://gmdc.rtipad.in/index.html#/" target="_blank">RTI</a></li>
                            </div>
                            <div class="col-lg-3 p-0"></div>
                          </div>
                        </div>
                      </ul>
                    </li>
                    <li class="has-children has-children--multilevel-submenu"> <a href="<?php echo get_site_url(); ?>/minerals_mines/products/">Products</a>
                    <ul class="submenu mega-menu">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6 p-0">
                            <div class="menu-title">
                              <h4>Products</h4>
                              <img src="<?php echo get_site_url(); ?>/assets/img/menu/menu-minerals.png" alt="">
                              <p>GMDC is engaged in the development of Gujarat’s mineral resources like Lignite, Bauxite, etc. It also has a diversified energy portfolio comprising thermal, wind and solar power.</p>
                            </div>
                          </div>
                          <div class="col-lg-3 p-0">
                            <li class="has-children"> <a href="<?php echo get_site_url(); ?>/minerals_mines/products/">Minerals & Mines</a>
                            <ul class="submenu verti-menu">
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/lignite/">Lignite</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/bauxite/">Bauxite</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/kadipani/">Fluorspar</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/manganese/">Manganese</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/silica-sand/">Silica Sand</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/limestone/">Limestone</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/bentonite/">Bentonite</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/ball-clay/">Ball Clay</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/product-price/">Product Price</a></li>
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/interactive-geological-map/">Interactive & Geological Map</a></li>
                              <!--                                 <li><a href="<?php echo get_site_url(); ?>/minerals_mines/environment-compliance/">Environment Compliance</a></li> -->
                              <li><a href="<?php echo get_site_url(); ?>/minerals_mines/upcoming-projects/">Upcoming Projects</a></li>
                            </ul>
                          </li>
                          <li class="has-children"> <a href="<?php echo get_site_url(); ?>/power/power">Power</a>
                          <ul class="submenu verti-menu">
                            <li><a href="<?php echo get_site_url(); ?>/power/thermal/">Thermal Power</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/power/wind">Wind Power</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/power/solar">Solar Power</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/power/green-footprint">Green Footprint</a></li>
                          </ul>
                        </li>
                      </div>
                      <div class="col-lg-3 p-0"></div>
                    </div>
                  </div>
                </ul>
              </li>
              <li class="has-children has-children--multilevel-submenu"> <a href="<?php echo get_site_url(); ?>/investors/investors/">Investors</a>
              <ul class="submenu mega-menu">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 p-0">
                      <div class="menu-title">
                        <h4> Investors</h4>
                        <img src="<?php echo get_site_url(); ?>/assets/img/menu/menu-investor.png" alt="">
                        <p>GMDC is undergoing remarkable growth and diversification. We’re going to great depths and constantly raising our performance bar, to accomplish better for our stakeholders.
                        </p>
                      </div>
                    </div>
                    <!-- <div class="col-lg-3 p-0">
                      <div class="menu-title">
                        <h4 > <a href="investors.php">Investors</a></h4>
                        <p>Bolstering Gujarat’s industrial growth and contributing to the state’s economic development are our major objectives.</p>
                      </div>
                    </div>-->
                    <div class="col-lg-3 p-0">
                      
                      <li><a href="<?php echo get_site_url(); ?>/disclosure-under-regulation-46-sebi-lodr/">Disclosure under Regulation 46 - SEBI LODR</a></li>
                      <li><a href="<?php echo get_site_url(); ?>/investors/financial-reports/">Financial Reports</a></li>
                      <li><a href="<?php echo get_site_url(); ?>/investors/statutory-committees/">Statutory Committees</a></li>
                      <li class="has-children"> <a href="#">Stock Exchanges Announcements</a>
                      <ul class="submenu verti-menu">
                        <li><a href="<?php echo get_site_url(); ?>/investors/shareholding-pattern/">Shareholding Pattern</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/investors/voting-results/">Voting Results</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/investors/corporate-governance-results/">Corporate Governance Reports</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/investors/others/">Others</a></li>
                      </ul>
                    </li>
                    <li><a href="<?php echo get_site_url(); ?>/investors/registrar-share-transfer-agent/">Registrar & Share Transfer Agent</a></li>
                    <li class="has-children"> <a href="#">Shareholders' Services</a>
                    <ul class="submenu verti-menu">
                      <li><a href="<?php echo get_site_url(); ?>/investors/transfer-of-shares/">Transfer of Shares</a></li>
                      <li><a href="<?php echo get_site_url(); ?>/investors/unclaimed-dividend/">Unclaimed Dividend</a></li>
                      <li><a href="<?php echo get_site_url(); ?>/investors/change-of-address/">Change of Address</a></li>
                      <li><a href="<?php echo get_site_url(); ?>/investors/nomination/">Nomination</a></li>
                      <li><a href="#">Demat</a></li>
                      <li><a href="<?php echo get_site_url(); ?>/investors/loss-of-shares/">Loss of Shares</a></li>
                      <li><a href="<?php echo get_site_url(); ?>/investors/request-for-payment-of-dividend-via-ecs/">Request for Payment of Dividend via ECS</a></li>
                      <li><a href="<?php echo get_site_url(); ?>/investors/transfer-of-shares-to-iepf/">Transfer of Shares to IEPF</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo get_site_url(); ?>/investors/audio-link-to-the-gmdcs-conference-call/">Audio Link to the GMDC's Conference Call</a></li>
                  <li><a href="<?php echo get_site_url(); ?>/investors/investors-presentation/">Investors Presentation</a></li>
                </div>
                <div class="col-lg-3 p-0"></div>
                <!--<div class="col-lg-3">
                  <div class="menu-img-bottm"><img src="assets/img/menu/menu-investor.png"  alt="">
                    <p>Our diversified portfolio can help Gujarat achieve its full potential. Learn more about our achievements and economic performance in our Financial and Quarterly Reports</p>
                  </div>
                </div>-->
              </div>
            </div>
          </ul>
        </li>
        <li class="has-children has-children--multilevel-submenu"> <a href="#">We Care</a>
        <ul class="submenu mega-menu">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 p-0">
                <div class="menu-title">
                  <h4>We Care</h4>
                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/07/filename2MmxId9MXpDImenu-ehs.png" alt="">
                  <p>GMDC is committed to ensuring workers' safety, empowering communities around its areas of operation, and enabling sustainable development of the environment.
                  </p>
                </div>
              </div>
              <div class="col-lg-3 p-0">
                <li class="has-children"> <a href="#">EHS</a>
                <ul class="submenu verti-menu">
                  <li><a href="<?php echo get_site_url(); ?>/we_care/environment/">Environment</a></li>
                  <li><a href="<?php echo get_site_url(); ?>/we_care/mines-safety/">Health & Safety</a></li>
                </ul>
              </li>
              <li class="has-children"> <a href="#">Initiatives</a>
              <ul class="submenu verti-menu">
                <li><a href="<?php echo get_site_url(); ?>/we_care/icem/">iCEM</a></li>
                <li><a href="<?php echo get_site_url(); ?>/we_care/icreate/">iCREATE</a></li>
                <li><a href="https://www.krantiteerth.org/" target="_blank">SKV Memorial</a></li>
              </ul>
            </li>
            <li><a href="<?php echo get_site_url(); ?>/csr/">CSR</a></li>
          </div>
          <div class="col-lg-3 p-0"></div>
        </div>
      </div>
    </ul>
  </li>
  <!--             <li class="has-children has-children--multilevel-submenu"> <a href="<?php echo get_site_url(); ?>/we_care/csr-policy/">CSR</a> </li> -->
  <li class="has-children has-children--multilevel-submenu"> <a href="#">Careers</a>
  <ul class="submenu mega-menu">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="menu-title">
            <h4>Careers</h4>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/filenameruRX2zZ47aiCmenu-career.png" alt="">
            <p>We are developing a team that’ll take forward our endeavours at building capabilities, creating resilience and elevating our financial performance as we embrace transformational change.
            </p>
          </div>
        </div>
        <div class="col-lg-3 p-0">
          <li class="has-children"> <a href="#">HR</a>
          <ul class="submenu verti-menu">
            <li><a href="<?php echo get_site_url(); ?>/hr/human-resource/">Human Resources</a></li>
            <li><a href="<?php echo get_site_url(); ?>/hr/employee-corner/">Employee Corner</a></li>
            <li><a href="<?php echo get_site_url(); ?>/hr/employee-circular/">Employee Circular</a></li>
          </ul>
        </li>
        <li><a href="#">Life at GMDC</a></li>
        <li><a href="<?php echo get_site_url(); ?>/career/">Current Openings</a></li>
      </div>
      <div class="col-lg-3 p-0"></div>
    </div>
  </div>
</ul>
</li>
<li class="has-children has-children--multilevel-submenu"> <a href="#">Connect With Us</a>
<ul class="submenu mega-menu">
<div class="container">
  <div class="row">
    <div class="col-lg-6 p-0">
      <div class="menu-title">
        <h4>Connect With Us</h4>
        <img src="<?php echo get_site_url(); ?>/assets/img/menu/menu-customer_care.png" alt="">
        <p>Get in touch with GMDC, at <a href="mailto:contact@gmdcltd.com">contact@gmdcltd.com</a></p>
      </div>
    </div>
    <div class="col-lg-3 p-0">
      <li class="has-children"> <a href="#">Customer Care</a>
      <ul class="submenu verti-menu">
        <li><a href="<?php echo get_site_url(); ?>/customer_care/registration/">Registration Forms</a></li>
        <li><a href="<?php echo get_site_url(); ?>/minerals_mines/product-price/">Product Price</a></li>
        <li><a href="https://imine.gmdcltd.co.in/OA_HTML/xxgmdcCustomerLogin.jsp" target="_blank">Online DO Booking for Lignite & Non-Lignite</a></li>
        <li><a href="https://gmdcsna.ncode.in/BMS/Login.aspx" target="_blank">Lignite Customers (Bricks) Registration Portal</a></li>
        <li><a href="<?php echo get_site_url(); ?>/customer_care/notices-documents-related-to-lignite-distribution/">Notices & Documents for Lignite Customers</a></li>
        <li><a href="<?php echo get_site_url(); ?>/customer_care/complaint/">Customer Complaint</a></li>
      </ul>
    </li>
    <li class="has-children"> <a href="#">Coal Distribution (SNA)</a>
    <ul class="submenu verti-menu">
      
      <li><a href="https://gmdcsna.ncode.in/cdms/" target="_blank">Coal Distribution Portal</a></li>
      <li><a href="<?php echo get_site_url(); ?>/coal-distribution/notices-documents-related-to-coal-distribution/">Notices & Documents Related to Coal Distribution</a></li>
    </ul>
  </li>
  <li><a href="<?php echo get_site_url(); ?>/contact/">Contact</a></li>
  <li><a href="<?php echo get_site_url(); ?>/enquiry/">Enquiry</a></li>
</div>
<div class="col-lg-3 p-0"></div>
</div>
</div>
</ul>
</li>
</ul>
</nav>
</div>
</div>
</div>

<!--  <div class='logo-div-1'><a href="https://ceo.gujarat.gov.in/Information-For-Voters"> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/07/filenameLZgIO6Y0Sp3Sceo-logo.png" class="img-fluid" alt=""> </a>
</div>
<div class="logo-div-2"> <img src="<?php echo get_site_url(); ?>/assets/img/hed-logo.png" class="img-fluid" alt="">  </div> -->
<div class="logo-div-2"> <img src="https://www.gmdcltd.com/wp-content/uploads/2022/12/filenamej2Z23GUVFhHug2-image1.jpg" class="img-fluid" alt="">  </div>

</div>
</div>
</div>
</div>
<!--=======  End of header navigation area =======-->
</div>
<div class="header-area__mobile">
<!--=======  mobile menu  =======-->
                <div class="mobile-menu-area">
                    <div class="header-top-bar">
                        <div class="container-fluid container-fluid--cp-60">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <!-- top bar right -->
                                    <div class="top-bar-right-wrapper">
                                        <ul class="d-inline-block cu-pr screen-hide">
                                            <li><a href="<?php echo get_site_url(); ?>/screen-reader-access/"  class="scrollLink">Screen Reader Access</a></li>
                                        </ul>
                                        <!-- <ul class="d-inline-block cu-pr lang">
                                            <li><a href="#">Eng</a></li>
                                            <li><a href="#">Guj</a></li>
                                        </ul> -->
                                        <div class="header_font-color">
                                            <div class="font_size cu-pr"> <a href="javascript:void(0)" onclick="decreaseFont();" class="font_small">A-</a> <a href="javascript:void(0)" onclick="resetFont();">A</a> <a href="javascript:void(0)" onclick="increaseFont();" class="font_big">A+</a> </div>
                                            <div class="theme_col cu-pr">
                                                <a href="javascript:void(0)" id="aNormalMobile" onclick="style_change('normal')">
                                                    <div><img title="" alt="" src="<?php echo get_site_url(); ?>"> <img src="<?php echo get_site_url(); ?>/assets/img/theme1.jpg" /></div>
                                                </a>
                                                <a href="javascript:void(0)" id="aBlackMobile" onclick="style_change('black')">
                                                    <div><img title="" alt="" src="<?php echo get_site_url(); ?>"> <img src="<?php echo get_site_url(); ?>/assets/img/theme2.jpg" /></div>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="topbar-info">
                                            <li><a href="<?php echo get_site_url(); ?>/news/"><i class="icomoon-calendar"> </i> Media Library</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/current-tenders/"><i class="ion-ios-list-outline"></i> Tenders</a></li>
                                        </ul>
                                        <div class="social-links social-links--white-topbar d-inline-block">
                                            <ul>
                                                <li><a href="https://www.facebook.com/profile.php?id=100077082217367"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="https://twitter.com/OfficialGMDC" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="https://www.linkedin.com/company/gmdc-official/"><i class="ion-social-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-6 pr-0">
                                <!-- logo -->
                                <div class="logo main-logo"> <a href="<?php echo get_site_url(); ?>"> <img src="<?php echo get_site_url(); ?>/assets/img/logo/logo.jpg" class="img-fluid" alt=""> </a> </div>
                                <!-- <div class="mobile-logo"> <a href="<?php echo get_site_url(); ?>"> <img src="assets/img/hed-logo.png" class="img-fluid" alt=""> </a></div> -->
                                <div class="mobile-logo"> <a href="javascript:void(0)"> <img src="https://www.gmdcltd.com/wp-content/uploads/2022/12/filenamej2Z23GUVFhHug2-image1.jpg" class="img-fluid" alt=""> </a> </div>
                            </div>
                            <div class="col-md-8 col-sm-6 col-6 pl-0">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content">
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="https://www.facebook.com/profile.php?id=100077082217367" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/OfficialGMDC" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="https://www.linkedin.com/company/gmdc-official/" data-tippy="Linkedin" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="mobile-navigation-icon" id="mobile-menu-trigger"> <i></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=======  End of mobile menu  =======-->
</div>
</div>
<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
<div class="mobile-menu-overlay__header">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6 col-9">
<div class="logo main-logo slide-logo"> <a href="<?php echo get_site_url(); ?>"> <img src="<?php echo get_site_url(); ?>/assets/img/logo/logo.jpg" class="img-fluid" alt=""> </a> </div>
<div class="mobile-logo"> <a href="<?php echo get_site_url(); ?>"> <img src="https://www.gmdcltd.com/wp-content/uploads/2022/12/filenamej2Z23GUVFhHug2-image1.jpg" class="img-fluid" alt=""> </a>
</div>
</div>
<div class="col-md-8 col-sm-6 col-3">
<div class="mobile-menu-content"> <a class="mobile-navigation-close-icon" id="mobile-menu-close-trigger" href="javascript:void(0)"> <i class="ion-ios-close-empty"></i> </a> </div>
</div>
</div>
</div>
</div>
<div class="mobile-menu-overlay__body">
<nav class="offcanvas-navigation">
<ul>
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">About GMDC</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/about/company-profile/">Company Profile</a></li>
<li><a href="<?php echo get_site_url(); ?>/about/company-profile/the-journey">The Journey</a></li>
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">The Team</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/about/company-profile/board-of-directors">Board of Directors</a></li>
<li><a href="<?php echo get_site_url(); ?>/about/company-profile/functional-divisions">Functional Divisions</a></li>
<li><a href="<?php echo get_site_url(); ?>/about/organisation-chart/">Organisation Chart</a></li>
</ul>
</li>
<li><a href="<?php echo get_site_url(); ?>/about/project-shikhar">Project Shikhar</a></li>
<li><a href="<?php echo get_site_url(); ?>/about/company-profile/awards-accolades">Awards &amp; Accolades</a></li>
<li><a href="<?php echo get_site_url(); ?>/about/company-profile/corporate-policies-gmdc">Corporate Policies</a></li>
<li><a href="http://gmdc.rtipad.in/index.html#/" target="_blank">RTI</a></li>
</ul>
</li>
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">Products</a>
<ul class="sub-menu" style="display: none;">

<li class="has-children"><span class="menu-expand"><i></i></span>
<a href="<?php echo get_site_url(); ?>/minerals_mines/products/">Minerals &amp; Mines</a>
<ul class="sub-menu" style="display: none;">
<li class="has-children"><span class="menu-expand"><i></i></span>
<a href="<?php echo get_site_url(); ?>/minerals_mines/lignite/">Lignite</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/tadkeshwar/">Tadkeshwar</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/rajpardi-lignite-mine/"> Rajpardi </a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/panandhro-lignite-mine/">Panandhro</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/bhavnagar-lignite-mine/">Bhavnagar</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/mata-no-madh-lignite-mine/">Mata No madh</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/umarsar-lignite-mine/">Umarsar</a></li>
</ul>

</li>
<li class="has-children"><span class="menu-expand"><i></i></span>
<a href="<?php echo get_site_url(); ?>/minerals_mines/bauxite/">Bauxite</a>
<ul class="sub-menu" style="display: none;">
<li class="has-children"><span class="menu-expand"><i></i></span>
<a href="#">Gadhsisa</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/daban-wamoti-bauxite-mine/">Daban - Wamoti</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/mothala-balachod-bauxite-mine/">Mothala-Balachod</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/nana-goniyasar-bauxite-mine/">Nana - Goniyasar</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/naredi-nandra-bauxite-mine/">Naredi Nandra</a></li>
<li><a href="<?php echo get_site_url(); ?>/naredi-ii-bauxite-mine/">Naredi-II</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/ratadia-nagrecha-bauxite-mine/">Ratadia - Nagrecha</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/roha-kotada-bauxite-mine/">Roha - kotada</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/wandh-i-bauxite-mine/">Wandh-I</a></li>
</ul>
</li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/mevasa-bauxite-mine/">Mevasa</a></li>
</ul>
</li>
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">Fluorspar</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/kadipani/">Kadipani</a></li>
</ul>
</li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/manganese/">Manganese</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/silica-sand/">Silica Sand</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/limestone/">Limestone</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/bentonite/">Bentonite</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/ball-clay/">Ball Clay</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/product-price/">Product Price</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/interactive-geological-map/">Interactive &amp; Geological Map</a></li>
<!--           <li><a href="<?php echo get_site_url(); ?>/minerals_mines/environment-compliance/">Environment Compliance</a></li> -->
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/upcoming-projects/">Upcoming Projects</a></li>

</ul>

</li>
<li class="has-children"><span class="menu-expand"><i></i></span><a href="<?php echo get_site_url(); ?>/power/power">Power</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/power/thermal/">Thermal Power</a></li>
<li><a href="<?php echo get_site_url(); ?>/power/wind">Wind Power</a></li>
<li><a href="<?php echo get_site_url(); ?>/power/solar">Solar Power</a></li>
<li><a href="<?php echo get_site_url(); ?>/power/green-footprint">Green Footprint</a></li>
</ul>
</li>


</ul>
</li>

<li class="has-children"><span class="menu-expand"><i></i></span> <a href="<?php echo get_site_url(); ?>/investors/investors/">Investors</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/disclosure-under-regulation-46-sebi-lodr/">Disclosure under Regulation 46 - SEBI LODR</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/financial-reports/">Financial Reports</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/statutory-committees/">Statutory Committees</a></li>
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">Stock Exchanges Announcements</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/investors/shareholding-pattern/">Shareholding Pattern</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/voting-results/">Voting Results</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/corporate-governance-results/">Corporate Governance Reports</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/others/">Others</a></li>
</ul>
</li>
<li><a href="<?php echo get_site_url(); ?>/investors/registrar-share-transfer-agent/">Registrar &amp; Share Transfer Agent</a></li>
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">Shareholders' Services</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/investors/transfer-of-shares/">Transfer of Shares</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/unclaimed-dividend/">Unclaimed Dividend</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/change-of-address/">Change of Address</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/nomination/">Nomination</a></li>
<li><a href="#">Demat</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/loss-of-shares/">Loss of Shares</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/request-for-payment-of-dividend-via-ecs/">Request for Payment of Dividend via ECS</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/transfer-of-shares-to-iepf/">Transfer of Shares to IEPF</a></li>
</ul>
</li>
<li><a href="<?php echo get_site_url(); ?>/investors/audio-link-to-the-gmdcs-conference-call/">Audio Link to the GMDC's Conference Call</a></li>
<li><a href="<?php echo get_site_url(); ?>/investors/investors-presentation/">Investors Presentation</a></li>
</ul>
</li>



<li class="has-children"><span class="menu-expand"><i></i></span> <a href="javascript:void(0)">We Care</a>
<ul class="sub-menu" style="display: none;">

<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">EHS</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/we_care/environment/">Environment</a></li>
<li><a href="<?php echo get_site_url(); ?>/we_care/mines-safety/">Health & Safety</a></li>
</ul>
</li>

<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">Initiatives</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/we_care/icem/">iCEM</a></li>
<li><a href="<?php echo get_site_url(); ?>/we_care/icreate/">iCREATE</a></li>
<li><a href="https://www.krantiteerth.org/" target="_blank">SKV Memorial</a></li>
</ul>
</li>
<li><a href="<?php echo get_site_url(); ?>/csr/">CSR</a></li>
</ul>
</li>

<!-- new -->
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="javascript:void(0)">Careers</a>
<ul class="sub-menu" style="display: none;">

<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">HR</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/hr/human-resource/">Human Resources</a></li>
<li><a href="<?php echo get_site_url(); ?>/hr/employee-corner/">Employee Corner</a></li>
<li><a href="<?php echo get_site_url(); ?>/hr/employee-circular/">Employee Circular</a></li>
</ul>
</li>


<li><a href="#">Life at GMDC</a></li>
<li><a href="<?php echo get_site_url(); ?>/career/">Current Openings</a></li>
</ul>
</li>
<!-- new -->





<!-- new -->
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="javascript:void(0)">Connect With Us</a>
<ul class="sub-menu" style="display: none;">

<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">Customer Care</a>
<ul class="sub-menu" style="display: none;">
<li><a href="<?php echo get_site_url(); ?>/customer_care/registration/">Registration Forms</a></li>
<li><a href="<?php echo get_site_url(); ?>/minerals_mines/product-price/">Product Price</a></li>
<li><a href="https://imine.gmdcltd.co.in/OA_HTML/xxgmdcCustomerLogin.jsp" target="_blank">Online DO Booking for Lignite & Non-Lignite</a></li>
<li><a href="https://gmdcsna.ncode.in/BMS/Login.aspx" target="_blank">Lignite Customers (Bricks) Registration Portal</a></li>
<li><a href="<?php echo get_site_url(); ?>/customer_care/notices-documents-related-to-lignite-distribution/">Notices & Documents for Lignite Customers</a></li>
<li><a href="<?php echo get_site_url(); ?>/customer_care/complaint/">Customer Complaint</a></li>
</ul>
</li>
<li class="has-children"><span class="menu-expand"><i></i></span> <a href="#">Coal Distribution (SNA)</a>
<ul class="sub-menu" style="display: none;">
<li><a href="https://gmdcsna.ncode.in/cdms/" target="_blank">Coal Distribution Portal</a></li>
<li><a href="<?php echo get_site_url(); ?>/coal-distribution/notices-documents-related-to-coal-distribution/">Notices & Documents Related to Coal Distribution</a></li>
</ul>
</li>

<li><a href="<?php echo get_site_url(); ?>/contact/">Contact</a></li>
<li><a href="<?php echo get_site_url(); ?>/enquiry/">Enquiry</a></li>
</ul>
</li>


<li><a href="<?php echo get_site_url(); ?>/news">Media Library</a></li>
<li><a href="<?php echo get_site_url(); ?>/current-tenders/">Tenders</a></li>
<li><a href="<?php echo get_site_url(); ?>/screen-reader-access/">Screen Reader Access</a></li>


<li>
<div class="mobile-social-icon">

 <a href="https://www.facebook.com/profile.php?id=100077082217367"><i class="ion-social-facebook"></i></a>
                  <a href="https://www.instagram.com/officialgmdc/"><i class="ion-social-instagram"></i></a>
                  <a href="https://twitter.com/OfficialGMDC" target="_blank"><i class="ion-social-twitter"></i></a>
                  <a href="https://www.linkedin.com/company/gmdc-official/"><i class="ion-social-linkedin"></i></a>
</div>

</li>
<!-- <li><a href="<?php echo get_site_url(); ?>"> <img src="assets/img/hed-logo.png" class="" alt=""> </a>
</li> -->
<!--
<li><a href="javascript:void(0);">Events</a></li>
<li><a href="gallery-photos.php">Gallery</a></li>
<li><a href="news.php">News</a></li>
<li><a href="hr.php">HR</a></li>-->
</ul>
</nav>
</div>

</div>
<!--====================  End of mobile menu overlay  ====================-->