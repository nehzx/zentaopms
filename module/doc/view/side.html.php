<?php
$sideLibs = array();
foreach($lang->doclib->tabList as $libType => $typeName) $sideLibs[$libType] = $this->doc->getLimitLibs($libType);
$allModules = $this->loadModel('tree')->getDocStructure();

$sideSubLibs = array();
$sideSubLibs['product']   = $this->doc->getSubLibGroups('product', array_keys($sideLibs['product']));
$sideSubLibs['execution'] = $this->doc->getSubLibGroups('execution', array_keys($sideLibs['execution']));
if($this->methodName != 'browse')
{
    $browseType = '';
    $moduleID   = '';
}
if(empty($type)) $type = 'product';
$sideWidth = common::checkNotCN() ? '270' : '238';
?>
<div class="side-col" style="width:<?php echo $sideWidth;?>px" data-min-width="<?php echo $sideWidth;?>">
  <div class="cell" id="<?php echo $type;?>">
    <div id='title'>
      <li class='menu-title'><?php echo $this->lang->doc->menuTitle;?></li>
      <?php
      $canEditLib    = common::hasPriv('doc', 'editLib');
      $canManageBook = common::hasPriv('doc', 'manageBook');
      $canManageMenu = common::hasPriv('tree', 'browse');
      $canEditLib    = common::hasPriv('doc', 'editLib');
      $canDeleteLib  = common::hasPriv('doc', 'deleteLib');
      if($type != 'book' and ($canManageMenu or $canEditLib or $canDeleteLib))
      {
          echo "<div class='menu-actions'>";
          echo html::a('javascript:;', "<i class='icon icon-ellipsis-v'></i>", '', "data-toggle='dropdown' class='btn btn-link'");
          echo "<ul class='dropdown-menu pull-right'>";
          if($canManageMenu)
          {
              echo '<li>' . html::a($this->createLink('tree', 'browse', "rootID=$libID&view=doc", '', true), '<i class="icon-cog-outline"></i> ' . $this->lang->doc->manageType, '', "class='iframe'") . '</li>';
              echo "<li class='divider'></li>";
          }
          if($canEditLib) echo '<li>' . html::a($this->createLink('doc', 'editLib', "rootID=$libID"), '<i class="icon-edit"></i> ' . $lang->doc->editLib, '', "class='iframe'") . '</li>';
          if($canDeleteLib) echo '<li>' . html::a($this->createLink('doc', 'deleteLib', "rootID=$libID"), '<i class="icon-trash"></i> ' . $lang->doc->deleteLib, 'hiddenwin') . '</li>';
          echo '</ul></div>';
      }

      if($type == 'book' and ($canEditLib or $canManageBook))
      {
          echo "<div class='menu-actions'>";
          echo html::a('javascript:;', "<i class='icon icon-ellipsis-v'></i>", '', "data-toggle='dropdown' class='btn btn-link'");
          echo "<ul class='dropdown-menu pull-right'>";
          if($canEditLib) echo '<li>' . html::a($this->createLink('doc', 'editLib', "rootID=$libID"), '<i class="icon-edit"></i> ' . $lang->doc->editBook, '', "class='iframe'") . '</li>';
          if($canManageBook) echo '<li>' . html::a($this->createLink('doc', 'manageBook', "bookID=$libID"), '<i class="icon-cog-outline"></i> ' . $lang->doc->manageBook) . '</li>';
          echo '</ul></div>';
      }
      ?>
    </div>
    <?php if(!$moduleTree):?>
    <hr class="space">
    <div class="text-center text-muted tips">
      <?php echo $type == 'book' ? $lang->doc->noChapter : $lang->doc->noModule;?>
    </div>
    <hr class="space">
    <?php endif;?>
    <?php if($type == 'book'):?>
    <?php include './bookside.html.php';?>
    <?php else:?>
    <?php echo $moduleTree;?>
    <?php endif;?>
  </div>
  <style>
  .sortable-sorting .module-name > a {cursor: move;}
  .sortable-sorting li >.tree-group {opacity: .5;}
  .sortable-sorting .drop-here .tree-group {background-color: #fff3e0;}
  .sortable-sorting .drop-here .tree-group > * {opacity: .1;}
  .sortable-sorting .drag-shadow .tree-group {opacity: 1!important;}
  .sortable-sorting .drag-shadow .treeActions {visibility: hidden;}
  .is-sorting > li > .tree-group {opacity: 1; border-radius: 4px;}
  .is-sorting > li ul {display: none!important;}
  </style>
  <script>
  $(function()
  {
      /* Make modules tree sortable */
      $('#modules').sortable(
      {
          trigger: '.module-name>a',
          dropToClass: 'sort-to',
          stopPropagation: true,
          nested: true,
          selector: 'li',
          dragCssClass: 'drop-here',
          targetSelector: function($ele, $root)
          {
              return $ele.closest('ul').addClass('is-sorting').children('li');
          },
          always: function()
          {
              $('#modules,#modules .is-sorting').removeClass('is-sorting');
          },
          finish: function(e)
          {
              if(!e.changed) return;

              /* TODO(@sunguangming): console.log('sort.finish', e); */
          }
      });
  });
  </script>
</div>
