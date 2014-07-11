<div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar-wrapper">

    <ul class="sidebar-nav">
      <li class="active"><a href="<?php print(base_url());?>dashboard"><i class="fa fa-dashboard"></i>&nbsp;<span class="left-resp-menu">Dashboard</span></a>
      </li>
      <li><a href="<?php print(base_url());?>projects"><i class="fa fa-cube"></i>&nbsp;<span class="left-resp-menu">Projects</span></a><span class="badge badge-resp">1</span>
      </li>
      <li><a href="#"><i class="fa fa-tasks"></i>&nbsp;<span class="left-resp-menu">Tasks</span></a><span class="badge badge-resp">8</span>
      </li>
      <li><a href="#"><i class="fa fa-users"></i>&nbsp;<span class="left-resp-menu">Team</span></a>
      </li>
      <li><a href="#"><i class="glyphicon glyphicon-stats"></i>&nbsp;<span class="left-resp-menu">Chart</span></a>
      </li>
      <li><a href="<?php print(base_url());?>comments"><i class="fa fa-comment"></i>&nbsp;<span class="left-resp-menu">Comments</span></a>
      </li>
      <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>&nbsp;<span class="left-resp-menu">Help</span></a>
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