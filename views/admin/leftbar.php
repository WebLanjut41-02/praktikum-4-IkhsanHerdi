  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/template/back/dist') ?>/img/admin.png" class="img-circle" alt="User Image">
        </div>

        <div class="pull-left info">
          <?php  echo $this->session->userdata('data')['Username']; ?><br>
          (<?php  echo $this->session->userdata('data')['Role']; ?>)<br>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li <?php if($this->uri->segment(2)=="home"){echo "class='active'";} ?>>
              <a href="<?php echo site_url('admin/home/'); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>

            <li <?php if($this->uri->segment(2)=="akun"){echo "class='active'";} ?>>
              <a href="<?php echo site_url('admin/feedback_konsumen/'); ?>">
                <i class="fa fa-thumbs-o-up"></i> <span>FeedBack Konsumen</span></a>
            </li>

            <li <?php if($this->uri->segment(2)=="vendor"){echo "class='active'";} ?>>
              <a href="<?php echo site_url('admin/vendor/'); ?>">
                <i class="fa fa-building"></i> <span>Kelola Data Vendor</span></a>
            </li>
            
            <li hidden=""> <?php if($this->uri->segment(2)=="menu"){echo "class='active'";} ?>>
              <a href="<?php echo site_url('admin/menu/'); ?>">
                <i class="fa fa-cutlery"></i> <span>Kelola Data Menu Makanan</span></a>
            </li>

             <li hidden="hidden" <?php if($this->uri->segment(2)=="konsumen"){echo "class='active'";} ?>>
              <a href="<?php echo site_url('admin/konsumen/'); ?>">
                <i class="fa fa-users"></i> <span>Kelola Data Konsumen</span></a>
            </li>

             <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="transaksi"){echo "active menu-open";} ?>">
              <a href="#">
                <i class="fa fa-money"></i>
                <span>Kelola Transaksi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>

              <ul class="treeview-menu">
               <li <?php if($this->uri->segment(2)=="transaksi" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/transaksi/'); ?>"><i class="fa fa-money"></i> Data Pesanan</a></li>
               <li <?php if($this->uri->segment(2)=="transaksi" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/transaksi/pembayaran'); ?>"><i class="fa fa-money"></i> Data Pembayaran</a></li>

              </ul>
            </li>

             <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="deposit"){echo "active menu-open";} ?>">
              <a href="#">
                <i class="fa fa-user-circle-o"></i>
                <span>Kelola Deposit Vendor</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>

              <ul class="treeview-menu">
               <li <?php if($this->uri->segment(2)=="deposit" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/depositvendor/'); ?>"><i class="fa fa-circle-o"></i> Data Deposit Vendor</a></li>

                <li <?php if($this->uri->segment(2)=="deposit" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/depositvendor/historytarikdeposit/'); ?>"><i class="fa fa-circle-o"></i> Data Penarikan Deposit Vendor</a></li>

              </ul>
            </li>

             <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="transaksi"){echo "active menu-open";} ?>">
             <a href="#">
               <i class="fa fa-user-circle-o"></i>
               <span>Kelola Feedback & Rating</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>

             <ul class="treeview-menu">
              <li <?php if($this->uri->segment(2)=="feedback" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/feedback/'); ?>"><i class="fa fa-circle-o"></i> Data Feedback</a></li>
             </ul>
           </li>

           <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="transaksi"){echo "active menu-open";} ?>">
            <a href="#">
              <i class="fa fa-user-circle-o"></i>
              <span>Kelola Bank</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
             <li <?php if($this->uri->segment(2)=="feedback" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/bank/'); ?>"><i class="fa fa-circle-o"></i> Data Bank</a></li>
            </ul>
          </li>


          <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="transaksi"){echo "active menu-open";} ?>">
           <a href="#">
             <i class="fa fa-user-circle-o"></i>
             <span>Kelola Dompet Konsumen</span>
             <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
             </span>
           </a>

           <ul class="treeview-menu">
            <li <?php if($this->uri->segment(2)=="dompet" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/dompet/'); ?>"><i class="fa fa-circle-o"></i> Data Dompet</a></li>
           </ul>
         </li>

         <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="kurir"){echo "active menu-open";} ?>">
            <a href="#">
              <i class="fa fa-user-circle-o"></i>
              <span>Kelola Kurir</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
             <li <?php if($this->uri->segment(2)=="feedback" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/kurir/'); ?>"><i class="fa fa-circle-o"></i> Data Kurir</a></li>
            </ul>
          </li>

           <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="komplain"){echo "active menu-open";} ?>">
            <a href="#">
              <i class="fa fa-user-circle-o"></i>
              <span>Kelola Komplain</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
             <li <?php if($this->uri->segment(2)=="komplain" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/komplain/'); ?>"><i class="fa fa-circle-o"></i> Data Komplain</a></li>
            </ul>
          </li>

               <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="banner"){echo "active menu-open";} ?>">
              <a href="#">
                <i class="fa fa-user-circle-o"></i>
                <span>Kelola Banner</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>

              <ul class="treeview-menu">
               <li <?php if($this->uri->segment(2)=="banner" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/banner/'); ?>"><i class="fa fa-circle-o"></i> Data Banner</a></li>

              </ul>
            </li>

            <li hidden="hidden" class="treeview <?php if($this->uri->segment(2)=="banner"){echo "active menu-open";} ?>">
           <a href="#">
             <i class="fa fa-user-circle-o"></i>
             <span>Kelola Konten Statis</span>
             <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
             </span>
           </a>

           <ul class="treeview-menu">
            <li <?php if($this->uri->segment(2)=="banner" && $this->uri->segment(3)==""){echo "class='active'";} ?>><a href="<?php echo site_url('admin/konten_statis/'); ?>"><i class="fa fa-circle-o"></i> Data Konten Statis</a></li>

           </ul>
         </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
