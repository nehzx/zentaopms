<?php
/**
 * The group module zh-cn file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     group
 * @version     $Id: zh-cn.php 4719 2013-05-03 02:20:28Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
$lang->group->common             = '权限分组';
$lang->group->browse             = '浏览分组';
$lang->group->create             = '新增分组';
$lang->group->edit               = '编辑分组';
$lang->group->copy               = '复制分组';
$lang->group->delete             = '删除分组';
$lang->group->manageView         = '视野维护';
$lang->group->managePriv         = '权限维护';
$lang->group->managePrivByGroup  = '权限维护';
$lang->group->managePrivByModule = '按模块分配权限';
$lang->group->byModuleTips       = '<span class="tips">（可以按住Shift或者Ctrl键进行多选）</span>';
$lang->group->allTips            = '勾选此项后，管理员可管理系统中所有对象，包括后续创建的对象。';
$lang->group->manageMember       = '成员维护';
$lang->group->manageProjectAdmin = '维护项目管理员';
$lang->group->confirmDelete      = '您确定删除“%s”用户分组吗？';
$lang->group->successSaved       = '成功保存';
$lang->group->errorNotSaved      = '没有保存，请确认选择了权限数据。';
$lang->group->viewList           = '可访问视图';
$lang->group->object             = '可管理对象';
$lang->group->manageProgram      = '可管理项目集';
$lang->group->manageProject      = '可管理项目';
$lang->group->manageExecution    = '可管理' . $lang->execution->common;
$lang->group->manageProduct      = '可管理' . $lang->productCommon;
$lang->group->programList        = '可访问项目集';
$lang->group->productList        = '可访问' . $lang->productCommon;
$lang->group->projectList        = '可访问项目';
$lang->group->executionList      = "可访问{$lang->execution->common}";
$lang->group->dynamic            = '可查看动态';
$lang->group->noticeVisit        = '空代表没有访问限制';
$lang->group->noneProgram        = "暂时没有项目集";
$lang->group->noneProduct        = "暂时没有{$lang->productCommon}";
$lang->group->noneExecution      = "暂时没有{$lang->execution->common}";
$lang->group->project            = '项目';
$lang->group->group              = '分组';
$lang->group->more               = '更多';
$lang->group->allCheck           = '全部';

global $config;
if($config->systemMode == 'new') $lang->group->noneProject = '暂时没有项目';
if($config->systemMode == 'classic') $lang->group->noneProject = "暂时没有{$lang->executionCommon}";

$lang->group->id       = '编号';
$lang->group->name     = '分组名称';
$lang->group->desc     = '分组描述';
$lang->group->role     = '角色';
$lang->group->acl      = '权限';
$lang->group->users    = '用户列表';
$lang->group->module   = '模块';
$lang->group->method   = '方法';
$lang->group->priv     = '权限';
$lang->group->option   = '选项';
$lang->group->inside   = '组内用户';
$lang->group->outside  = '组外用户';
$lang->group->limited  = '受限用户组';
$lang->group->other    = '其他模块';
$lang->group->all      = '所有权限';

$lang->group->copyOptions['copyPriv'] = '复制权限';
$lang->group->copyOptions['copyUser'] = '复制用户';

$lang->group->versions['']           = '修改历史';
$lang->group->versions['16_5_beta1'] = '禅道16.5.beta1';
$lang->group->versions['16_4']       = '禅道16.4';
$lang->group->versions['16_3']       = '禅道16.3';
$lang->group->versions['16_2']       = '禅道16.2';
$lang->group->versions['16_1']       = '禅道16.1';
$lang->group->versions['16_0']       = '禅道16.0';
$lang->group->versions['16_0_beta1'] = '禅道16.0.beta1';
$lang->group->versions['15_8']       = '禅道15.8';
$lang->group->versions['15_7']       = '禅道15.7';
$lang->group->versions['15_0_rc1']   = '禅道15.0.rc1';
$lang->group->versions['12_5']       = '禅道12.5';
$lang->group->versions['12_3']       = '禅道12.3';
$lang->group->versions['11_6_2']     = '禅道11.6.2';
$lang->group->versions['10_6']       = '禅道10.6';
$lang->group->versions['10_1']       = '禅道10.1';
$lang->group->versions['10_0_alpha'] = '禅道10.0.alpha';
$lang->group->versions['9_8']        = '禅道9.8';
$lang->group->versions['9_6']        = '禅道9.6';
$lang->group->versions['9_5']        = '禅道9.5';
$lang->group->versions['9_2']        = '禅道9.2';
$lang->group->versions['9_1']        = '禅道9.1';
$lang->group->versions['9_0']        = '禅道9.0';
$lang->group->versions['8_4']        = '禅道8.4';
$lang->group->versions['8_3']        = '禅道8.3';
$lang->group->versions['8_2_beta']   = '禅道8.2.beta';
$lang->group->versions['8_0_1']      = '禅道8.0.1';
$lang->group->versions['8_0']        = '禅道8.0';
$lang->group->versions['7_4_beta']   = '禅道7.4.beta';
$lang->group->versions['7_3']        = '禅道7.3';
$lang->group->versions['7_2']        = '禅道7.2';
$lang->group->versions['7_1']        = '禅道7.1';
$lang->group->versions['6_4']        = '禅道6.4';
$lang->group->versions['6_3']        = '禅道6.3';
$lang->group->versions['6_2']        = '禅道6.2';
$lang->group->versions['6_1']        = '禅道6.1';
$lang->group->versions['5_3']        = '禅道5.3';
$lang->group->versions['5_1']        = '禅道5.1';
$lang->group->versions['5_0_beta2']  = '禅道5.0.beta2';
$lang->group->versions['5_0_beta1']  = '禅道5.0.beta1';
$lang->group->versions['4_3_beta']   = '禅道4.3.beta';
$lang->group->versions['4_2_beta']   = '禅道4.2.beta';
$lang->group->versions['4_1']        = '禅道4.1';
$lang->group->versions['4_0_1']      = '禅道4.0.1';
$lang->group->versions['4_0']        = '禅道4.0';
$lang->group->versions['4_0_beta2']  = '禅道4.0.beta2';
$lang->group->versions['4_0_beta1']  = '禅道4.0.beta1';
$lang->group->versions['3_3']        = '禅道3.3';
$lang->group->versions['3_2_1']      = '禅道3.2.1';
$lang->group->versions['3_2']        = '禅道3.2';
$lang->group->versions['3_1']        = '禅道3.1';
$lang->group->versions['3_0_beta2']  = '禅道3.0.beta2';
$lang->group->versions['3_0_beta1']  = '禅道3.0.beta1';
$lang->group->versions['2_4']        = '禅道2.4';
$lang->group->versions['2_3']        = '禅道2.3';
$lang->group->versions['2_2']        = '禅道2.2';
$lang->group->versions['2_1']        = '禅道2.1';
$lang->group->versions['2_0']        = '禅道2.0';
$lang->group->versions['1_5']        = '禅道1.5';
$lang->group->versions['1_4']        = '禅道1.4';
$lang->group->versions['1_3']        = '禅道1.3';
$lang->group->versions['1_2']        = '禅道1.2';
$lang->group->versions['1_1']        = '禅道1.1';
$lang->group->versions['1_0_1']      = '禅道1.0.1';

include (dirname(__FILE__) . '/resource.php');
