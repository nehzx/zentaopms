<?php
/**
 * The edit view of doc module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Jia Fu <fujia@cnezsoft.com>
 * @package     doc
 * @version     $Id: edit.html.php 975 2010-07-29 03:30:25Z jajacn@126.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php if($doc->contentType == 'html')     include '../../common/view/kindeditor.html.php';?>
<?php if($doc->contentType == 'markdown') include '../../common/view/markdown.html.php';?>
<?php js::set('needUpdateContent', $doc->content != $doc->draft);?>
<?php js::set('confirmUpdateContent', $lang->doc->confirmUpdateContent);?>
<?php js::set('docID', $doc->id);?>
<?php js::set('draft', $doc->draft);?>
<?php js::set('maxCount', $this->config->maxCount);?>
<div id='mainContent' class='main-content'>
  <div class='center-block'>
    <div class='main-header'>
      <h2>
        <span class='label label-id'><?php echo $doc->id;?></span>
        <?php echo html::a($this->createLink('doc', 'view', "docID=$doc->id"), $doc->title, '', "title='$doc->title'");?>
        <small> <?php echo $lang->arrow . ' ' . $lang->doc->edit;?></small>
      </h2>
    </div>
    <form class='load-indicator main-form form-ajax' method='post' enctype='multipart/form-data' id='dataform'>
      <table class='table table-form'>
        <tr>
          <th class='w-110px'><?php echo $lang->doc->lib;?></th>
          <td> <?php echo html::select('lib', $libs, $doc->lib, "class='form-control chosen' onchange=loadDocModule(this.value)");?> </td><td></td>
        </tr>
        <tr>
          <th><?php echo $lang->doc->module;?></th>
          <td>
            <span id='moduleBox'><?php echo html::select('module', $moduleOptionMenu, $doc->module, "class='form-control chosen'");?></span>
          </td><td></td>
        </tr>
        <tr>
          <th><?php echo $lang->doc->title;?></th>
          <td colspan='2'><?php echo html::input('title', $doc->title, "class='form-control' required");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->doc->keywords;?></th>
          <td colspan='2'><?php echo html::input('keywords', $doc->keywords, "class='form-control' placeholder='{$lang->doc->keywordsTips}'");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->doc->type;?></th>
          <td>
            <?php
            $typeList = $lang->doc->types;
            if(!isset($lang->doc->types[$doc->type])) $typeList = $lang->doc->typeList;
            echo html::radio('type', array($doc->type => zget($typeList, $doc->type)), $doc->type);
            ?>
          </td>
        </tr>
        <tr id='contentBox' <?php if($doc->type == 'url') echo "class='hidden'"?>>
          <th><?php echo $lang->doc->content;?></th>
          <td colspan='2'><?php echo html::textarea('content', $doc->type == 'url' ? '' : htmlSpecialString($doc->content), "style='width:100%; height:200px'") . html::hidden('contentType', $doc->contentType);?></td>
        </tr>
        <tr id='urlBox' <?php if($doc->type != 'url') echo "class='hidden'"?>>
          <th><?php echo $lang->doc->url;?></th>
          <td colspan='2'><?php echo html::input('url', $doc->type == 'url' ? $doc->content : '', "class='form-control'");?></td>
        </tr>
        <tr id='fileBox'>
          <th><?php echo $lang->doc->files;?></th>
          <td colspan='2'><?php echo $this->fetch('file', 'buildform');?></td>
        </tr>
        <tr>
          <th><?php echo $lang->doc->mailto;?></th>
          <td colspan="2">
            <div class="input-group">
              <?php
              echo html::select('mailto[]', $users, $doc->mailto, "multiple class='form-control picker-select'");
              echo $this->fetch('my', 'buildContactLists');
              ?>
            </div>
          </td>
        </tr>
        <tr>
          <th><?php echo $lang->doclib->control;?></th>
          <td colspan='2'>
            <?php $acl = $lib->acl == 'default' ? 'open' : $lib->acl;?>
            <?php echo html::radio('acl', $lang->doc->aclList, $acl, "onchange='toggleAcl(this.value, \"doc\")'")?>
            <span class='text-info' id='noticeAcl'><?php echo $lang->doc->noticeAcl['doc'][$acl];?></span>
          </td>
        </tr>
        <tr id='whiteListBox' class='hidden'>
          <th><?php echo $lang->doc->whiteList;?></th>
          <td colspan='2'>
            <div class='input-group w-p100'>
              <span class='input-group-addon groups-addon'><?php echo $lang->doclib->group?></span>
              <?php echo html::select('groups[]', $groups, $doc->groups, "class='form-control picker-select' multiple")?>
            </div>
            <div class='input-group w-p100'>
              <span class='input-group-addon'><?php echo $lang->doclib->user?></span>
              <?php echo html::select('users[]', $users, $doc->users, "class='form-control picker-select' multiple")?>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan='3' class='text-center form-actions'>
            <?php
            echo html::hidden('editedDate', $doc->editedDate);
            echo html::submitButton();
            echo html::backButton($lang->goback, "data-app='{$app->tab}'");
            ?>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
<?php js::set('noticeAcl', $lang->doc->noticeAcl['doc']);?>
<?php include '../../common/view/footer.html.php';?>
