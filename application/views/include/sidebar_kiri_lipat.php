<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img src="<?php echo base_url() ?>bootstrap/images/logo2.png" alt="" height="40" width="40"> <span>Anggota Lipat</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu prile quick info -->
            <!-- /menu prile quick info -->
            <br />
            <!-- sidebar menu -->

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url("lipat1/listbrg")?>"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Lihat Data</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bar-chart-o"></i> Barang Jadi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                      <li><a href="<?php echo base_url('lipat1/listbrg')?>">Daftar Barang Jadi</a>
                      </li>
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
