<?php
/**
 * The browse view file of release module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2020 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yuchun Li <liyuchun@cnezsoft.com>
 * @package     release
 * @version     $Id: browse.html.php 4129 2020-11-25 11:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/tablesorter.html.php';?>
<?php js::set('confirmDelete', $lang->release->confirmDelete)?>
<div id="mainMenu" class="clearfix">
  <div class="btn-toolbar pull-left">
    <?php
    echo html::a(inlink('browse', "projectID=$projectID&executionID=$executionID&type=all"), "<span class='text'>{$lang->release->all}</span>" . ($type == 'all' ? ' <span class="label label-light label-badge">' . count($releases) . '</span>' : ''), '', "id='allTab' class='btn btn-link" . ('all' == $type ? ' btn-active-text' : '') . "' data-app='$from'");
    echo html::a(inlink('browse', "projectID=$projectID&executionID=$executionID&type=normal"), "<span class='text'>{$lang->release->statusList['normal']}</span>" . ($type == 'normal' ? ' <span class="label label-light label-badge">' . count($releases) . '</span>' : ''), '', "id='normalTab' class='btn btn-link" . ('normal' == $type ? ' btn-active-text' : '') . "' data-app='$from'");
    echo html::a(inlink('browse', "projectID=$projectID&executionID=$executionID&type=terminate"), "<span class='text'>{$lang->release->statusList['terminate']}</span>" . ($type == 'terminate' ? ' <span class="label label-light label-badge">' . count($releases) . '</span>' : ''), '', "id='terminateTab' class='btn btn-link" . ('terminate' == $type ? ' btn-active-text' : '') . "' data-app='$from'");
    ?>
  </div>
  <div class="btn-toolbar pull-right">
    <?php common::printLink('projectrelease', 'create', "projectID=$projectID", "<i class='icon icon-plus'></i> {$lang->release->create}", '', "class='btn btn-primary'");?>
  </div>
</div>
<div id="mainContent" class='main-table'>
  <?php if(empty($releases)):?>
  <div class="table-empty-tip">
    <p>
      <span class="text-muted"><?php echo $lang->release->noRelease;?></span>
      <?php if(common::hasPriv('projectrelease', 'create')):?>
      <?php echo html::a($this->createLink('projectrelease', 'create', "projectID=$projectID"), "<i class='icon icon-plus'></i> " . $lang->release->create, '', "class='btn btn-info'");?>
      <?php endif;?>
    </p>
  </div>
  <?php else:?>
  <table class="table" id='releaseList'>
    <thead>
      <tr>
        <th class='c-id'><?php echo $lang->release->id;?></th>
        <th><?php echo $lang->release->name;?></th>
        <th class='c-product'><?php echo $lang->release->product;?></th>
        <th class='c-execution'><?php echo $lang->executionCommon;?></th>
        <th class='c-build'><?php echo $lang->release->build;?></th>
        <th class='c-date text-center'><?php echo $lang->release->date;?></th>
        <th class='c-status text-center'><?php echo $lang->release->status;?></th>
        <?php
        $extendFields = $this->projectrelease->getFlowExtendFields();
        foreach($extendFields as $extendField) echo "<th>{$extendField->name}</th>";
        ?>
        <th class='c-actions-6 text-center'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($releases as $release):?>
      <tr>
        <td><?php echo html::a(inlink('view', "releaseID=$release->id"), sprintf('%03d', $release->id));?></td>
        <td>
          <?php
          $flagIcon = $release->marker ? "<icon class='icon icon-flag red' title='{$lang->release->marker}'></icon> " : '';
          echo html::a(inlink('view', "release=$release->id"), $release->name, '', "data-app='$from'") . $flagIcon;
          ?>
        </td>
        <td title='<?php echo $release->productName?>'><?php echo $release->productName?></td>
        <td title='<?php echo $release->executionName?>'><?php echo $release->executionName?></td>
        <td title='<?php echo $release->buildName?>'><?php echo empty($release->execution) ? $release->buildName : html::a($this->createLink('build', 'view', "buildID=$release->buildID"), $release->buildName);?></td>
        <td class='text-center'><?php echo $release->date;?></td>
        <?php $status = $this->processStatus('release', $release);?>
        <td class='c-status text-center' title='<?php echo $status;?>'>
          <span class="status-release status-<?php echo $release->status?>"><?php echo $status;?></span>
        </td>
        <?php foreach($extendFields as $extendField) echo "<td>" . $this->loadModel('flow')->getFieldValue($extendField, $release) . "</td>";?>
        <td class='c-actions'><?php echo $this->projectrelease->buildOperateMenu($release, 'browse');?></td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  <?php endif;?>
</div>
<?php include '../../common/view/footer.html.php';?>
