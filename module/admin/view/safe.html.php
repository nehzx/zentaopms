<?php
/**
 * The safe view file of admin module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     admin
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<style>.table-form>tbody>tr>th{width:118px !important;}</style>
<?php include '../../common/view/header.html.php';?>
<div id='mainMenu' class='clearfix'>
  <div class='btn-toolbar pull-left'>
    <div class='btn-toolbar pull-left'><?php // common::printAdminSubMenu('system');?></div>
  </div>
</div>
<div class="main-row">
  <div class='side-col' id='sidebar'>
    <div class='cell'>
      <div class='list-group'>
        <?php
        echo html::a($this->createLink('admin', 'safe'), $lang->admin->safe->set, '', "class='active'");
        echo html::a($this->createLink('admin', 'checkWeak'), $lang->admin->safe->checkWeak);
        echo html::a($this->createLink('admin', 'resetPWDSetting'), $lang->admin->resetPWDSetting);
        ?>
      </div>
    </div>
  </div>
  <div id='mainContent' class='main-col main-content'>
    <div class='center-block'>
      <form class="load-indicator main-form form-ajax" method='post'>
        <table class='table table-form'>
          <tr>
            <th class='thWidth'><?php echo $lang->admin->safe->password?></th>
            <td class='w-250px'><?php echo html::radio('mode', $lang->admin->safe->modeList, isset($config->safe->mode) ? $config->safe->mode : 0, "onclick=showModeRule(this.value)")?></td>
            <td><?php echo $lang->admin->safe->noticeMode?></td>
          </tr>
          <tr id='mode1Rule' class='hidden'>
            <th></th>
            <td colspan='2'><span style='color:#03b8cf;font-weight:bold;'><?php echo $lang->admin->safe->modeRuleList[1] . $lang->admin->safe->noticeStrong;?></span></td>
          </tr>
          <tr id='mode2Rule' class='hidden'>
            <th></th>
            <td colspan='2'><span style='color:#03b8cf;font-weight:bold;'><?php echo $lang->admin->safe->modeRuleList[2] . $lang->admin->safe->noticeStrong;?></span></td>
          </tr>
          <tr>
            <th><?php echo $lang->admin->safe->weak?></th>
            <td colspan='2'><?php echo html::textarea('weak', $config->safe->weak, "class='form-control' style='height:100px'")?></td>
          </tr>
          <tr>
            <th><?php echo $lang->admin->safe->changeWeak?></th>
            <td colspan='2'><?php echo html::radio('changeWeak', $lang->admin->safe->modifyPasswordList, isset($config->safe->changeWeak) ? $config->safe->changeWeak : 0)?></td>
          </tr>
          <tr>
            <th><?php echo $lang->admin->safe->modifyPasswordFirstLogin?></th>
            <td colspan='2'><?php echo html::radio('modifyPasswordFirstLogin', $lang->admin->safe->modifyPasswordList, isset($config->safe->modifyPasswordFirstLogin) ? $config->safe->modifyPasswordFirstLogin : 0)?></td>
          </tr>
          <tr>
            <th><?php echo $lang->admin->safe->loginCaptcha?></th>
            <td colspan='2'><?php echo html::radio('loginCaptcha', $lang->admin->safe->loginCaptchaList, isset($config->safe->loginCaptcha) ? $config->safe->loginCaptcha : 0)?></td>
          </tr>
          <tr>
            <td colspan='3' class='text-center form-actions'>
              <?php echo html::submitButton();?>
              <?php echo html::backButton();?>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<script>
$(function()
{
    var mode = $("input[name='mode']:checked").val();
    showModeRule(mode);
});
function showModeRule(mode)
{
    if(mode == 0)
    {
        $('#mode1Rule').addClass('hidden');
        $('#mode2Rule').addClass('hidden');
    }
    else
    {
        mode == 1 ? $('#mode1Rule').removeClass('hidden') : $('#mode1Rule').addClass('hidden');
        mode == 2 ? $('#mode2Rule').removeClass('hidden') : $('#mode2Rule').addClass('hidden');
    }
}
</script>
<?php include '../../common/view/footer.html.php';?>
