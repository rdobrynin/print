<!-- Page content -->
<div id="page-content-wrapper">
  <div class="content-header">
    <h1>
      <a id="menu-toggle" href="#" class="btn btn-default"><i
          class="icon-reorder"></i></a>
      Team
    </h1>
  </div>
  <!-- Keep all page content within the page-content inset div! -->
  <div class="page-content">
    <div class="row">
      <?php foreach ($users as $ak => $u): ?>
        <ul>
          <?php if (($u['status'] == 1)): ?>
            <li><span
                class="label label-xs label-success">online</span>&nbsp;<?php print($u['first_name'] . ' ' . $u['last_name']); ?>
            </li>
          <?php else: ?>
            <li><span
                class="label label-xs label-default">offline</span>&nbsp;<?php print($u['first_name'] . ' ' . $u['last_name']); ?>
            </li>
          <?php endif; ?>
        </ul>
      <?php endforeach ?>
    </div>
    <p id="back-top">
      <a href="#top"><span></span><i style="font-size: 30px;"
                                     class="fa fa-arrow-circle-up"></i><span></span></a>
    </p>

  </div>
</div>
</div>



