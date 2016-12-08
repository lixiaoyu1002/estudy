<div class="bjui-pageHeader" style="background-color:#fefefe; border-bottom:none;">
<form data-toggle="ajaxsearch" data-options="{searchDatagrid:$.CurrentNavtab.find('#datagrid-test-filter')}">
    <fieldset>
        <legend style="font-weight:normal;">资讯搜索：</legend>
        <div style="margin:0; padding:1px 5px 5px;">
            <!-- <span>比赛ID：</span>
            <input type="text" name="obj.code" class="form-control" size="15"> -->
                
            <span>资讯标题：</span>
            <input type="text" name="obj.name" class="form-control" size="15">
                
            <div class="btn-group">
                <button type="submit" class="btn-green" data-icon="search">开始搜索！</button>
                <button type="reset" class="btn-orange" data-icon="times">重置</button>
            </div>
        </div>
    </fieldset>
</form>
</div>
<div class="bjui-pageContent">
    <table class="table table-bordered" id="datagrid-test-filter" data-toggle="datagrid" data-options="{
        height: '100%',
        showToolbar: true,
        toolbarItem: 'add,edit,del',
        jsonPrefix: 'obj',
        editMode: {dialog:{width:'800',height:500,title:'编辑信息',mask:true}},
        paging: {pageSize:60},
        showCheckboxcol: true,
        linenumberAll: true,
    }">
        <thead>
            <tr>
                <th align="center" width="90">资讯ID</th>
                <th align="center">资讯标题</th>
                <th align="center">新闻来源</th>
                <th align="center">发布时间</th>
                <th align="center">缩略图</th>
                <th align="center">操作</t
                h>
            </tr>
            <volist name="news" id="vo">
            <tr>
                <td>{$vo.newsid}</td>
                <td>{$vo.newstitle}</td>
                <td> {$vo.newssource}</td>
                <td> {$vo.newstime}</td>
                <td> {$vo.newsthumb}</td>
                <td>
                    <button type="button" class="btn-green" data-toggle="dialog" data-options="{id:'', url:'__MODULE__/news/newsetails/newsid/{$vo.newsid}', title:'{$vo.newstitle}', max:true}">查看</button>&nbsp;
                    <button type="button" class="btn-blue" data-toggle="dialog" data-options="{id:'', url:'__MODULE__/news/editnews/newsid/{$vo.newsid}', title:'修改文章：{$vo.newstitle}', max:true}">修改</button>&nbsp;
                    <button type="button" class="btn-red" data-toggle="alertmsg" data-options="{type:'confirm', msg:'你确定要删除吗？', okCall:function(){alert('删除成功！');}}">删除</button>
                </td>
            </tr>
            </volist>
        </thead>
    </table>
</div>