<div class="bjui-pageContent">

<form action="__MODULE__/Article/add" id="j_custom_form" data-toggle="validate" data-alertmsg="false" method="post">
    <input type="hidden" name="custom.id" value="edce142bc2ed4ec6b623aacaf602a4de">
    <div class="bjui-row col-3">
        <label class="row-label">资讯标题</label>
        <div class="row-input required">
            <input type="text" name="articletitle" id="j_custom_name" value="" data-rule="required"></div>
         <label class="row-label">资讯来源</label>
        <div class="row-input required">
            <input type="text" name="articleauthor" id="j_custom_name" value="" data-rule="required"></div>
        <label class="row-label">发布日期</label>
        <div class="row-input required">
            <input type="text" name="articletime" id="j_custom_issuedate" value="2016-11-11" data-toggle="datepicker" data-rule="required;date"></div>
        <br>
        <label class="row-label">资讯缩略图</label>
        <div class="row-input">
            <input type='file'  name='photo'>
            <!-- <textarea name="articleintroduction" id="j_form_content" class="j-content" style="width: 500px;height: 100px;" ></textarea> -->
        </div>
                <br>
        <br>
        <br>


        <label class="row-label">资讯正文</label>
        <div class="row-input">
            <textarea name="articlecontent" id="j_form_content" class="j-content" style="width: 700px;height: 50px;" data-toggle="kindeditor" data-minheight="150"></textarea>
        </div>

    </div>
        <br>
        <br>
    <!-- 内容区 -->
</div>
<div class="bjui-pageFooter">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn-default btn" data-icon="save"><i class="fa fa-save"></i>提交</button>
&nbsp;&nbsp;
<button type="submit" class="btn-default btn" data-icon="publish"><i class="fa fa-save"></i>发布</button>
&nbsp;&nbsp;
<button type="button" class="btn-close btn" data-icon="close"><i class="fa fa-close"></i> 取消</button>
</div>


</form>

