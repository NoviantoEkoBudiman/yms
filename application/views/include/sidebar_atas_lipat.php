<div class="top_nav">

  <div class="nav_menu">
    <nav class="" role="navigation">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo base_url() ?>bootstrap/images/user.png" alt="">
          </a>
          <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
            <?php $this->load->library('session'); ?>
            <li><a href="javascript:;"><?php echo $this->session->userdata('nmpet'); ?></a>
            </li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-green">@Anggota Lipat</span>
              </a>
            </li>
            <li><a href="<?php echo base_url() ?>login/logout"><i class="fa fa-sign-out pull-right"></i> Keluar</a>
            </li>
          </ul>
        </li>

        <li role="presentation" class="dropdown">
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span><span>John Smith</span><span class="time">3 mins ago</span></span>
                <span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span>
              </a>
            </li>
            <li>
              <div class="text-center">
                <a>
                  <strong>Lihat semua...</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
  </div>

</div>
