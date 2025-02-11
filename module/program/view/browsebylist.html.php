<?php $canOrder = (common::hasPriv('program', 'updateOrder') and strpos($orderBy, 'order') !== false)?>
<form class='main-table' id='programForm' method='post' data-ride='table' data-nested='true' data-expand-nest-child='false' data-checkable='false' data-enable-empty-nested-row='true' data-replace-id='programTableList' data-preserve-nested='true'>
  <table class='table has-sort-head table-fixed table-nested' id='programList'>
    <?php $vars = "status=$status&orderBy=%s";?>
    <thead>
      <tr>
        <th class='table-nest-title'>
          <a class='table-nest-toggle table-nest-toggle-global' data-expand-text='<?php echo $lang->expand; ?>' data-collapse-text='<?php echo $lang->collapse;?>'></a>
          <?php echo $lang->nameAB;?>
        </th>
        <th class='c-status'> <?php common::printOrderLink('status', $orderBy, $vars, $lang->program->status);?></th>
        <th class='c-user'><?php common::printOrderLink('PM',     $orderBy, $vars, $lang->program->PM);?></th>
        <th class='text-right c-budget'><?php common::printOrderLink('budget', $orderBy, $vars, $lang->project->budget);?></th>
        <th class='c-date'><?php common::printOrderLink('begin', $orderBy, $vars, $lang->project->begin);?></th>
        <th class='c-date'><?php common::printOrderLink('end',   $orderBy, $vars, $lang->project->end);?></th>
        <th class='c-progress'><?php echo $lang->project->progress;?></th>
        <?php
        $extendFields = $this->program->getFlowExtendFields();
        foreach($extendFields as $extendField) echo "<th>{$extendField->name}</th>";
        ?>
        <th class='text-center c-actions-6'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <tbody id='programTableList'>
      <?php $originOrders = array(); ?>
      <?php foreach($programs as $program):?>
      <?php
      $trClass = '';
      $trAttrs = "data-id='$program->id' data-order='$program->order' data-parent='$program->parent'";
      if($program->type == 'program')
      {
          $trAttrs .= " data-nested='true'";
          $trClass .= $program->parent == '0' ? ' is-top-level table-nest-child-hide' : ' table-nest-hide';
      }

      if($program->parent and isset($programs[$program->parent]))
      {
          if($program->type != 'program') $trClass .= ' is-nest-child';
          if(empty($program->path)) $program->path = $programs[$program->parent]->path . "$program->id,";
          $trClass .= ' table-nest-hide';
          $trAttrs .= " data-nest-parent='$program->parent' data-nest-path='$program->path'";
      }
      elseif($program->type != 'program')
      {
          $trClass .= ' no-nest';
      }
      $trAttrs .= " class='$trClass'";
      $originOrders[] = $program->order;
      ?>

      <tr <?php echo $trAttrs;?>>
        <td class='c-name text-left <?php if($canOrder) echo 'sort-handler';?> has-prefix has-suffix' title='<?php echo $program->name?>'>
          <?php
          $icon = '';
          if($program->type == 'program') $icon = ' icon-program';
          if($program->type == 'project') $icon = ' icon-common icon-' . $program->model;
          $class = $program->type == 'program' ? ' table-nest-toggle' : '';
          ?>
          <span class="table-nest-icon icon <?php echo $class . $icon;?>"></span>
          <?php if($program->type == 'program'):?>
          <?php echo strpos(",{$app->user->view->programs},", ",$program->id,") !== false ? html::a($this->createLink('program', 'product', "programID=$program->id"), $program->name) : $program->name;?>
          <?php else:?>
          <?php echo html::a($this->createLink('project', 'index', "projectID=$program->id", '', '', $program->id), $program->name, '', 'class="text-ellipsis text-primary"');?>
          <?php
          if($program->status != 'done' and $program->status != 'closed' and $program->status != 'suspended')
          {
              $delay = helper::diffDate(helper::today(), $program->end);
              if($delay > 0) echo "<span class='label label-danger label-badge'>{$lang->project->statusList['delay']}</span>";
          }
          ?>
          <?php endif;?>
        </td>
        <td class='c-status'><span class="status-program status-<?php echo $program->status?>"><?php echo zget($lang->project->statusList, $program->status, '');?></span></td>
        <td>
          <?php if(!empty($program->PM)):?>
          <?php $userName = zget($users, $program->PM);?>
          <?php echo html::smallAvatar(array('avatar' => $usersAvatar[$program->PM], 'account' => $program->PM, 'name' => $userName), 'avatar-circle avatar-' . zget($userIdPairs, $program->PM)); ?>
          <?php $userID   = isset($PMList[$program->PM]) ? $PMList[$program->PM]->id : '';?>
          <?php echo html::a($this->createLink('user', 'profile', "userID=$userID", '', true), $userName, '', "title='{$userName}' data-toggle='modal' data-type='iframe' data-width='600'");?>
          <?php endif;?>
        </td>
        <?php $programBudget = $this->loadModel('project')->getBudgetWithUnit($program->budget);?>
        <td class='text-right'><?php echo $program->budget != 0 ? zget($lang->project->currencySymbol, $program->budgetUnit) . ' ' . $programBudget : $lang->project->future;?></td>
        <td><?php echo $program->begin;?></td>
        <td><?php echo $program->end == LONG_TIME ? $lang->program->longTime : $program->end;?></td>
        <td>
          <?php if(isset($progressList[$program->id])):?>
          <div class='progress-pie' data-doughnut-size='85' data-color='#00DA88' data-value='<?php echo $progressList[$program->id]?>' data-width='26' data-height='26' data-back-color='#e8edf3'>
            <div class='progress-info'><?php echo $progressList[$program->id];?></div>
          </div>
          <?php endif;?>
        </td>
        <?php foreach($extendFields as $extendField) echo "<td>" . $this->loadModel('flow')->getFieldValue($extendField, $program) . "</td>";?>
        <td class='c-actions'>
          <?php echo $this->program->buildOperateMenu($program, 'browse');?>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  <div class='table-footer <?php if($status == 'bySearch') echo 'hide';?>'>
    <div class="table-statistic">&nbsp;<?php echo $summary;?></div>
    <?php if($status != 'bySearch') $pager->show('right', 'pagerjs');?>
  </div>
</form>
<style>
#programTableList.sortable-sorting > tr {opacity: 0.7}
#programTableList.sortable-sorting > tr.drag-row {opacity: 1;}
#programTableList > tr.drop-not-allowed {opacity: 0.1!important}
#programList .c-actions {overflow: visible;}
#programList > thead > tr > th .table-nest-toggle-global {top: 6px}
#programList > thead > tr > th .table-nest-toggle-global:before {color: #a6aab8;}
#programTableList > tr:last-child .c-actions .dropdown-menu {top: auto; bottom: 100%; margin-bottom: -5px;}
#programTableList .icon-common:before {width: 22px; height: 22px; background: none; color: rgb(166, 170, 184); top: 0; line-height: 22px; margin-right: 2px; font-size: 14px}
#programTableList .icon-project:before {content: '\e99c';}
#programTableList .icon-scrum:before {content: '\e9a2';}
#programTableList .icon-waterfall:before {content: '\e9a4';}
#programTableList .icon-kanban:before {content: '\e983';}
</style>
<?php js::set('originOrders', $originOrders);?>
<script>
$(function()
{
    /* Init orders numbers list */
    var ordersList = [];
    for(var i = 0; i < originOrders.length; ++i) ordersList.push(parseInt(originOrders[i]));
    ordersList.sort(function(x, y){return x - y;});

    var $list = $('#programTableList');
    $list.addClass('sortable').sortable(
    {
        reverse: orderBy === 'order_desc',
        selector: 'tr',
        dragCssClass: 'drag-row',
        trigger: $list.find('.sort-handler').length ? '.sort-handler' : null,
        before: function(e)
        {
            if($(e.event.target).closest('a,.btn').length) return false;
        },
        canMoveHere: function($ele, $target)
        {
            return $ele.data('parent') === $target.data('parent');
        },
        start: function(e)
        {
            e.targets.filter('[data-parent!="' + e.element.attr('data-parent') + '"]').addClass('drop-not-allowed');
        },
        finish: function(e)
        {
            var projects = '';
            e.list.each(function()
            {
                projects += $(this.item).data('id') + ',' ;
            });
            $.post(createLink('project', 'updateOrder'), {'projects' : projects, 'orderBy' : orderBy});

            var $thead = $list.closest('table').children('thead');
            $thead.find('.headerSortDown, .headerSortUp').removeClass('headerSortDown headerSortUp').addClass('header');
            $thead.find('th.sort-default .header').removeClass('header').addClass('headerSortDown');

            e.element.addClass('drop-success');
            setTimeout(function(){e.element.removeClass('drop-success');}, 800);
            $list.children('.drop-not-allowed').removeClass('drop-not-allowed');
            $('#programForm').table('initNestedList')
        }
    });

    $('#programForm').on('tableNestStateChanged', function()
    {
        /* Ensure visible progress pie inited after toggle nest states. */
        $('.progress-pie:visible').progressPie();
    });
});
</script>
