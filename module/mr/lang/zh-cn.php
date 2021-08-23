<?php
$lang->mr->common = "合并请求";
$lang->mr->create = "创建{$lang->mr->common}";
$lang->mr->browse = "浏览{$lang->mr->common}";
$lang->mr->list   = $lang->mr->browse;
$lang->mr->edit   = "编辑{$lang->mr->common}";
$lang->mr->delete = "删除{$lang->mr->common}";
$lang->mr->view   = "{$lang->mr->common}详情";
$lang->mr->source = '源项目分支';
$lang->mr->target = '目标项目分支';

$lang->mr->id          = 'ID';
$lang->mr->mriid       = "MR原始ID";
$lang->mr->name        = '名称';
$lang->mr->status      = '状态';
$lang->mr->author      = '创建人';
$lang->mr->assignee    = '指派给';
$lang->mr->reviewer    = '评审人';
$lang->mr->link        = 'GitLab链接';
$lang->mr->mergeStatus = '是否可合并';

$lang->mr->statusList = array();
$lang->mr->statusList['opened'] = '开放中';
$lang->mr->statusList['closed'] = '已关闭';
$lang->mr->statusList['merged'] = '已合并';

$lang->mr->mergeStatusList = array();
$lang->mr->mergeStatusList['checking']         = '检查中';
$lang->mr->mergeStatusList['can_be_merged']    = '可合并';
$lang->mr->mergeStatusList['cannot_be_merged'] = '不可合并';

$lang->mr->description   = '描述';
$lang->mr->confirmDelete = '确认删除该merge request吗？';
$lang->mr->sourceProject = '源项目';
$lang->mr->sourceBranch  = '源分支';
$lang->mr->targetProject = '目标项目';
$lang->mr->targetBranch  = '目标分支';

$lang->mr->usersTips = '提示：如果无法选择指派人和评审人，请先前往GitLab页面绑定用户。';
$lang->mr->notFound  = "此{$lang->mr->common}不存在。";

$lang->mr->createFailedFromAPI = "创建合并请求失败。";
$lang->mr->accessGitlabFailed  = "当前无法连接到GitLab服务器。";

$lang->mr->description = "描述";

