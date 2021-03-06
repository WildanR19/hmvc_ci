<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><span class="flaticon-chef mr-1"></span>Wii<br><small>Resto</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php if($this->uri->segment(1)=="user" && $this->uri->segment(2)!="menu"){echo "active";}?>"><a href="<?php echo base_url('user'); ?>" class="nav-link">Home</a></li>
	          <li class="nav-item <?php if($this->uri->segment(2)=="menu"){echo "active";}?>"><a href="<?php echo base_url('user/menu'); ?>" class="nav-link">Menu</a></li>
			  <li class="nav-item"><a href="<?php echo base_url('user/contact'); ?>" class="nav-link">Contact</a></li>
			  <li class="nav-item dropdown">
				<a class="btn nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span><?php echo ucfirst($this->session->userdata('customer')); ?></span>
					<i class="fas fa-user fa-sm fa-fw mr-2"></i>
				</a>
				<!-- Dropdown - User Information -->
				<div class="dropdown-menu" aria-labelledby="userDropdown">
					<a class="dropdown-item" id="gantimeja">
						<i class="fas fa-chair fa-sm fa-fw mr-2"></i>Ganti Meja
					</a>
					<a class="dropdown-item" id="logout">
						<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Logout
					</a>
				</div>
			  </li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->