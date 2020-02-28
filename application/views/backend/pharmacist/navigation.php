<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="assets/images/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
    <div class="sidebar-user-info">

        <div class="sui-normal">
            <a href="#" class="user-link">
                <img src="<?php echo $this->crud_model->get_image_url($this->session->userdata('login_type'), $this->session->userdata('login_user_id'));?>" alt="" class="img-circle" style="height:44px;">

                <span><?php echo get_phrase('welcome'); ?>,</span>
                <strong><?php
                    echo $this->db->get_where($this->session->userdata('login_type'), array($this->session->userdata('login_type') . '_id' =>
                        $this->session->userdata('login_user_id')))->row()->name;
                    ?>
                </strong>
            </a>
        </div>

    </div>


    <div style="border-top:1px solid rgba(69, 74, 84, 0.7);"></div>	
    <ul id="main-menu" class="">

        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?pharmacist">
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>
        
        <li class="<?php if ($page_name == 'show_all_prescription') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?pharmacist/prescription">
                <span><?php echo 'prescription'; ?></span>
            </a>
        </li>
        

        
        <li class="<?php if ($page_name == 'edit_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?pharmacist/profile">
                <span><?php echo get_phrase('profile'); ?></span>
            </a>
        </li>

    </ul>

</div>