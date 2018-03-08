<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img src="<?php echo base_url() ?>bootstrap/images/logo2.png" alt="" height="40" width="40"> <span>Master Lipat 1</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu prile quick info -->
            <!-- /menu prile quick info -->
            <br />
            <!-- sidebar menu -->

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a href="<?php echo base_url('/Masterlipat1/daftar');?>"><i class="fa fa-home"></i> Home </a></li>
                <h3>Input Data</h3>
                  <li><a><i class="fa fa-users"></i> Anggota <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                      <li>
                        <a href="<?php echo base_url('masterlipat1/input')?>">Input Anggota</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Barang Jadi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                      <li>
                        <a href="<?php echo base_url('masterlipat1/inputbjadi')?>">Input Barang Jadi</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Lihat Data</h3>
                <ul class="nav side-menu">
                <li><a><i class="fa fa-users"></i> Anggota <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                      <li>
                      <a href="<?php echo base_url('/Masterlipat1/daftar');?>"> Anggota </a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Barang Jadi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li>
                        <a href="<?php echo base_url('masterlipat1/getbrgjadi');?>">Daftar Barang Jadi</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>

            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              &nbsp;<i class="fa fa-calendar">&nbsp;</i><?php echo $this->dataload->hari_ini() ?>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>