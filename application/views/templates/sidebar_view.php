<div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <?php $url_arg = $this->uri->segment(1);?>

    <ul class="sidebar-nav">
      <li class="<? $url_arg=='dashboard' ? print('active') : print('') ?>"><a href="<?php print(base_url());?>dashboard"><i class="fa fa-dashboard"></i>&nbsp;<span class="left-resp-menu"><?php print(lang('menu_dashboard')); ?></span></a>
      </li>
      <?php if(!empty($client)):?>
      <li class="<? $url_arg=='clients' ? print('active') : print('') ?>"><a href="<?php print(base_url());?>clients"><i class="fa fa-briefcase"></i>&nbsp;<span class="left-resp-menu"><?php print(lang('menu_clients')); ?></span></a>
        <?php endif ?>
      <li class="<? $url_arg=='projects' ? print('active') : print('') ?>"><a href="<?php print(base_url());?>projects"><i class="fa fa-cube"></i>&nbsp;<span class="left-resp-menu"><?php print(lang('menu_projects')); ?></span></a><span class="badge badge-resp">3</span>
      </li>
      <li class="<? $url_arg=='tasks' ? print('active') : print('') ?>"><a href="#"><i class="fa fa-tasks"></i>&nbsp;<span class="left-resp-menu"><?php print(lang('menu_tasks')); ?></span></a><span class="badge badge-resp">4</span>
      </li>
      <li class="<? $url_arg=='team' ? print('active') : print('') ?>"><a href="<?php print(base_url());?>team"><i class="fa fa-users"></i>&nbsp;<span class="left-resp-menu"><?php print(lang('menu_team')); ?></span></a>
      </li>
      <li class="<? $url_arg=='charts' ? print('active') : print('') ?>"><a href="<?php print(base_url());?>charts"><i class="glyphicon glyphicon-stats"></i>&nbsp;<span class="left-resp-menu"><?php print(lang('menu_chart')); ?></span></a>
      </li>
      <li class="<? $url_arg=='comments' ? print('active') : print('') ?>"><a href="<?php print(base_url());?>comments"><i class="fa fa-comment"></i>&nbsp;<span class="left-resp-menu"><?php print(lang('menu_comments')); ?></span></a>
      </li>
      <li class="<? $url_arg=='help' ? print('active') : print('') ?>"><a href="#"><i class="glyphicon glyphicon-question-sign"></i>&nbsp;<span class="left-resp-menu"><?php print(lang('menu_help')); ?></span></a>
      </li>

      <!--MINI INBOX-->
      <div class="mini-inbox">
        <div class="alert inbox">
          <button type="button" class="close" data-dismiss="alert">
            ×
          </button>

          <a href="javascript:void(0)">
            <i class="fa fa-comment"></i>
            From: Evgeni S...
          </a>
          <span class="message-mini">Andrei, <a href="">close</a> Task (111)...</span>
        </div>
        <!-- inbox message 2-->
        <div class="alert inbox">
          <button type="button" class="close" data-dismiss="alert">
            ×
          </button>
          <a href="javascript:void(0)">
            <i class="fa fa-comment"></i>
            Re: Task (111)...
          </a>
          <span class="message-mini">Jevgeni, need more time...</span>
        </div>
        <!-- inbox message 3-->
        <div class="alert inbox last-child">
          <button type="button" class="close" data-dismiss="alert">
            ×
          </button>
          <a href="javascript:void(0)">
            <i class="fa fa-bell"></i>
            Project (123) has ...
          </a>
          <span class="message-mini">Project (123) has been completed..</span>
        </div>

      </div>
      <!--END MINI INBOX-->

    </ul>
  </div>