<?php
/**
 * The reprot file of sonarqubemodule of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2021 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yuchun Li <liyuchun@easycorp.ltd>
 * @package     sonarqube
 * @version     $Id: reprotview.html.php 935 2022-01-25 10:52:24Z liyuchun@easycorp.ltd $
 * @link        https://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<div id='mainContent' class='main-content'>
  <?php unset($_GET['onlybody']);?>
  <?php if(empty($measures)): ?>
    <div class='empty-tip'><?php echo $lang->sonarqube->noReport;?></div>
  <?php else:?>
  <div class="main-header">
    <div class="page-title">
      <span class='text' title="<?php echo $projectName;?>">
        <h4>
          <?php echo common::hasPriv('sonarqube', 'browseIssue') ? html::a($this->createLink('sonarqube', 'browseIssue', "sonarqubeID={$sonarqubeID}&project={$projectName}"), $projectName, '_parent') : $projectName;?>
          <?php if(!empty($qualitygate->projectStatus->status) and $qualitygate->projectStatus->status != 'NONE'):?>
          <span class="label label-badge label-<?php echo zget($config->sonarqube->projectStatusClass, $qualitygate->projectStatus->status);?>">
            <?php echo zget($lang->sonarqube->qualitygateList, $qualitygate->projectStatus->status);?>
          </span>
          <?php endif;?>
        </h4>
      </span>
    </div>
  </div>
  <table class="table table-data table-report">
    <thead>
      <tr class="text-center">
        <th><?php echo "<span class='table-nest-icon icon icon-bug'></span>" . $lang->sonarqube->report->bugs;?></th>
        <th class="w-140px"><?php echo "<span class='table-nest-icon icon icon-unlock'></span>" . $lang->sonarqube->report->vulnerabilities;?></th>
        <th class="w-180px"><?php echo "<span class='table-nest-icon icon icon-shield'></span>" . $lang->sonarqube->report->security_hotspots_reviewed;?></th>
        <th class="w-130px"><?php echo "<span class='table-nest-icon icon icon-frown'></span>" . $lang->sonarqube->report->code_smells;?></th>
        <th><?php echo $lang->sonarqube->report->coverage;?></th>
        <th><?php echo $lang->sonarqube->report->duplicated_lines_density;?></th>
        <th><?php echo $lang->sonarqube->report->ncloc;?></th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
        <td><?php echo $measures['bugs'];?></td>
        <td><?php echo $measures['vulnerabilities'];?></td>
        <td><?php echo $measures['security_hotspots_reviewed'];?></td>
        <td><?php echo $measures['code_smells'];?></td>
        <td><?php echo $measures['coverage'];?></td>
        <td><?php echo $measures['duplicated_lines_density'];?></td>
        <td><?php echo $measures['ncloc'];?></td>
      </tr>
    </tbody>
  </table>
  <?php endif;?>
</div>
