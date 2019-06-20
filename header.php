  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head header-panel-absolute">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-stick-up-offset="95" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-lg-auto-height="true" data-auto-height="false">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-panel-title">
                  <h4>Home</h4>
                </div>
                <!-- RD Navbar Right Side Toggle-->
                <button class="rd-navbar-right-side-toggle veil-md" data-rd-navbar-toggle=".right-side"><span></span></button>
                <div class="shell extended_header">
                  <div class="range range-md-middle range-lg-top">
                    <div class="cell-md-3 left-side">
                      <div class="clearfix text-lg-left text-center">
                        <!--Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="index.php"><img width='165' height='76' src='images/atg_logo.png' alt=''/></a></div>
                      </div>
                    </div>
                    <div class="cell-md-9 text-md-right right-side">
                      <ul class="offset-lg-top-15 list-unstyled">
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-envelope-o text-middle icon-primary"></span><a class="inset-left-10 text-middle" href="mailto:info@austhaigeophysics.com">info@austhaigeophysics.com</a></li>
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-phone text-middle icon-primary"></span><a class="inset-left-10 text-middle" href="tel:+6627416403">+66 2741 6403 </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap extended_header">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="index.php"><img src='images/atg_logo.png' alt=''/></a><!-- <a class="rd-navbar-mobile-search-toggle mdi" data-custom-toggle="rd-navbar-search-mobile" href="#"><span></span></a> --></div>
                      <!--RD Navbar Mobile Search-->
                      <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                          <div class="form-group">
                            <label class="form-label" for="rd-navbar-mobile-search-form-input">Search</label>
                            <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off"/>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li<?php if($page == 'history'){ echo ' class="active"';}?>><a href="history.php">History</a>
                      </li>
                      <li<?php if($page == 'survey_design'){ echo ' class="active"';}?>><a href="survey_design.php">Survey Acquisition &amp; Supervision</a>
                      </li>
                      <li<?php if($page == 'data_processing'){ echo ' class="active"';}?>><a href="data_processing.php">Data Processing &amp;  Interpretation</a>
                      </li>
                      <li<?php if($page == 'personnel'){ echo ' class="active"';}?>><a href="personnel.php">Personnel</a>
                      </li>
                      <li<?php if($page == 'contact'){ echo ' class="active"';}?>><a href="contact.php">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>