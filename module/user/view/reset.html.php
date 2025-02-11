<?php
/**
 * The reset view file of user module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     user
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.lite.html.php';?>
<?php if($needCreateFile):?>
<div class='container mw-700px' style='margin-top:100px;'>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <strong><?php echo $lang->user->resetPassword?></strong>
    </div>
    <div class='panel-body'>
      <div class='alert alert-info'>
      <?php printf($lang->user->noticeResetFile, $resetFileName);?>
      </div>
      <div class='text-center'>
        <?php echo html::a(inlink('reset'), $this->lang->refresh, '', "class='btn btn-primary btn-wide'")?>
        <?php echo html::backButton();?>
      </div>
    </div>
  </div>
</div>
<?php elseif($status == 'reset'):?>
<div class='container mw-500px' style='margin-top:50px;'>
  <div class='panel'>
    <div class='panel-heading'>
      <strong><?php echo $lang->user->resetPassword?></strong>
    </div>
    <form method='post' target='hiddenwin'>
      <table class='table table-form'>
        <tr>
          <th><?php echo $lang->user->account?></th>
          <td><?php echo html::input('account', '', "class='form-control'")?></td>
        </tr>
        <tr>
          <input type='password' style="display:none"> <!-- Disable input password by browser automatically. -->
          <th><?php echo $lang->user->password?></th>
          <td><?php echo html::password('password1', '', "class='form-control'")?></td>
        </tr>
        <tr>
          <th><?php echo $lang->user->password2?></th>
          <td><?php echo html::password('password2', '', "class='form-control'")?></td>
        </tr>
        <tr>
          <th></th>
          <td><?php echo html::submitButton()?></td>
        </tr>
      </table>
    </form>
  </div>
</div>
<?php endif;?>
<?php include '../../common/view/footer.lite.html.php';?>
