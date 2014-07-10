<div class=" navbar-collapse navbar-inverse navbar-fixed-top">
  <ul class="navbar navbar-left">
    <li class="sidebar-brand"><span class="avatar-top"><span class="avata-img"><img src="http://placehold.it/50x50"></span></span>
    </li>
    <span class="avatar-name">Admin</span>
  </ul>

  <ul class="nav navbar-nav navbar-right navbar-user">
    <li class="add-client pull-left"><a href="addclient"><button class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i><span class="add-client-btn">Add client</span></button></a></li>
    <li class="dropdown messages-dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li class="dropdown-header">7 New Messages</li>
        <li class="message-preview">
          <a href="#">
            <span class="avatar"><img src="http://placehold.it/50x50"></span>
            <span class="name">Roman Dobrynin:</span>
            <span class="message">Hey there, I wanted to ask you something...</span>
            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
          </a>
        </li>
        <li class="divider"></li>
        <li class="message-preview">
          <a href="#">
            <span class="avatar"><img src="http://placehold.it/50x50"></span>
            <span class="name">Roman Dobrynin:</span>
            <span class="message">Hey there, I wanted to ask you something...</span>
            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
          </a>
        </li>
        <li class="divider"></li>
        <li class="message-preview">
          <a href="#">
            <span class="avatar"><img src="http://placehold.it/50x50"></span>
            <span class="name">Roman Dobrynin:</span>
            <span class="message">Hey there, I wanted to ask you something...</span>
            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
          </a>
        </li>
        <li class="divider"></li>
        <li><a href="#">View Inbox <span class="badge" >7</span></a></li>
      </ul>
    </li>
    <li class="dropdown alerts-dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#">Default <span class="label label-default">Default</span></a></li>
        <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
        <li><a href="#">Success <span class="label label-success">Success</span></a></li>
        <li><a href="#">Info <span class="label label-info">Info</span></a></li>
        <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
        <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
        <li class="divider"></li>
        <li><a href="#">View All</a></li>
      </ul>
    </li>
    <li class="dropdown user-dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
        <?php print($user[0]['first_name'].' '. $user[0]['last_name'])?>
        <b class="caret"></b></a>
      <ul class="dropdown-menu dropdown-user">

        <li><a href="<?php print(base_url());?>profile"><i class="fa fa-user"></i>Profile</a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
        <li><a data-toggle="modal" href="#settings"><i class="fa fa-gear"></i> Settings</a></li>
        <?php if($user[0]['role']==4):?>
          <li><a href="users"><i class="fa fa-users"></i> Administer users</a></li>
        <? endif?>
        <li class="divider"></li>
        <li id="logout"><a href="logout"><i class="fa fa-power-off"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</div>