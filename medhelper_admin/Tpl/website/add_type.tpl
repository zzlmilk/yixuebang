<div class="modal fade" id='mainTypeModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加{$name}分类</h4>
            </div>
            <div class="modal-body" id='preview_body'>
                <div class='form-inline'>
                    <div class="form-group">
                        <label for="name">分类名称</label>
                        <input type="text" class="form-control" id="name" placeholder="请输入分类名称" style='width:100%;'>
                        <p style='color: red;font-size: 14px;' id='name_error'></p>
                    </div>
                    {if $level == 1}
                    <div class="form-group">
                        <label for="img_file">分类缩略图</label>
                        <input id='img_file' name='img_file' type="file" >
                        <p style='color: red;font-size: 14px;' id='img_file_error'></p>
                    </div>
                    {/if}
                </div>
                <div style='height:10px;'>&nbsp;</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick='base.saveType({$type},{$level})'>确定</button>
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