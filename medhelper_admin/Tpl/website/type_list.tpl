<div class="modal fade" id='mainTypeModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{$name}分类</h4>
            </div>
            <div class="modal-body" id='preview_body'>
                <div style='max-height: 300px;padding-left: 25px;overflow-y: auto;' class='form-inline'>
                    {foreach from=$data item=datas}
                    <label class="radio-inline" style='width:100px;height:50px;padding:0;margin:0;'>
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="{$datas.id}"><span id='main_type_{$datas.id}' style='display:inline-block;width:100px;overflow: hidden;'>{$datas.name}</span>
                    </label>
                    {/foreach}
                </div>
                
                <div style='height:10px;'>&nbsp;</div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-default" onclick='base.addType({$type},{$level})'>添加分类</button>

                    <button type="button" class="btn btn-default" onclick='websiteType.addType({$type},{$level})'>确定</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script>
$(function() {
    $('#mainTypeModal').on('hidden.bs.modal', function(e) {
        
       base.removeMainType('mainTypeModal');

    })
});
</script>