<?php
/**
 * The browse view file of product module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     product
 * @version     $Id: browse.html.php 4909 2013-06-26 07:23:50Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/datatable.fix.html.php';?>
<?php js::set('browseType', $browseType);?>
<?php js::set('productID', $productID);?>
<?php js::set('projectID', $this->session->PRJ);?>
<?php js::set('branch', $branch);?>
<?php js::set('rawModule', $this->app->rawModule);?>
<?php
$unfoldStories = isset($config->product->browse->unfoldStories) ? json_decode($config->product->browse->unfoldStories, true) : array();
$unfoldStories = zget($unfoldStories, $productID, array());
js::set('unfoldStories', $unfoldStories);
js::set('unfoldAll',     $lang->project->treeLevel['all']);
js::set('foldAll',       $lang->project->treeLevel['root']);
js::set('storyType', $storyType);
$lang->story->createCommon = $storyType == 'story' ? $lang->story->createStory : $lang->story->createRequirement;
?>
<div id="mainMenu" class="clearfix">
  <div id="sidebarHeader">
    <div class="title">
      <?php
      echo $moduleName;
      if($moduleID)
      {
          $removeLink = $browseType == 'bymodule' ? $this->createLink($this->app->rawModule, $this->app->rawMethod, "productID=$productID&branch=$branch&browseType=$browseType&param=0&storyType=$storyType&orderBy=$orderBy&recTotal=0&recPerPage={$pager->recPerPage}") : 'javascript:removeCookieByKey("storyModule")';
          echo html::a($removeLink, "<i class='icon icon-sm icon-close'></i>", '', "class='text-muted'");
      }
      ?>
    </div>
  </div>
  <div class="btn-toolbar pull-left">
    <?php if($this->app->rawModule == 'projectstory'): ?>
    <div class='btn-group'>
      <a href='javascript:;' class='btn btn-link btn-limit text-ellipsis' data-toggle='dropdown' style="max-width: 120px;"><span class='text' title='<?php echo $productName;?>'><?php echo $productName;?></span> <span class='caret'></span></a>
      <ul class='dropdown-menu' style='max-height:240px; max-width: 300px; overflow-y:auto'>
        <?php
        foreach($projectProducts as $product)
        {
            echo "<li>" . html::a($this->createLink('projectstory', 'story', "productID=$product->id&branch=0&browseType=$browseType"), $product->name, '', "title='{$product->name}' class='text-ellipsis'") . "</li>";
        }
        ?>
      </ul>
    </div>
    <?php endif;?>
    <?php
    foreach(customModel::getFeatureMenu($this->moduleName, $this->methodName) as $menuItem)
    {
        if(isset($menuItem->hidden)) continue;
        if($menuItem->name == 'emptysr' && $storyType == 'story') continue;
        $menuBrowseType = strpos($menuItem->name, 'QUERY') === 0 ? 'bySearch' : $menuItem->name;
        if($menuItem->name == 'more')
        {
            if(!empty($lang->product->moreSelects))
            {
                $moreLabel       = $lang->more;
                $moreLabelActive = '';
                $storyBrowseType = $this->session->storyBrowseType;
                if(isset($lang->product->moreSelects[$storyBrowseType]))
                {
                    $moreLabel       = "<span class='text'>{$lang->product->moreSelects[$storyBrowseType]}</span> <span class='label label-light label-badge'>{$pager->recTotal}</span>";
                    $moreLabelActive = 'btn-active-text';
                }
                echo '<div class="btn-group" id="more">';
                echo html::a('javascript:;', $moreLabel . " <span class='caret'></span>", '', "data-toggle='dropdown' class='btn btn-link $moreLabelActive'");
                echo "<ul class='dropdown-menu'>";
                foreach($lang->product->moreSelects as $key => $value)
                {
                    $active = $key == $storyBrowseType ? 'btn-active-text' : '';
                    echo '<li>' . html::a($this->createLink($this->app->rawModule, $this->app->rawMethod, "productID=$productID&branch=$branch&browseType=$key&param=0&storyType=$storyType"), "<span class='text'>{$value}</span>", '', "class='btn btn-link $active'") . '</li>';
                }
                echo '</ul></div>';
            }
        }
        elseif($menuItem->name == 'QUERY')
        {
            $searchBrowseLink = $this->createLink($this->app->rawModule, $this->app->rawMethod, "productID=$productID&branch=$branch&browseType=$menuBrowseType&param=%s&storyType=$storyType");
            $isBySearch       = $this->session->storyBrowseType == 'bysearch';
            include '../../common/view/querymenu.html.php';
        }
        else
        {
            echo html::a($this->createLink($this->app->rawModule, $this->app->rawMethod, "productID=$productID&branch=$branch&browseType=$menuBrowseType&param=0&storyType=$storyType"), "<span class='text'>$menuItem->text</span>" . ($menuItem->name == $this->session->storyBrowseType ? ' <span class="label label-light label-badge">' . $pager->recTotal . '</span>' : ''), '', "id='{$menuItem->name}Tab' class='btn btn-link" . ($this->session->storyBrowseType == $menuItem->name ? ' btn-active-text' : '') . "'");
        }
    }
    ?>
    <a class="btn btn-link querybox-toggle" id='bysearchTab'><i class="icon icon-search muted"></i> <?php echo $lang->product->searchStory;?></a>
  </div>
  <div class="btn-toolbar pull-right">
    <?php if($this->app->rawModule != 'projectstory') common::printIcon('story', 'report', "productID=$productID&branchID=$branch&storyType=$storyType&browseType=$browseType&moduleID=$moduleID&chartType=pie", '', 'button', 'bar-chart muted'); ?>
    <div class="btn-group">
      <button class="btn btn-link" data-toggle="dropdown"><i class="icon icon-export muted"></i> <span class="text"><?php echo $lang->export ?></span> <span class="caret"></span></button>
      <ul class="dropdown-menu" id='exportActionMenu'>
        <?php
        $openModule = $this->app->rawModule == 'projectstory' ? 'project' : 'product';
        $class = common::hasPriv('story', 'export') ? '' : "class=disabled";
        $misc  = common::hasPriv('story', 'export') ? "class='export' data-group='$openModule'" : "class=disabled";
        $link  = common::hasPriv('story', 'export') ?  $this->createLink('story', 'export', "productID=$productID&orderBy=$orderBy&projectID=0&browseType=$browseType&type=$storyType") : '#';
        echo "<li $class>" . html::a($link, $lang->story->export, '', $misc) . "</li>";
        ?>
      </ul>
    </div>
    <?php $isProjectStroy = $this->app->rawModule == 'projectstory';?>
    <?php if(common::canModify('product', $product)):?>
    <div class='btn-group dropdown-hover'>
      <?php echo html::a('javascript:;', "<i class='icon icon-plus'></i> {$lang->story->create} </span><span class='caret'>", '', "class='btn btn-secondary'");?>
      <ul class='dropdown-menu'>
        <li>
        <?php
        $openModel = $this->app->rawModule == 'projectstory' ? 'project' : 'product';
        if(commonModel::isTutorialMode())
        {
            $wizardParams = helper::safe64Encode("productID=$productID&branch=$branch&moduleID=$moduleID");
            if($isProjectStroy) $wizardParams = helper::safe64Encode("productID=$productID&branch=$branch&moduleID=$moduleID&storyID=&projectID={$this->session->PRJ}");
            $link = $this->createLink('tutorial', 'wizard', "module=story&method=create&params=$wizardParams");
            echo html::a($link, $lang->story->createCommon, '', "data-group='$openModel'");
        }
        else
        {
            $link     = $this->createLink('story', 'create', "product=$productID&branch=$branch&moduleID=$moduleID&storyID=0&projectID=0&bugID=0&planID=0&todoID=0&extra=&type=$storyType");
            if($isProjectStroy) $link = $this->createLink('story', 'create', "product=$productID&branch=$branch&moduleID=$moduleID&storyID=0&projectID={$this->session->PRJ}");
            $disabled = '';
            if(!common::hasPriv('story', 'create'))
            {
                $link     = '###';
                $disabled = 'disabled';
            }
            echo html::a($link, $lang->story->createCommon, '', "class='$disabled' data-group='$openModel'");
        }
        ?>
        </li>
        <?php $batchDisabled = common::hasPriv('story', 'batchCreate') ? '' : "class='disabled'";?>
        <li <?php echo $batchDisabled;?>>
        <?php
          $batchLink = $this->createLink('story', 'batchCreate', "productID=$productID&branch=$branch&moduleID=$moduleID&storyID=0&project=0&plan=0&type=$storyType");
          if($isProjectStroy) $batchLink = $this->createLink('story', 'batchCreate', "productID=$productID&branch=$branch&moduleID=$moduleID&storyID=0&project={$this->session->PRJ}");
          echo html::a($batchLink, $lang->story->batchCreate, '', "data-group='$openModel'");
        ?>
        </li>
      </ul>
    </div>
    <?php $isShow = $isProjectStroy ? '' : "style='display: none;'";?>
    <div class='btn-group dropdown-hover' <?php echo $isShow;?>>
    <?php
    if(commonModel::isTutorialMode())
    {
        $wizardParams = helper::safe64Encode("project=$project->id");
        echo html::a($this->createLink('tutorial', 'wizard', "module=project&method=linkStory&params=$wizardParams"), "<i class='icon-link'></i> {$lang->project->linkStory}",'', "class='btn btn-link link-story-btn'");
    }
    else
    {
        echo "<button type='button' class='btn btn-primary' id='linkButton'>";
        echo "<i class='icon-link'></i> {$lang->project->linkStory} <span class='caret'></span>";
        echo '</button>';
        echo "<ul class='dropdown-menu pull-right' id='linkActionMenu'>";
        if(common::hasPriv('projectstory', 'linkStory')) echo '<li>' . html::a($this->createLink('projectstory', 'linkStory', "project={$this->session->PRJ}"), $lang->project->linkStory). "</li>";
        if(common::hasPriv('project', 'importPlanStories')) echo '<li>' . html::a('#linkStoryByPlan', $lang->project->linkStoryByPlan, '', 'data-toggle="modal"') . "</li>";
        echo '</ul>';
    }
    ?>
    </div>
    <?php endif;?>
  </div>
</div>
<div id="mainContent" class="main-row fade">
  <div class="side-col" id="sidebar">
    <div class="sidebar-toggle"><i class="icon icon-angle-left"></i></div>
    <div class="cell">
      <?php if(!$moduleTree):?>
      <hr class="space">
      <div class="text-center text-muted">
        <?php echo $lang->product->noModule;?>
      </div>
      <hr class="space">
      <?php endif;?>
      <?php echo $moduleTree;?>
      <div class="text-center">
        <?php common::printLink('tree', 'browse', "rootID=$productID&view=story", $lang->tree->manage, '', "class='btn btn-info btn-wide'");?>
        <hr class="space-sm" />
      </div>
    </div>
  </div>
  <div class="main-col">
    <div class="cell<?php if($browseType == 'bysearch') echo ' show';?>" id="queryBox" data-module='story'></div>
    <?php if(empty($stories)):?>
    <div class="table-empty-tip">
      <p>
        <span class="text-muted"><?php echo $storyType == 'story' ? $lang->story->noStory : $lang->story->noRequirement;?></span>
        <?php if(common::canModify('product', $product) and common::hasPriv('story', 'create')):?>
        <?php $projectID  = $this->app->rawModule == 'projectstory' ? $this->session->PRJ : 0;?>
        <?php $openModule = $this->app->rawModule == 'projectstory' ? 'project' : 'product';?>
        <?php echo html::a($this->createLink('story', 'create', "productID={$productID}&branch={$branch}&moduleID={$moduleID}&storyID=0&projectID=$projectID&bugID=0&planID=0&todoID=0&extra=&type=$storyType"), "<i class='icon icon-plus'></i> " . $lang->story->createCommon, '', "class='btn btn-info' data-group='$openModule'");?>
        <?php endif;?>
      </p>
    </div>
    <?php else:?>
    <form class="main-table table-story skip-iframe-modal" method="post" id='productStoryForm'>
      <div class="table-header fixed-right">
        <nav class="btn-toolbar pull-right"></nav>
      </div>
      <?php
      $datatableId  = $this->moduleName . ucfirst($this->methodName);
      $useDatatable = (isset($config->datatable->$datatableId->mode) and $config->datatable->$datatableId->mode == 'datatable');
      $vars         = "productID=$productID&branch=$branch&browseType=$browseType&param=$param&storyType=$storyType&orderBy=%s&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}";

      if($useDatatable) include '../../common/view/datatable.html.php';
      $setting = $this->datatable->getSetting('product');
      $widths  = $this->datatable->setFixedFieldWidth($setting);
      $columns = 0;

      $canBeChanged         = common::canModify('product', $product);
      $canBatchEdit         = ($canBeChanged and common::hasPriv('story', 'batchEdit'));
      $canBatchClose        = (common::hasPriv('story', 'batchClose') and strtolower($browseType) != 'closedbyme' and strtolower($browseType) != 'closedstory');
      $canBatchReview       = ($canBeChanged and common::hasPriv('story', 'batchReview'));
      $canBatchChangeStage  = ($canBeChanged and common::hasPriv('story', 'batchChangeStage'));
      $canBatchChangeBranch = ($canBeChanged and common::hasPriv('story', 'batchChangeBranch'));
      $canBatchChangeModule = ($canBeChanged and common::hasPriv('story', 'batchChangeModule'));
      $canBatchChangePlan   = ($canBeChanged and common::hasPriv('story', 'batchChangePlan'));
      $canBatchAssignTo     = ($canBeChanged and common::hasPriv('story', 'batchAssignTo'));

      $canBatchAction       = ($canBatchEdit or $canBatchClose or $canBatchReview or $canBatchChangeStage or $canBatchChangeModule or $canBatchChangePlan or $canBatchAssignTo);
      ?>
      <?php if(!$useDatatable) echo '<div class="table-responsive">';?>
      <table class='table has-sort-head<?php if($useDatatable) echo ' datatable';?>' id='storyList' data-fixed-left-width='<?php echo $widths['leftWidth']?>' data-fixed-right-width='<?php echo $widths['rightWidth']?>'>
        <thead>
          <tr>
          <?php
          foreach($setting as $key => $value)
          {
              if($value->show)
              {
                  $this->datatable->printHead($value, $orderBy, $vars, $canBatchAction);
                  $columns ++;
              }
          }
          ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach($stories as $story):?>
          <tr data-id='<?php echo $story->id?>' data-estimate='<?php echo $story->estimate?>' data-cases='<?php echo zget($storyCases, $story->id, 0);?>'>
            <?php foreach($setting as $key => $value) $this->story->printCell($value, $story, $users, $branches, $storyStages, $modulePairs, $storyTasks, $storyBugs, $storyCases, $useDatatable ? 'datatable' : 'table');?>
          </tr>
          <?php if(!empty($story->children)):?>
          <?php $i = 0;?> 
          <?php foreach($story->children as $key => $child):?>
          <?php $class  = $i == 0 ? ' table-child-top' : '';?>
          <?php $class .= ($i + 1 == count($story->children)) ? ' table-child-bottom' : '';?>
          <tr class='table-children<?php echo $class;?> parent-<?php echo $story->id;?>' data-id='<?php echo $child->id?>' data-status='<?php echo $child->status?>' data-estimate='<?php echo $child->estimate?>'>
            <?php foreach($setting as $key => $value) $this->story->printCell($value, $child, $users, $branches, $storyStages, $modulePairs, $storyTasks, $storyBugs, $storyCases, $useDatatable ? 'datatable' : 'table', $storyType);?>
          </tr>
          <?php $i ++;?>
          <?php endforeach;?>
          <?php endif;?>
          <?php endforeach;?>
        </tbody>
      </table>
      <?php if(!$useDatatable) echo '</div>';?>
      <div class="table-footer">
        <?php if($canBatchAction):?>
        <div class="checkbox-primary check-all"><label><?php echo $lang->selectAll?></label></div>
        <?php endif;?>
        <div class="table-actions btn-toolbar">
          <div class='btn-group dropup'>
            <?php
            $disabled   = $canBatchEdit ? '' : "disabled='disabled'";
            $actionLink = $this->createLink('story', 'batchEdit', "productID=$productID&projectID=0&branch=$branch&storyType=$storyType");
            ?>
            <?php echo html::commonButton($lang->edit, "data-form-action='$actionLink' $disabled");?>
            <button type='button' class='btn dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></button>
            <ul class='dropdown-menu'>
              <?php
              $class      = $canBatchClose ? '' : "class='disabled'";
              $actionLink = $this->createLink('story', 'batchClose', "productID=$productID&projectID=0");
              $misc = $canBatchClose ? "onclick=\"setFormAction('$actionLink')\"" : '';
              echo "<li $class>" . html::a('#', $lang->close, '', $misc) . "</li>";

              if($canBatchReview)
              {
                  echo "<li class='dropdown-submenu'>";
                  echo html::a('javascript:;', $lang->story->review, '', "id='reviewItem'");
                  echo "<ul class='dropdown-menu'>";
                  unset($lang->story->reviewResultList['']);
                  unset($lang->story->reviewResultList['revert']);
                  foreach($lang->story->reviewResultList as $key => $result)
                  {
                      $actionLink = $this->createLink('story', 'batchReview', "result=$key");
                      if($key == 'reject')
                      {
                          echo "<li class='dropdown-submenu'>";
                          echo html::a('#', $result, '', "id='rejectItem'");
                          echo "<ul class='dropdown-menu'>";
                          unset($lang->story->reasonList['']);
                          unset($lang->story->reasonList['subdivided']);
                          unset($lang->story->reasonList['duplicate']);

                          foreach($lang->story->reasonList as $key => $reason)
                          {
                              $actionLink = $this->createLink('story', 'batchReview', "result=reject&reason=$key");
                              echo "<li>";
                              echo html::a('#', $reason, '', "onclick=\"setFormAction('$actionLink', 'hiddenwin')\"");
                              echo "</li>";
                          }
                          echo '</ul></li>';
                      }
                      else
                      {
                        echo '<li>' . html::a('#', $result, '', "onclick=\"setFormAction('$actionLink', 'hiddenwin')\"") . '</li>';
                      }
                  }
                  echo '</ul></li>';
              }
              else
              {
                  $class= "class='disabled'";
                  echo "<li $class>" . html::a('javascript:;', $lang->story->review,  '', $class) . '</li>';
              }

              if($canBatchChangeBranch and $this->session->currentProductType != 'normal')
              {
                  $withSearch = count($branches) > 8;
                  echo "<li class='dropdown-submenu'>";
                  echo html::a('javascript:;', $lang->product->branchName[$this->session->currentProductType], '', "id='branchItem'");
                  echo "<div class='dropdown-menu" . ($withSearch ? ' with-search':'') . "'>";
                  echo "<ul class='dropdown-list'>";
                  foreach($branches as $branchID => $branchName)
                  {
                      $actionLink = $this->createLink('story', 'batchChangeBranch', "branchID=$branchID");
                      echo "<li class='option' data-key='$branchID'>" . html::a('#', $branchName, '', "onclick=\"setFormAction('$actionLink', 'hiddenwin')\"") . "</li>";
                  }
                  echo '</ul>';
                  if($withSearch) echo "<div class='menu-search'><div class='input-group input-group-sm'><input type='text' class='form-control' placeholder=''><span class='input-group-addon'><i class='icon-search'></i></span></div></div>";
                  echo '</div></li>';
              }

              if($canBatchChangeStage)
              {
                  echo "<li class='dropdown-submenu'>";
                  echo html::a('javascript:;', $lang->story->stageAB, '', "id='stageItem'");
                  echo "<ul class='dropdown-menu'>";
                  foreach($lang->story->stageList as $key => $stage)
                  {
                      if(empty($key)) continue;
                      if(strpos('tested|verified|released|closed', $key) === false) continue;
                      $actionLink = $this->createLink('story', 'batchChangeStage', "stage=$key");
                      echo "<li>" . html::a('#', $stage, '', "onclick=\"setFormAction('$actionLink', 'hiddenwin')\"") . "</li>";
                  }
                  echo '</ul></li>';
              }
              else
              {
                  $class= "class='disabled'";
                  echo "<li $class>" . html::a('javascript:;', $lang->story->stageAB, '', $class) . '</li>';
              }
              ?>
            </ul>
          </div>

          <?php if($canBatchChangeModule):?>
          <div class="btn-group dropup">
            <button data-toggle="dropdown" type="button" class="btn"><?php echo $lang->story->moduleAB;?> <span class="caret"></span></button>
            <?php $withSearch = count($modules) > 8;?>
            <div class="dropdown-menu search-list<?php if($withSearch) echo ' search-box-sink';?>" data-ride="searchList">
              <?php if($withSearch):?>
              <div class="input-control search-box has-icon-left has-icon-right search-example">
                <input id="moduleSearchBox" type="search" autocomplete="off" class="form-control search-input">
                <label for="moduleSearchBox" class="input-control-icon-left search-icon"><i class="icon icon-search"></i></label>
                <a class="input-control-icon-right search-clear-btn"><i class="icon icon-close icon-sm"></i></a>
              </div>
              <?php $modulesPinYin = common::convert2Pinyin($modules);
              ?>
              <?php endif;?>
              <div class="list-group">
                <?php
                foreach($modules as $moduleId => $module)
                {
                    $searchKey = $withSearch ? ('data-key="' . zget($modulesPinYin, $module, '') . '"') : '';
                    $actionLink = $this->createLink('story', 'batchChangeModule', "moduleID=$moduleId");
                    echo html::a('#', empty($module) ? '/' : $module, '', "$searchKey onclick=\"setFormAction('$actionLink', 'hiddenwin')\"");
                }
                ?>
              </div>
            </div>
          </div>
          <?php endif;?>
          <?php if($canBatchChangePlan):?>
          <div class="btn-group dropup">
            <button data-toggle="dropdown" type="button" class="btn"><?php echo $lang->story->planAB;?> <span class="caret"></span></button>
            <?php
            unset($plans['']);
            $plans      = array(0 => $lang->null) + $plans;
            $withSearch = count($plans) > 8;
            ?>
            <div class="dropdown-menu search-list<?php if($withSearch) echo ' search-box-sink';?>" data-ride="searchList">
              <?php if($withSearch):?>
              <div class="input-control search-box has-icon-left has-icon-right search-example">
                <input id="planSearchBox" type="search" autocomplete="off" class="form-control search-input">
                <label for="planSearchBox" class="input-control-icon-left search-icon"><i class="icon icon-search"></i></label>
                <a class="input-control-icon-right search-clear-btn"><i class="icon icon-close icon-sm"></i></a>
              </div>
              <?php $plansPinYin = common::convert2Pinyin($plans);?>
              <?php endif;?>
              <div class="list-group">
                <?php
                foreach($plans as $planID => $plan)
                {
                    $searchKey = $withSearch ? ('data-key="' . zget($plansPinYin, $plan, '') . '"') : '';
                    $actionLink = $this->createLink('story', 'batchChangePlan', "planID=$planID");
                    echo html::a('#', $plan, '', "$searchKey title='{$plan}' onclick=\"setFormAction('$actionLink', 'hiddenwin')\"");
                }
                ?>
              </div>
            </div>
          </div>
          <?php endif;?>

          <?php if($canBatchAssignTo):?>
          <div class="btn-group dropup">
            <button data-toggle="dropdown" type="button" class="btn"><?php echo $lang->story->assignedTo;?> <span class="caret"></span></button>
            <?php
            $withSearch = count($users) > 10;
            $actionLink = $this->createLink('story', 'batchAssignTo', "productID=$productID");
            echo html::select('assignedTo', $users, '', 'class="hidden"');
            ?>
            <div class="dropdown-menu search-list<?php if($withSearch) echo ' search-box-sink';?>" data-ride="searchList">
              <?php if($withSearch):?>
              <?php $usersPinYin = common::convert2Pinyin($users);?>
              <div class="input-control search-box has-icon-left has-icon-right search-example">
                <input id="userSearchBox" type="search" autocomplete="off" class="form-control search-input">
                <label for="userSearchBox" class="input-control-icon-left search-icon"><i class="icon icon-search"></i></label>
                <a class="input-control-icon-right search-clear-btn"><i class="icon icon-close icon-sm"></i></a>
              </div>
              <?php endif;?>
              <div class="list-group">
              <?php foreach ($users as $key => $value):?>
              <?php
              if(empty($key) or $key == 'closed') continue;
              $searchKey = $withSearch ? ('data-key="' . zget($usersPinYin, $value, '') . " @$key\"") : "data-key='@$key'";
              echo html::a("javascript:$(\"#assignedTo\").val(\"$key\");setFormAction(\"$actionLink\", \"hiddenwin\")", $value, '', $searchKey);
              ?>
              <?php endforeach;?>
              </div>
            </div>
          </div>
          <?php endif;?>
        </div>
        <div class="table-statistic"><?php echo $summary;?></div>
        <?php $pager->show('right', 'pagerjs');?>
      </div>
    </form>
    <?php endif;?>
  </div>
</div>
<div class="modal fade" id="linkStoryByPlan">
  <div class="modal-dialog mw-500px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon icon-close"></i></button>
        <h4 class="modal-title"><?php echo $lang->project->linkStoryByPlan;?></h4><?php echo '(' . $lang->project->linkStoryByPlanTips . ')';?>
      </div>
      <div class="modal-body">
        <div class='input-group'>
          <?php echo html::select('plan', $productPlans[$productID], '', "class='form-control chosen' id='plan'");?>
          <span class='input-group-btn'><?php echo html::commonButton($lang->project->linkStory, "id='toTaskButton'", 'btn btn-primary');?></span>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
var moduleID = <?php echo $moduleID?>;
var branchID = $.cookie('storyBranch');
$('#module<?php echo $moduleID;?>').closest('li').addClass('active');
$('#branch' + branchID).closest('li').addClass('active');

$(function()
{
    // Update table summary text
    <?php $storyCommon = $lang->SRCommon;?>
    var checkedSummary = '<?php echo str_replace('%storyCommon%', $storyCommon, $lang->product->checkedSummary)?>';
    $('#productStoryForm').table(
    {
        statisticCreator: function(table)
        {
            var $checkedRows = table.getTable().find(table.isDataTable ? '.datatable-row-left.checked' : 'tbody>tr.checked');
            var $originTable = table.isDataTable ? table.$.find('.datatable-origin') : null;
            var checkedTotal = $checkedRows.length;
            if(!checkedTotal) return;

            var checkedEstimate = 0;
            var checkedCase     = 0;
            $checkedRows.each(function()
            {
                var $row = $(this);
                if ($originTable)
                {
                    $row = $originTable.find('tbody>tr[data-id="' + $row.data('id') + '"]');
                }
                var data = $row.data();
                checkedEstimate += data.estimate;
                if(data.cases > 0) checkedCase += 1;
            });
            var rate = Math.round(checkedCase / checkedTotal * 10000 / 100) + '' + '%';
            return checkedSummary.replace('%total%', checkedTotal)
                  .replace('%estimate%', checkedEstimate.toFixed(1))
                  .replace('%rate%', rate);
        }
    });
});
</script>
<?php include '../../common/view/footer.html.php';?>
