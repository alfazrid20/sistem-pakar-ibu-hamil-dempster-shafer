    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" >
          <div class="left_col scroll-view" style="background: #fff">

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url() ?>assets/production/images/logo4.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span style="color: #4B6277">SISTEM PAKAR</span>
                <h2 style="color: #4B6277">Komplikasi Ibu Hamil</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">

                  <li><a href="<?php echo site_url() ?>/welcome/dashboard" style="color: #2F4356"><i class="fa fa-dashboard"></i> Dashboard </a></li>

                  <li><a href="<?php echo site_url() ?>/penyakit" style="color: #2F4356"><i class="fa fa-medkit"></i> Data Penyakit </a></li>

                  <li><a style="color: #2F4356"><i class="fa fa-list"></i> Data Gejala <span class="fa fa-chevron-down" style="color: #2F4356"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url() ?>/kelompok_gejala" style="color: #2F4356">Kelompok Gejala</a></li>
                      <li><a href="<?php echo site_url() ?>/gejala" style="color: #2F4356">Gejala</a></li>
                      <li><a href="<?php echo site_url() ?>/nilai_cf" style="color: #2F4356">Nilai CF</a></li>
                    </ul>
                  </li>

                  <li><a href="<?php echo site_url() ?>/riwayat" style="color: #2F4356"><i class="fa fa-clipboard"></i> Riwayat Diagnosa </a></li>

                  <li><a style="color: #2F4356"><i class="fa fa-cogs"></i> Pengaturan <span class="fa fa-chevron-down" style="color: #2F4356"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="<?php echo site_url() ?>/pengguna" style="color: #2F4356">Pengguna</a></li>
                    </ul>
                  </li>
                  <!-- <li><a style="color: #2F4356"><i class="fa fa-question-circle"></i> Tentang </a></li> -->

              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small" style="background: #EDEDED ">
              <?php 
                  if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'admin'){
              ?>
                  <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url() ?>/welcome" style="width: 100%; background: #fff;">
                    <span class="glyphicon glyphicon-off" style="color: #2F4356" aria-hidden="true"></span>
                  </a>
              <?php }else{ ?>
                  <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              <?php } ?>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" style="padding: 12px 28px 12px" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url() ?>assets/production/images/doctor2.png" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right" style="width: 160px;">
                    <?php 
                        if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'admin'){
                     ?>
                       <li><a href="<?php echo site_url() ?>/login_admin/logout"><i class="fa fa-sign-out pull-right"></i> Logout </a></li>
                    <?php }else{ ?>
                    <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    <?php } ?>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->