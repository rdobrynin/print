<!-- Page content -->


    <div id="page-content-wrapper">
        <div class="page-content inset">
    <div class="row">

        <div>
            <a href='langswitch/switchLanguage/english'>English</a>
            <a href='<?php print(base_url())?>langswitch/switchLanguage/russian'>Russian</a>
        </div>
        <?php print($this->session->userdata('site_lang')); ?>
        <?php print(lang('hello')); ?>
    </div>
            </div>
        </div>
</div>



