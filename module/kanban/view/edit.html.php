<?php
/**
 * The edit file of kanban module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2021 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Mengyi Liu <liumengyi@easycorp.ltd>
 * @package     kanban
 * @version     $Id: edit.html.php 935 2021-12-09 16:15:24Z $
 * @link        https://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php js::set('enableImport', $enableImport);?>
<?php js::set('vision', $this->config->vision);?>
<div id='mainContent' class='main-content'>
  <div class='main-header'>
    <h2><?php echo $lang->kanban->edit;?></h2>
  </div>
  <form class='form-indicator main-form form-ajax' method='post' enctype='multipart/form-data' id='dataform'>
    <table class='table table-form'>
      <tr>
        <th><?php echo $lang->kanban->space;?></th>
        <td><?php echo html::select('space', $spacePairs, $kanban->space, "class='form-control chosen'");?></td>
      </tr>
      <tr>
        <th><?php echo $lang->kanban->WIPCount;?></th>
        <td><?php echo html::radio('showWIP', $lang->kanban->showWIPList, $kanban->showWIP);?></td>
        <td></td>
      </tr>
      <tr>
        <th><?php echo $lang->kanban->name;?></th>
        <td><?php echo html::input('name', $kanban->name, "class='form-control'");?></td>
      </tr>
      <?php if($type != 'private'):?>
      <tr>
        <th><?php echo $lang->kanban->owner;?></th>
        <td><?php echo html::select('owner', $users, $kanban->owner, "class='form-control chosen' data-drop_direction='down'");?></td>
      </tr>
      <tr>
        <th><?php echo $lang->kanban->team;?></th>
        <td colspan='2'>
          <div class="input-group">
            <?php echo html::select('team[]', $users, $kanban->team, "class='form-control picker-select' multiple data-dropDirection='bottom'");?>
          </div>
        </td>
      </tr>
      <?php endif;?>
      <tr>
        <th class='columnWidth'><?php echo $lang->kanban->columnWidth;?></th>
        <td><?php echo nl2br(html::radio('fluidBoard', $lang->kanbancolumn->fluidBoardList, $kanban->fluidBoard));?></td>
      </tr>
      <?php if($laneCount > 1):?>
      <tr>
        <th id='c-name'><?php echo $lang->kanban->laneHeight;?></th>
        <td colspan='2' class='laneHeightBox'><?php echo nl2br(html::radio('heightType', $lang->kanbanlane->heightTypeList, $heightType, "onclick='setCardCount(this.value);'"));?></td>
      </tr>
      <tr class="hidden" id='cardBox'>
        <th class='c-count'><?php echo $lang->kanban->cardCount;?></th>
        <td><?php echo html::input('displayCards', $displayCards, "class='form-control' required placeholder='{$lang->kanban->cardCountTip}'  autocomplete='off'");?></td>
      </tr>
      <?php endif;?>
      <tr>
        <th rowspan='2'><?php echo $lang->kanban->import?></th>
        <td colspan='2' class='importBox'><?php echo nl2br(html::radio('import', $lang->kanban->importList, $enableImport));?></td>
      </tr>
      <tr>
        <td colspan='2' class='objectBox'><?php echo html::checkbox('importObjectList', $lang->kanban->importObjectList, $importObjects);?></td>
      </tr>
      <tr id='emptyTip' class='hidden'><th></th><td colspan='2' style='color: red;'><?php echo $lang->kanban->error->importObjNotEmpty;?></td></tr>
      <tr>
        <th class='w-90px'><?php echo $lang->kanban->archive;?></th>
        <td><?php echo nl2br(html::radio('archived', $lang->kanban->archiveList, $kanban->archived));?></td>
      </tr>
      <tr>
        <th id='c-title'><?php echo $lang->kanban->manageProgress;?></th>
        <td><?php echo nl2br(html::radio('performable', $lang->kanban->enableList, $kanban->performable));?></td>
      </tr>
      <tr>
        <th id='c-title'><?php echo $lang->kanban->alignment;?></th>
        <td><?php echo nl2br(html::radio('alignment', $lang->kanban->alignmentList, $kanban->alignment));?></td>
      </tr>
      <tr>
        <th><?php echo $lang->kanban->desc;?></th>
        <td colspan='2'>
          <?php echo html::textarea('desc', $kanban->desc, "rows='10' class='form-control'");?>
        </td>
      </tr>
      <?php if($type == 'private'):?>
      <tr id="whitelistBox">
        <th><?php echo $lang->whitelist;?></th>
        <td><?php echo html::select('whitelist[]', $whitelist, $kanban->whitelist, 'class="form-control picker-select" multiple');?></td>
      </tr>
      <?php endif;?>
      <tr>
        <td colspan='3' class='text-center form-actions'>
          <?php echo html::submitButton();?>
        </td>
      </tr>
    </table>
  </form>
</div>
<?php include '../../common/view/footer.html.php';?>
