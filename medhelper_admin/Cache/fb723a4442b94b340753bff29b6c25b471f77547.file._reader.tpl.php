<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-17 16:53:59
         compiled from "/private/var/www/html/medhelper_admin/Tpl/website/../public/_reader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3195395405763baa77f5845-76454799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb723a4442b94b340753bff29b6c25b471f77547' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/website/../public/_reader.tpl',
      1 => 1466151213,
    ),
  ),
  'nocache_hash' => '3195395405763baa77f5845-76454799',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal fade" id='readerModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">编辑文章</h4>
            </div>
            <div class="modal-body" id='reader_body'>

                <div class="form-group" >
                    <label for="title">文章标题</label>
                    <input type="text" class="form-control" id="title" placeholder="请输入文章标题">
                </div>

                <div class="form-group" >
                    <label for="auther">文章作者</label>
                    <input type="text" class="form-control" id="auther" placeholder="请输入文章作者">
                </div>

                <div class="form-group" >
                    <label for="article_content">文章内容</label>
                    <div class="article_content" id='article_content' style='width:300px;'></div>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary">保存文章</button>

                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    
    $(function(){

        $('#article_content').summernote({

            height: 300

        });

    })
</script>