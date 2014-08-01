
<div class="container">
    <div id="page-content-wrapper">
        <div class="page-content inset">
            <div id="wrapper">
                <a class="btn" data-toggle="confirmation-inline"  data-animation="true" data-original-title="qwq" title="Delete ?">test</a>
            </div>
            <pre>
{$current_language|@var_dump}
                </pre>
        </div>
    </div>
</div>

<script>
    {literal}
    $(function () {
        $('[data-toggle="confirmation-inline"]').confirmation(
                {
                    placement:'right',
                    btnOkClass:'btn-danger btn-xs',
                    btnCancelClass:'btn-default btn-xs',
                    singleton:true,
                    onConfirm: function(){
                        alert('test');
                    },
                    onCancel: function(){
                        $('[data-toggle="confirmation-inline"]').confirmation('hide');
                    }
                }
        );
    });

    {/literal}
</script>
