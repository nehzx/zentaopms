<?php
/**
 * The feedback view file of my module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     my
 * @version     $Id
 * @link        http://www.zentao.net
 */
?>
<?php include $app->getModuleRoot() . 'common/view/header.html.php';?>
<?php js::set('mode', $mode);?>
<?php js::set('total', $pager->recTotal);?>
<?php js::set('rawMethod', $app->rawMethod);?>
<?php $viewMethod = 'view'?>
<style>
.table-form>tbody>tr>th {width:135px;}
.c-solution {white-space: nowrap; overflow: hidden;}
</style>
<div id="mainMenu" class="clearfix">
  <div class="btn-toolbar pull-left">
    <?php
    $recTotalLabel = " <span class='label label-light label-badge'>{$pager->recTotal}</span>";
    echo html::a(inlink($app->rawMethod, "mode=$mode&type=assigntome"), "<span class='text'>{$lang->my->taskMenu->assignedToMe}</span>"   . ($browseType == 'assigntome' ? $recTotalLabel : ''),   '', "class='btn btn-link" . ($browseType == 'assigntome' ? ' btn-active-text' : '') . "'");
    ?>
  <a class="btn btn-link querybox-toggle" id='bysearchTab'><i class="icon icon-search muted"></i> <?php echo $lang->user->search;?></a>
  </div>
</div>
<div id="mainContent">
  <div class="cell<?php if($browseType == 'bysearch') echo ' show';?>" id="queryBox" data-module='workFeedback'></div>
  <?php if(empty($feedbacks)):?>
  <div class="table-empty-tip">
    <p><span class="text-muted"><?php echo $lang->noData;?></span></p>
  </div>
  <?php else:?>
  <?php
  include '../../../extension/biz/feedback/view/data.html.php';
  ?>
  <?php endif;?>
</div>
<?php include $app->getModuleRoot() . 'common/view/footer.html.php';?>
