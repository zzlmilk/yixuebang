<script type="text/javascript">
$(function() {

    $('#previewModal>img').css('max-width', '100%');

    $('#previewModal>img').css('width', '100%');

})
</script>
<style type="text/css">
#previewModal>img {
    margin: 0 auto;
}


</style>
<div class="modal fade" id='previewModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">该预览图以iphone6为范例</h4>
            </div>
            <div class="modal-body" id='preview_body' style='width:375px;overflow: hidden;font-size:15px;min-height: 667px;'>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->