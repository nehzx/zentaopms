<?php
$lang->action->label->execution = "Kanban|execution|task|executionID=%s";
$lang->action->label->task      = 'Task|task|view|taskID=%s';

/* Object type. */
$lang->action->objectTypes['execution'] = 'Project' . $lang->executionCommon;

$lang->action->search = new stdclass();
$lang->action->search->objectTypeList['']            = '';
$lang->action->search->objectTypeList['project']     = 'Project';
$lang->action->search->objectTypeList['execution']   = 'Kanban';
$lang->action->search->objectTypeList['story']       = "$lang->SRCommon/$lang->URCommon";
$lang->action->search->objectTypeList['task']        = 'Task';
$lang->action->search->objectTypeList['user']        = 'User';
$lang->action->search->objectTypeList['doc']         = 'Doc';
$lang->action->search->objectTypeList['todo']        = 'Todo';

unset($lang->action->dynamicAction->program);
unset($lang->action->dynamicAction->product);
unset($lang->action->dynamicAction->productplan);
unset($lang->action->dynamicAction->release);
unset($lang->action->dynamicAction->build);
unset($lang->action->dynamicAction->bug);
unset($lang->action->dynamicAction->testtask);
unset($lang->action->dynamicAction->case);
unset($lang->action->dynamicAction->testreport);
unset($lang->action->dynamicAction->testsuite);
unset($lang->action->dynamicAction->caselib);
unset($lang->action->dynamicAction->issue);
unset($lang->action->dynamicAction->risk);
unset($lang->action->dynamicAction->opportunity);
unset($lang->action->dynamicAction->researchplan);
unset($lang->action->dynamicAction->researchreport);
unset($lang->action->dynamicAction->meeting);
unset($lang->action->dynamicAction->auditplan);
unset($lang->action->dynamicAction->pssp);
unset($lang->action->dynamicAction->nc);

$lang->action->dynamicAction->task = array();
$lang->action->dynamicAction->task['opened']              = 'Create Task';
$lang->action->dynamicAction->task['edited']              = 'Edit Task';
$lang->action->dynamicAction->task['commented']           = 'Commented Task';
$lang->action->dynamicAction->task['assigned']            = 'Assigned Task';
$lang->action->dynamicAction->task['confirmed']           = "Confirmed {$lang->SRCommon} change";
$lang->action->dynamicAction->task['started']             = 'Started Task';
$lang->action->dynamicAction->task['finished']            = 'Finish Task';
$lang->action->dynamicAction->task['recordestimate']      = 'recorded';
$lang->action->dynamicAction->task['editestimate']        = 'Editer Estimation';
$lang->action->dynamicAction->task['deleteestimate']      = 'Delete Estimation';
$lang->action->dynamicAction->task['paused']              = 'Paused Task';
$lang->action->dynamicAction->task['closed']              = 'Closed Task';
$lang->action->dynamicAction->task['canceled']            = 'Canceled Task';
$lang->action->dynamicAction->task['activated']           = 'Activated Task';
$lang->action->dynamicAction->task['createchildren']      = 'Create child Task';
$lang->action->dynamicAction->task['unlinkparenttask']    = 'From parent TaskCanceledLink';
$lang->action->dynamicAction->task['deletechildrentask']  = 'Deleted  Task';
$lang->action->dynamicAction->task['linkparenttask']      = 'Link parent Task';
$lang->action->dynamicAction->task['linkchildtask']       = 'Link child Task';

$lang->action->label->createchildrenstory   = "Create child story";
$lang->action->label->linkchildstory        = "Link child story";
$lang->action->label->unlinkchildrenstory   = "CanceledLink child story";
$lang->action->label->linkparentstory       = "Link parent story";
$lang->action->label->unlinkparentstory     = "From parent storyCanceledLink";
$lang->action->label->deletechildrenstory   = "Deleted child story";

$lang->action->search->label = array();
$lang->action->search->label['']                      = '';
$lang->action->search->label['created']               = $lang->action->label->created;
$lang->action->search->label['opened']                = $lang->action->label->opened;
$lang->action->search->label['changed']               = $lang->action->label->changed;
$lang->action->search->label['edited']                = $lang->action->label->edited;
$lang->action->search->label['assigned']              = $lang->action->label->assigned;
$lang->action->search->label['closed']                = $lang->action->label->closed;
$lang->action->search->label['deleted']               = $lang->action->label->deleted;
$lang->action->search->label['deletedfile']           = $lang->action->label->deletedfile;
$lang->action->search->label['editfile']              = $lang->action->label->editfile;
$lang->action->search->label['erased']                = $lang->action->label->erased;
$lang->action->search->label['undeleted']             = $lang->action->label->undeleted;
$lang->action->search->label['hidden']                = $lang->action->label->hidden;
$lang->action->search->label['commented']             = $lang->action->label->commented;
$lang->action->search->label['activated']             = $lang->action->label->activated;
$lang->action->search->label['reviewed']              = $lang->action->label->reviewed;
$lang->action->search->label['moved']                 = $lang->action->label->moved;
$lang->action->search->label['confirmed']             = $lang->action->label->confirmed;
$lang->action->search->label['totask']                = $lang->action->label->totask;
$lang->action->search->label['changestatus']          = $lang->action->label->changestatus;
$lang->action->search->label['marked']                = $lang->action->label->marked;
$lang->action->search->label['linked2project']        = $lang->action->label->linked2project;
$lang->action->search->label['unlinkedfromproject']   = $lang->action->label->unlinkedfromproject;
$lang->action->search->label['linked2execution']      = $lang->action->label->linked2execution;
$lang->action->search->label['unlinkedfromexecution'] = $lang->action->label->unlinkedfromexecution;
$lang->action->search->label['started']               = $lang->action->label->started;
$lang->action->search->label['restarted']             = $lang->action->label->restarted;
$lang->action->search->label['recordestimate']        = $lang->action->label->recordestimate;
$lang->action->search->label['editestimate']          = $lang->action->label->editestimate;
$lang->action->search->label['canceled']              = $lang->action->label->canceled;
$lang->action->search->label['finished']              = $lang->action->label->finished;
$lang->action->search->label['paused']                = $lang->action->label->paused;
$lang->action->search->label['verified']              = $lang->action->label->verified;
$lang->action->search->label['login']                 = $lang->action->label->login;
$lang->action->search->label['logout']                = $lang->action->label->logout;

$lang->action->label->createchildrenstory   = "Create child story";
$lang->action->label->linkchildstory        = "Link child story";
$lang->action->label->unlinkchildrenstory   = "unlinked a child story";
$lang->action->label->linkparentstory       = "Link parent story";
$lang->action->label->unlinkparentstory     = "CanceledLink from parent story ";
$lang->action->label->deletechildrenstory   = "Deleted child story";

$lang->action->desc->createchildrenstory = '$date, <strong>$actor</strong> Create child story <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkchildstory      = '$date, <strong>$actor</strong> Link child story <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkchildrenstory = '$date, <strong>$actor</strong> Unlink child story <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkparentstory     = '$date, <strong>$actor</strong> Link from parent story <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkparentstory   = '$date, <strong>$actor</strong> From parent story<strong>$extra</strong>CanceledLink。' . "\n";
$lang->action->desc->deletechildrenstory = '$date, <strong>$actor</strong> Deleted child story<strong>$extra</strong>。' . "\n";

$lang->action->executionNoProject = 'The execution does not belong to a project,please restore the project first';
