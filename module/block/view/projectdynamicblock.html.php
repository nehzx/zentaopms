<?php if(empty($actions)): ?>
<div class='empty-tip'><?php echo $lang->block->emptyTip;?></div>
<?php else:?>
<style>
.timeline > li .timeline-text {display: block; overflow: hidden; text-overflow: ellipsis; max-height: 20px; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; }
.panel-body {padding-top: 0;}
.block-projectdynamic .label-action {margin-left: 12px;}
.block-projectdynamic .label-action + a {color: #838A9D;}
</style>
<div class='panel-body scrollbar-hover'>
  <ul class="timeline timeline-tag-left no-margin">
    <?php
    $i = 0;
    foreach($actions as $action)
    {
        $user = zget($users, $action->actor);
        if($action->action == 'login' or $action->action == 'logout') $action->objectName = $action->objectLabel = '';
        $class = $action->major ? "class='active'" : '';
        echo "<li $class><div>";
        printf($lang->block->dynamicInfo, $action->date, $user, $action->actionLabel, $action->objectLabel, $action->objectLink, $action->objectName, $action->objectName);
        echo "</div></li>";
        $i++;
    }
    ?>
  </ul>
</div>
<?php endif;?>
