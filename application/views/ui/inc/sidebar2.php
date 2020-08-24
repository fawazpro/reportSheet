<aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <div class="user-profile" style="background-image: url(<?= base_url('assets/ui/assets/images/user-bg.jpg')?>);">
                        <div class="user-name dropdown-trigger" data-target='dropdownuser'>
                            <h6 class="white-text name"><i class="material-icons m-r-10">account_circle</i> <span class="hidden">Admin</span> <i class="material-icons ml-auto hidden">expand_more</i></h6>
                        </div>
                        <ul id='dropdownuser' class='dropdown-content'>
                            
                        </ul>
                    </div>
                </li>
                <li>
                    <ul class="collapsible p-t-30">
                        <li>
                            <a href="<?= base_url('admin/studUpdate') ?>" class="collapsible-header"><i class="material-icons">group</i><span class="hide-menu">Student Update</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/scores') ?>" class="collapsible-header"><i class="material-icons">lightbulb_outline</i><span class="hide-menu">Update Scores</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>