<?php include('head.php');?>
<div id="jGrowl" class="top-right jGrowl">
  <div class="jGrowl-notification"></div>
  <div class="notification jGrowl-notification ui-state-highlight with-icon"
       style="display: block;"><span class="notification-icon"></span><span
      class="closebox">×</span>

    <h3>Welcome to Brilliant project management</h3>

    <div class="jGrowl-message">This <strong>fluid</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, molestias quod? Amet deleniti eum explicabo fugit ipsa, minima nam nesciunt nihil. Aut dolorem mollitia praesentium quae reprehenderit? Doloremque inventore, reiciendis!
    </div>
  </div>
</div>

<div class=" navbar-collapse navbar-inverse navbar-fixed-top">
  <ul class="navbar navbar-left">
    <li class="sidebar-brand"><span class="avatar-top"><span class="avata-img"><img src="http://placehold.it/50x50"></span></span>
    </li>
    <span class="avatar-name">Admin</span>
  </ul>

  <ul class="nav navbar-nav navbar-right navbar-user">
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
        <li><a href="<?php print(site_url())?>dashboard/profile"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
        <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
        <li class="divider"></li>
        <li id="logout"><a href="logout"><i class="fa fa-power-off"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar-wrapper">

    <ul class="sidebar-nav">
      <li class="active"><a href="#"><i class="fa fa-dashboard"></i>&nbsp;<span class="left-resp-menu">Dashboard</span></a>
      </li>
      <li><a href="#"><i class="fa fa-cube"></i>&nbsp;<span class="left-resp-menu">Projects</span></a><span class="badge badge-resp">1</span>
      </li>
      <li><a href="#"><i class="fa fa-tasks"></i>&nbsp;<span class="left-resp-menu">Tasks</span></a><span class="badge badge-resp">8</span>
      </li>
      <li><a href="#"><i class="fa fa-users"></i>&nbsp;<span class="left-resp-menu">Team</span></a>
      </li>
      <li><a href="#"><i class="glyphicon glyphicon-stats"></i>&nbsp;<span class="left-resp-menu">Chart</span></a>
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

  <!-- Page content -->
  <div id="page-content-wrapper">
    <div class="content-header">
      <h1>
        <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
        PRM Brilliant
      </h1>
    </div>


    <!-- Keep all page content within the page-content inset div! -->
    <div class="page-content inset">
      <div class="row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad architecto asperiores cupiditate dicta doloremque doloribus eius eos excepturi incidunt ipsa, modi nam neque odit pariatur quis tempora tempore, totam! Est laudantium, nulla? Aut eaque est hic magnam molestiae nesciunt nihil porro similique sunt voluptates? Ab assumenda delectus optio placeat, saepe sint veritatis! Amet, aut corporis deleniti exercitationem fugit hic id impedit iusto minus mollitia obcaecati optio, quibusdam quod recusandae repellendus soluta ut velit veritatis voluptatem voluptatum! Ad architecto asperiores corporis deleniti dolor doloremque, eligendi illum laudantium molestiae necessitatibus nostrum quae quaerat qui. Commodi deserunt exercitationem mollitia nisi pariatur placeat provident rem similique velit vero. Assumenda, aut beatae ea earum est, eveniet itaque molestiae nam natus non nostrum, quo repudiandae sunt suscipit ut vel vero voluptatem? Deserunt excepturi impedit laudantium nostrum quasi quidem similique veniam. Aliquid amet beatae distinctio excepturi laudantium possimus quia sed tempore tenetur vitae? Ex explicabo impedit itaque laborum, maxime provident qui quo sapiente voluptatem voluptates. Aliquid, amet culpa distinctio dolorem explicabo iusto neque sed tempore. Animi, aperiam architecto blanditiis cupiditate deserunt et facere harum ipsam maxime minima molestias nemo nisi non obcaecati omnis quo, sit soluta voluptas? Architecto delectus enim expedita facilis iste quam sunt voluptatum. Assumenda consequatur deleniti doloremque dolores dolorum ea facere illo impedit incidunt ipsam minus quae quam, quasi quod reiciendis repellat repellendus sequi suscipit tempora voluptas! Ab doloribus dolorum ducimus itaque libero omnis praesentium tenetur ut! Cupiditate delectus id ipsum iusto veritatis. Doloremque doloribus ducimus ex facilis harum modi molestias mollitia, quisquam rerum temporibus. Ab doloremque dolorum est eum, laboriosam molestias quidem repudiandae! Cumque debitis est odit quae voluptatibus! Accusamus, adipisci alias, asperiores cum debitis deleniti dolores eaque eius facere id laborum laudantium libero mollitia neque nostrum possimus sint vero voluptate! Ipsa odio repudiandae tempore ullam vitae. Adipisci commodi dignissimos, eligendi magni nesciunt obcaecati pariatur qui vero. Adipisci asperiores eveniet fugiat iure molestias quisquam repellat, voluptatum! Blanditiis cum debitis dignissimos dolorum earum explicabo harum illo illum ipsum iste maxime nisi praesentium quisquam, reiciendis reprehenderit, temporibus unde voluptatum. Accusamus ad autem commodi cupiditate delectus dignissimos doloremque, explicabo fugiat id inventore ipsam, ipsum laborum minima modi nemo neque porro quo sed temporibus tenetur totam ullam unde. Accusantium beatae consectetur eius id magni molestiae odio quaerat similique tempora tempore! Alias, asperiores aspernatur dolor dolores ea eum fuga in, incidunt iure perferendis quos sed vitae voluptate? Asperiores eaque fugit quaerat repellat voluptate. At dolorem, ducimus excepturi expedita harum iste laboriosam maxime nobis repellat, sapiente sit soluta sunt tempore velit, veritatis. Deleniti dignissimos eligendi enim incidunt itaque minima totam. Accusamus aliquid, deleniti eaque enim esse ipsum iusto molestias neque quidem quo reprehenderit sunt totam ullam. Aliquam, aperiam consequuntur cupiditate debitis deserunt earum eligendi id praesentium quia quos repellat, sit suscipit totam ullam voluptatum? Aliquid doloremque iusto necessitatibus quisquam sequi? Aspernatur dicta dolorum ducimus eius eos eveniet fuga impedit ipsa, neque, odit optio placeat quasi quo quos ratione recusandae saepe sequi sit tempore totam ullam ut vel velit. Consequatur earum hic iste magni molestiae nihil officia pariatur quis ullam voluptate! Ab accusamus alias blanditiis corporis culpa cumque cupiditate distinctio dolore doloribus eveniet facilis id incidunt ipsam nobis odit, pariatur perferendis qui, quo repudiandae, sequi similique sit velit veritatis vero voluptatem. Ab aliquid consequuntur cum deleniti dolorum eaque eligendi eveniet ex impedit ipsa ipsam laboriosam laborum nam, natus necessitatibus, nemo nihil omnis possimus quis quo reprehenderit, velit vitae voluptas voluptate voluptatum? Aliquam animi autem consectetur consequuntur culpa, deleniti dolor doloremque ea eligendi error exercitationem expedita fugit id incidunt ipsam ipsum laboriosam modi nemo nisi nulla obcaecati quae quaerat quas, quod recusandae, saepe similique sint unde vel vitae? Accusantium adipisci asperiores assumenda at corporis dolore ducimus ea facere inventore laborum nisi nobis non nostrum odio officiis, quos rerum sint ullam. Beatae delectus, error illo maxime neque quisquam sapiente temporibus totam. A assumenda dolor eaque neque optio quaerat, recusandae soluta voluptatem. Accusamus atque, facilis iure pariatur perspiciatis ratione? Atque dolorem reprehenderit sit! Autem culpa cupiditate dolor dolore ea earum eligendi exercitationem expedita hic incidunt itaque magni, quasi rem rerum tenetur, ut veniam voluptatibus. Beatae dicta doloremque explicabo fugiat libero neque non perspiciatis quod sit unde! Animi atque consequuntur explicabo ipsa iure obcaecati officia quam totam! A accusantium asperiores aspernatur blanditiis deserunt est labore nobis odio omnis possimus, rerum totam ut voluptatibus. Cupiditate debitis, eligendi error excepturi harum, illum iste, libero minima mollitia quos ratione tempore unde. Amet deserunt dignissimos facilis labore nisi odit, omnis placeat qui quisquam recusandae reiciendis repellat reprehenderit sint tempore temporibus! Assumenda atque eius enim est magnam nam natus nisi odit, quasi quo quos vel voluptatibus! A adipisci aliquam at cumque deleniti, dolorum id laboriosam laborum, minima minus, modi placeat porro repellendus sapiente similique. Beatae eaque excepturi inventore iste nihil, reiciendis rerum saepe. Autem dicta ducimus et! Animi dolores earum eius ex itaque nihil pariatur perferendis, quod recusandae sed. Amet corporis dolore earum qui. Animi atque commodi culpa deserunt dolorem doloremque eius eligendi eos, est eum excepturi illum incidunt ipsum libero modi molestias nihil nisi nobis non placeat porro provident quibusdam quisquam reiciendis repellendus, suscipit, ullam velit vitae voluptatem voluptatibus. Aliquid aspernatur at cupiditate deleniti distinctio dolores eaque earum est ex facere harum illo illum in inventore iusto magnam minus placeat quas qui reiciendis saepe sunt tempora temporibus unde vel voluptas, voluptates? Beatae consequatur magni natus nemo nisi placeat quo reiciendis sit, voluptatum. Accusamus architecto at dolorem eum eveniet impedit incidunt ipsam minus nihil odio officia, praesentium quas quia quisquam reiciendis reprehenderit saepe unde voluptas voluptatem, voluptates. A ad aspernatur ipsam nobis qui? Ab accusamus beatae consequatur, consequuntur dolore est fuga natus, nobis pariatur suscipit vel veniam voluptate voluptatem. Alias animi beatae cupiditate dolor dolorem doloribus facilis itaque, laboriosam natus necessitatibus nesciunt perspiciatis praesentium provident quasi repudiandae suscipit tenetur! Blanditiis cumque dignissimos illum, iure odit repellat similique. Aperiam architecto aspernatur beatae delectus dicta est eum exercitationem laudantium libero maxime, mollitia nostrum odio praesentium provident quae quia quod similique sunt tenetur vel! Cupiditate numquam, sapiente! Cum in incidunt laudantium neque quaerat quod quos ratione rerum veniam voluptate! Ullam, voluptatibus?</div>
      <p id="back-top">
        <a href="#top"><span></span><i style="font-size: 30px;" class="fa fa-arrow-circle-up"></i><span></span></a>
      </p>

    </div>
  </div>

</div>
<?php include('footer.php');?>
