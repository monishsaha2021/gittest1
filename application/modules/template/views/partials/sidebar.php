========== Left Sidebar Start ========== -->
<?php 
    
    //getting user data
    $user = $this->ion_auth->user()->row(); 

    //getting all user perssions
    $users_permissions = group_priviliges();

    //pr($users_permissions[1]['module']->perm_name);exit();

    // $new_arr = array();

    // foreach ($users_permissions as $key => $value) 
    // {
    //     $new_arr[$value] = $value;
    // }

?>
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="/">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> Dashboard </span>
                    </a>
                </li>

                <?php 

                foreach ($users_permissions as $key => $value) 
                {
                ?>

                <!-- <li>
                    <a href="/">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> <?=$value['module']->perm_name?> </span>
                    </a>
                </li> -->

                <li>
                    <a <?php if(count($value['sub_modules'])>0){ ?>
                        href="javascript: void(0);"
                        <?php }else{ ?> 
                        href="<?=bs($value['module']->perm_link)?>"
                        <?php } ?>
                        class="has-arrow">
                        <i data-feather="share-2"></i>
                        <span data-key="t-multi-level"><?=$value['module']->perm_name?></span>
                    </a>

                    <?php if(count($value['sub_modules'])>0){ ?>
                    <ul class="sub-menu" aria-expanded="true">

                        <?php 
                        foreach ($value['sub_modules'] as $key2 => $sub_module) 
                        {
                        ?>  
                        <li>
                            <a 
                                <?php if(isset($value['sub_childModules'])): ?>
                                href="javascript: void(0);" 
                                class="has-arrow"
                                <?php else: ?> 
                                href="<?=bs($sub_module->perm_sub_link)?>" 
                                <?php endif; ?> 
                                data-key="t-level-1-2"><?= ucwords($sub_module->perm_sub_name) ?></a>
                            
                            <?php if(isset($value['sub_childModules'])>0): ?>
                            <ul class="sub-menu" aria-expanded="true">
                                <?php 
                                foreach ($value['sub_childModules'] as $key3 => $sub_childModule) 
                                {
                                ?>
                                <li>
                                    <a 
                                        href="<?=bs($sub_childModule->perm_sub_link)?>"
                                        data-key="t-level-2-1"><?= ucwords($sub_childModule->perm_sub_name) ?></a></li>
                                <?php } //end for ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                    <?php } //end for?>
                    </ul>
                    <?php } ?>

                </li>

                <?php 
                }
                ?>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End