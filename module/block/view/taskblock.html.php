<?php
/**
 * The task block view file of block module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php if(empty($tasks)): ?>
<div class='empty-tip'><?php echo $lang->block->emptyTip;?></div>
<?php else:?>
<style>
.block-tasks .c-id {width: 55px;}
.block-tasks .c-pri {width: 45px;text-align: center;}
.block-tasks .c-pri-long {width: 80px;}
.block-tasks .c-estimate {width: 60px;text-align: right;}
.block-tasks .c-deadline {width: 95px;}
.block-tasks .c-status {width: 80px;}
.block-tasks.block-sm .c-status {text-align: center;}
</style>
<div class='panel-body has-table scrollbar-hover'>
  <table class='table table-borderless table-hover table-fixed table-fixed-head tablesorter block-tasks <?php if(!$longBlock) echo 'block-sm';?>'>
    <thead>
      <tr>
        <th class='c-id'><?php echo $lang->idAB;?></th>
        <th class='c-pri <?php if($longBlock) echo "c-pri-long"?>'><?php echo $lang->priAB?></th>
        <th class='c-name'> <?php echo $lang->task->name;?></th>
        <?php if($longBlock):?>
        <th class='c-estimate'><?php echo $lang->task->estimateAB;?></th>
        <th class='c-deadline'><?php echo $lang->task->deadline;?></th>
        <?php endif;?>
        <th class='c-status text-center'><?php echo $lang->statusAB;?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($tasks as $task):?>
      <?php
      $appid    = isset($_GET['entry']) ? "class='app-btn' data-id='{$this->get->entry}'" : '';
      ?>
      <tr>
        <td class='c-id-xs'><?php echo sprintf('%03d', $task->id);?></td>
        <td class='c-pri <?php if($longBlock) echo "c-pri-long"?>'><span class='label-pri label-pri-<?php echo $task->pri;?>' title='<?php echo zget($lang->task->priList, $task->pri, $task->pri)?>'><?php echo zget($lang->task->priList, $task->pri, $task->pri)?></span></td>
        <td class='c-name' style='color: <?php echo $task->color?>' title='<?php echo $task->name?>'><?php echo html::a($this->createLink('task', 'view', "taskID=$task->id", '', '', $task->project), $task->name)?></td>
        <?php if($longBlock):?>
        <td class='c-estimate text-center' title="<?php echo $task->estimate . ' ' . $lang->execution->workHour;?>"><?php echo $task->estimate . $lang->execution->workHourUnit;?></td>
        <td class='c-deadline'><?php if(substr($task->deadline, 0, 4) > 0) echo $task->deadline;?></td>
        <?php endif;?>
        <?php $status = $this->processStatus('task', $task);?>
        <td class='c-status' title='<?php echo $status;?>'>
          <span class="status-task status-<?php echo $task->status?>"><?php echo $status;?></span>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
<?php endif;?>
