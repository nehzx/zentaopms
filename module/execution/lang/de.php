<?php
/**
 * The execution module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     execution
 * @version     $Id: en.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
/* Fields. */
$lang->execution->allExecutions       = 'Alle';
$lang->execution->allExecutionAB      = 'Execution List';
$lang->execution->id                  = $lang->executionCommon . ' ID';
$lang->execution->type                = 'Typ';
$lang->execution->name                = 'Name';
$lang->execution->code                = 'Alias';
$lang->execution->projectName         = 'Project';
$lang->execution->project             = 'Project';
$lang->execution->execId              = "{$lang->execution->common} ID";
$lang->execution->execName            = 'Execution Name';
$lang->execution->execCode            = 'Execution Code';
$lang->execution->execType            = 'Execution Type';
$lang->execution->lifetime            = 'Project Cycle';
$lang->execution->attribute           = 'Stage Type';
$lang->execution->percent             = 'Workload %';
$lang->execution->milestone           = 'Milestone';
$lang->execution->parent              = 'Project';
$lang->execution->path                = 'Path';
$lang->execution->grade               = 'Grade';
$lang->execution->output              = 'Output';
$lang->execution->version             = 'Version';
$lang->execution->parentVersion       = 'Parent Version';
$lang->execution->planDuration        = 'Plan Duration';
$lang->execution->realDuration        = 'Real Duration';
$lang->execution->openedVersion       = 'Opened Version';
$lang->execution->lastEditedBy        = 'Last EditedBy';
$lang->execution->lastEditedDate      = 'Last EditedDate';
$lang->execution->suspendedDate       = 'Suspended Date';
$lang->execution->vision              = 'Vision';
$lang->execution->displayCards        = 'Max cards per column';
$lang->execution->fluidBoard          = 'Column Width';
$lang->execution->stage               = 'Stage';
$lang->execution->pri                 = 'Priorität';
$lang->execution->openedBy            = 'OpenedBy';
$lang->execution->openedDate          = 'OpenedDate';
$lang->execution->closedBy            = 'ClosedBy';
$lang->execution->closedDate          = 'ClosedDate';
$lang->execution->canceledBy          = 'CanceledBy';
$lang->execution->canceledDate        = 'CanceledDate';
$lang->execution->begin               = 'Start';
$lang->execution->end                 = 'Ende';
$lang->execution->dateRange           = 'Dauer';
$lang->execution->realBeganAB         = 'Actual Begin';
$lang->execution->realEndAB           = 'Actual End';
$lang->execution->realBegan           = 'Tatsächlicher Start';
$lang->execution->realEnd             = 'Tatsächliches Ende';
$lang->execution->to                  = 'An';
$lang->execution->days                = 'Manntage';
$lang->execution->day                 = 'Tag';
$lang->execution->workHour            = 'Stunden';
$lang->execution->workHourUnit        = 'H';
$lang->execution->totalHours          = 'Arbeitsstunden';
$lang->execution->totalDays           = 'Arbeitstage';
$lang->execution->status              = 'Status';
$lang->execution->execStatus          = 'Status';
$lang->execution->subStatus           = 'Sub Status';
$lang->execution->desc                = 'Beschreibung';
$lang->execution->execDesc            = 'Description';
$lang->execution->owner               = 'Besitzer';
$lang->execution->PO                  = "{$lang->executionCommon} Owner";
$lang->execution->PM                  = "{$lang->executionCommon} Manager";
$lang->execution->execPM              = "Execution Manager";
$lang->execution->QD                  = 'Test Manager';
$lang->execution->RD                  = 'Release Manager';
$lang->execution->release             = 'Release';
$lang->execution->acl                 = 'Zugriffskontrolle';
$lang->execution->auth                = 'Privileges';
$lang->execution->teamname            = 'Team Name';
$lang->execution->updateOrder         = 'Rank';
$lang->execution->order               = "Sortierung {$lang->executionCommon}";
$lang->execution->orderAB             = "Rank";
$lang->execution->products            = "Verknüpfung {$lang->productCommon}";
$lang->execution->whitelist           = 'Whitelist';
$lang->execution->addWhitelist        = 'Add Whitelist';
$lang->execution->unbindWhitelist     = 'Remove Whitelist';
$lang->execution->totalEstimate       = 'Geplant';
$lang->execution->totalConsumed       = 'Genutzt';
$lang->execution->totalLeft           = 'Rest';
$lang->execution->progress            = 'Fortschritt';
$lang->execution->hours               = '%s geplant, %s verbraucht, %s Rest.';
$lang->execution->viewBug             = 'Bugs';
$lang->execution->noProduct           = "Kein {$lang->productCommon}";
$lang->execution->createStory         = "Story erstellen";
$lang->execution->storyTitle          = "Story Name";
$lang->execution->storyView           = "Story Detail";
$lang->execution->all                 = 'Alle';
$lang->execution->undone              = 'Unabgeschlossen ';
$lang->execution->unclosed            = 'Geschlossen';
$lang->execution->closedExecution     = 'Closed Execution';
$lang->execution->typeDesc            = "Keine {$lang->SRCommon}, Bug, Build, Testaufgabe oder ist bei OPS erlaubt";
$lang->execution->mine                = 'Meine Zuständigkeit: ';
$lang->execution->involved            = 'Mine';
$lang->execution->other               = 'Andere';
$lang->execution->deleted             = 'Gelöscht';
$lang->execution->delayed             = 'Verspätet';
$lang->execution->product             = $lang->execution->products;
$lang->execution->readjustTime        = 'Start und Ende anpassen';
$lang->execution->readjustTask        = 'Fälligkeit der Aufgabe anpassen';
$lang->execution->effort              = 'Aufwand';
$lang->execution->storyEstimate       = 'Story Estimate';
$lang->execution->newEstimate         = 'New Estimate';
$lang->execution->reestimate          = 'Reestimate';
$lang->execution->selectRound         = 'Select Round';
$lang->execution->average             = 'Average';
$lang->execution->relatedMember       = 'Teammitglieder';
$lang->execution->watermark           = 'Exported by ZenTao';
$lang->execution->burnXUnit           = '(Date)';
$lang->execution->burnYUnit           = '(Hours)';
$lang->execution->waitTasks           = 'Waiting Tasks';
$lang->execution->viewByUser          = 'By User';
$lang->execution->oneProduct          = "Only one stage can be linked {$lang->productCommon}";
$lang->execution->noLinkProduct       = "Stage not linked {$lang->productCommon}";
$lang->execution->recent              = 'Recent visits: ';
$lang->execution->copyNoExecution     = 'There are no ' . $lang->executionCommon . 'available to copy.';
$lang->execution->noTeam              = 'No team members at the moment';
$lang->execution->or                  = ' or ';
$lang->execution->selectProject       = 'Please select project';
$lang->execution->unfoldClosed        = 'Unfold Closed';
$lang->execution->editName            = 'Edit Name';
$lang->execution->setWIP              = 'WIP Settings';
$lang->execution->sortColumn          = 'Kanban Card Sorting';
$lang->execution->batchCreateStory    = "Batch create {$lang->SRCommon}";
$lang->execution->batchCreateTask     = 'Batch create task';
$lang->execution->kanbanNoLinkProduct = "Kanban not linked {$lang->productCommon}";
$lang->execution->list                = "{$lang->executionCommon} List";

/* Fields of zt_team. */
$lang->execution->root     = 'Root';
$lang->execution->estimate = 'estimate';
$lang->execution->consumed = 'consumed';
$lang->execution->left     = 'Left';

if($this->config->systemMode == 'new')     $lang->execution->copyTeamTip = "select Project/{$lang->execution->common} to copy its members";
if($this->config->systemMode == 'classic') $lang->execution->copyTeamTip = "select Project/{$lang->execution->common} to copy its members";

$lang->execution->start    = 'Start';
$lang->execution->activate = 'Aktivieren';
$lang->execution->putoff   = 'Zurückstellen';
$lang->execution->suspend  = 'Aussetzen';
$lang->execution->close    = 'Schließen';
$lang->execution->export   = 'Export';

$lang->execution->endList[7]   = '1 Woche';
$lang->execution->endList[14]  = '2 Wochen';
$lang->execution->endList[31]  = '1 Monat';
$lang->execution->endList[62]  = '2 Monate';
$lang->execution->endList[93]  = '3 Monate';
$lang->execution->endList[186] = '6 Monate';
$lang->execution->endList[365] = '1 Jahr';

$lang->execution->lifeTimeList['short'] = "Short-Term";
$lang->execution->lifeTimeList['long']  = "Long-Term";
$lang->execution->lifeTimeList['ops']   = "DevOps";

$lang->team = new stdclass();
$lang->team->account    = 'Konto';
$lang->team->role       = 'Rolle';
$lang->team->join       = 'Beigetreten';
$lang->team->hours      = 'Stunde/Tag';
$lang->team->days       = 'Arbeitstage';
$lang->team->totalHours = 'Summe';

$lang->team->limited            = 'Eingeschränkte Benutzer';
$lang->team->limitedList['yes'] = 'Ja';
$lang->team->limitedList['no']  = 'Nein';

$lang->execution->basicInfo = 'Basis Info';
$lang->execution->otherInfo = 'Andere Info';

/* Field value list. */
$lang->execution->statusList['wait']      = 'Wartend';
$lang->execution->statusList['doing']     = 'In Arbeit';
$lang->execution->statusList['suspended'] = 'Ausgesetzt';
$lang->execution->statusList['closed']    = 'Geschlossen';

global $config;
if($config->systemMode == 'new')
{
    $lang->execution->aclList['private'] = 'Private (for team members and project stakeholders)';
    $lang->execution->aclList['open']    = 'Inherited Execution ACL (for who can access the current project)';
}
else
{
    $lang->execution->aclList['private'] = 'Private (for team members and project stakeholders)';
    $lang->execution->aclList['open']    = 'Inherited Execution ACL (for who can access the current project)';
}

$lang->execution->kanbanAclList['private'] = 'Private';
$lang->execution->kanbanAclList['open']    = 'Inherited Project';

$lang->execution->storyPoint = 'Story Point';

$lang->execution->burnByList['left']       = 'View by remaining hours';
$lang->execution->burnByList['estimate']   = "View by plan hours";
$lang->execution->burnByList['storyPoint'] = 'View by story point';

/* Method list. */
$lang->execution->index               = "Home";
$lang->execution->task                = 'Aufgaben';
$lang->execution->groupTask           = 'Nach Gruppen';
$lang->execution->story               = 'Storys';
$lang->execution->qa                  = 'QA';
$lang->execution->bug                 = 'Bugs';
$lang->execution->testcase            = 'Testcase List';
$lang->execution->dynamic             = 'Verlauf';
$lang->execution->latestDynamic       = 'Letzter Verlauf';
$lang->execution->build               = 'Builds';
$lang->execution->testtask            = 'Testaufgaben';
$lang->execution->burn                = 'Burndown';
$lang->execution->computeBurn         = 'Aktualisieren';
$lang->execution->burnData            = 'Burndown Daten';
$lang->execution->fixFirst            = 'Bearbeite Mannstunden des ersten Tags';
$lang->execution->team                = 'Teammitglieder';
$lang->execution->doc                 = 'Dok';
$lang->execution->doclib              = 'Dok Bibliothek';
$lang->execution->manageProducts      = 'Verküpfe ' . $lang->productCommon;
$lang->execution->linkStory           = 'Link Stories';
$lang->execution->linkStoryByPlan     = 'Verküpfe Story aus Plan';
$lang->execution->linkPlan            = 'Verküpfe Plan';
$lang->execution->unlinkStoryTasks    = 'Verknüpfung aufheben';
$lang->execution->linkedProducts      = 'Verküpfte Produkte';
$lang->execution->unlinkedProducts    = 'Produkt verknüpfung aufheben';
$lang->execution->view                = "Übersicht";
$lang->execution->startAction         = "Start Execution";
$lang->execution->activateAction      = "Activate Execution";
$lang->execution->delayAction         = "Delay Execution";
$lang->execution->suspendAction       = "Suspend Execution";
$lang->execution->closeAction         = "Close Execution";
$lang->execution->testtaskAction      = "Execution Request";
$lang->execution->teamAction          = "Execution Members";
$lang->execution->kanbanAction        = "Execution Kanban";
$lang->execution->printKanbanAction   = "Print Kanban";
$lang->execution->treeAction          = "Execution Tree View";
$lang->execution->exportAction        = "Export Execution";
$lang->execution->computeBurnAction   = "Compute Burn";
$lang->execution->create              = "Erstelle Projekt";
$lang->execution->createExec          = "Create Execution";
$lang->execution->createAction        = "Create {$lang->execution->common}";
$lang->execution->copyExec            = "Copy Execution";
$lang->execution->copy                = "Kopiere {$lang->executionCommon}";
$lang->execution->delete              = "Lösche";
$lang->execution->deleteAB            = "Lösche Execution";
$lang->execution->browse              = "Durchsuchen";
$lang->execution->edit                = "Bearbeiten";
$lang->execution->editAction          = "Edit Execution";
$lang->execution->batchEdit           = "Mehere bearbeiten";
$lang->execution->batchEditAction     = "Batch Edit";
$lang->execution->manageMembers       = 'Teams verwalten';
$lang->execution->unlinkMember        = 'Mitgliefer entfernen';
$lang->execution->unlinkStory         = 'Story entfernen';
$lang->execution->unlinkStoryAB       = 'Unlink';
$lang->execution->batchUnlinkStory    = 'Mehere Storys entfernen';
$lang->execution->importTask          = 'Importiere Aufgaben';
$lang->execution->importPlanStories   = 'Verknüpfe Story aus Plan';
$lang->execution->importBug           = 'Importiere Bugs';
$lang->execution->tree                = 'Baum';
$lang->execution->treeTask            = 'Aufgabe anzeigen';
$lang->execution->treeStory           = 'Story anzeigen';
$lang->execution->treeOnlyTask        = 'Show Task Only';
$lang->execution->treeOnlyStory       = 'Show Story Only';
$lang->execution->storyKanban         = 'Story Kanban';
$lang->execution->storySort           = 'Story sortieren';
$lang->execution->importPlanStory     = '' . $lang->executionCommon . ' wurde erstellt!\nMöchten Sie Storys aus dem Plan importieren?';
$lang->execution->importEditPlanStory = $lang->executionCommon . ' is edited!\nDo you want to import stories that have been linked to the plan? The stories in the draft will be automatically filtered out when imported.';
$lang->execution->needLinkProducts    = 'The execution has not been linked with any product, and the related functions cannot be used. Please link the product first and try again.';
$lang->execution->iteration           = 'Iteration';
$lang->execution->iterationInfo       = '%s Iterationen';
$lang->execution->viewAll             = 'Alle anzeigen';
$lang->execution->testreport          = 'Test Report';
$lang->execution->taskKanban          = 'Task Kanban';
$lang->execution->RDKanban            = 'Research & Development Kanban';

/* Group browsing. */
$lang->execution->allTasks     = 'Alle';
$lang->execution->assignedToMe = 'Meine';
$lang->execution->myInvolved   = 'Beteiligt';
$lang->execution->assignedByMe = 'AssignedByMe';

$lang->execution->statusSelects['']             = 'Mehr';
$lang->execution->statusSelects['wait']         = 'Wartend';
$lang->execution->statusSelects['doing']        = 'In Arbeit';
$lang->execution->statusSelects['undone']       = 'Undone';
$lang->execution->statusSelects['finishedbyme'] = 'Von mir abgeschlossen';
$lang->execution->statusSelects['done']         = 'Erledigt';
$lang->execution->statusSelects['closed']       = 'Geschlossen';
$lang->execution->statusSelects['cancel']       = 'Abgebrochen';
$lang->execution->statusSelects['delayed']      = 'Delayed';

$lang->execution->groups['']           = 'Gruppen';
$lang->execution->groups['story']      = 'Nach Story';
$lang->execution->groups['status']     = 'Nach Status';
$lang->execution->groups['pri']        = 'Nach Priorität';
$lang->execution->groups['assignedTo'] = 'Nach Zuweisung an';
$lang->execution->groups['finishedBy'] = 'Nach abgeschlossen von';
$lang->execution->groups['closedBy']   = 'Nach geschlossen von';
$lang->execution->groups['type']       = 'Nach Typ';

$lang->execution->groupFilter['story']['all']         = $lang->execution->all;
$lang->execution->groupFilter['story']['linked']      = 'Aufgaben verknüpft mit Story';
$lang->execution->groupFilter['pri']['all']           = $lang->execution->all;
$lang->execution->groupFilter['pri']['noset']         = 'Not gesetzt';
$lang->execution->groupFilter['assignedTo']['undone'] = 'Unabgeschlossen';
$lang->execution->groupFilter['assignedTo']['all']    = $lang->execution->all;

$lang->execution->byQuery = 'Suche';

/* Query condition list. */
$lang->execution->allExecution      = "Alle {$lang->executionCommon}";
$lang->execution->aboveAllProduct   = "Alle oberen {$lang->productCommon}";
$lang->execution->aboveAllExecution = "Alle oberen {$lang->executionCommon}";

/* Page prompt. */
$lang->execution->linkStoryByPlanTips  = "This action will link all stories in this plan to the {$lang->executionCommon}.";
$lang->execution->batchCreateStoryTips = "Please select the product that needs to be created in batches";
$lang->execution->selectExecution      = "Auswahl {$lang->executionCommon}";
$lang->execution->beginAndEnd          = 'Dauer';
$lang->execution->lblStats             = 'Mannstunden Summe(h) : ';
$lang->execution->stats                = '<strong>%s</strong> Verfügbar, <strong>%s</strong> geplant, <strong>%s</strong> genutzt, <strong>%s</strong> Rest.';
$lang->execution->taskSummary          = "Aufgaben auf dieser Seite: <strong>%s</strong> Total, <strong>%s</strong> Wartend, <strong>%s</strong> In Arbeit;  &nbsp;&nbsp;&nbsp;  Stunden : <strong>%s</strong> geplant., <strong>%s</strong> genutzt, <strong>%s</strong> Rest.";
$lang->execution->pageSummary          = "Aufgaben auf dieser Seite:  <strong>%total%</strong>, <strong>%wait%</strong> Wartend, <strong>%doing%</strong> In Arbeit;    Stunden: <strong>%estimate%</strong>  geplant, <strong>%consumed%</strong> genutzt, <strong>%left%</strong> Rest.";
$lang->execution->checkedSummary       = " <strong>%total%</strong> Geprüft, <strong>%wait%</strong> Wartend, <strong>%doing%</strong> In Arbeit;    Stunden: <strong>%estimate%</strong>  geplant, <strong>%consumed%</strong> genutzt, <strong>%left%</strong> Rest.";
$lang->execution->memberHoursAB        = "%s hat <strong>%s</strong> Stunden";
$lang->execution->memberHours          = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Arbeitsstunden</div><div class="segment-value">%s</div></div></div></div>';
$lang->execution->countSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Aufgaben</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">In Arbeit</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">Wait</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->execution->timeSummary          = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Geplant</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Genutzt</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Rest</div><div class="segment-value">%s</div></div></div></div>';
$lang->execution->groupSummaryAB       = "<div>Aufgaben <strong>%s</strong></div><div><span class='text-muted'>Wartend</span> %s &nbsp; <span class='text-muted'>In Arbeit</span> %s</div><div>Geplant <strong>%s</strong></div><div><span class='text-muted'>Genutzt</span> %s &nbsp; <span class='text-muted'>Rest</span> %s</div>";
$lang->execution->wbs                  = "Aufgaben aufteilen";
$lang->execution->batchWBS             = "Mehrere aufteilen";
$lang->execution->howToUpdateBurn      = "<a href='http://api.zentao.net/goto.php?item=burndown&lang=zh-cn' target='_blank' title='Wie wird der Burndown Chart aktualisiert?' class='btn btn-link'>Hilfe <i class='icon icon-help'></i></a>";
$lang->execution->whyNoStories         = "Keine Story kann verknüpft werden. Bitte prüfen Sie ob ein Story mit {$lang->executionCommon} verknüpft ist {$lang->productCommon} und stellen Sie sicher das diese geprüft ist.";
$lang->execution->productStories       = "{$lang->executionCommon} verknüpfte Story ist ein Subset von {$lang->productCommon}, welche nur nach überprüfung verknüpft werden kann. Bitte <a href='%s'> Story verknüpfen</a>。";
$lang->execution->haveDraft            = "There are %s draft stories can't be linked.";
$lang->execution->doneExecutions       = 'Erledigt';
$lang->execution->selectDept           = 'Abteilung wählen';
$lang->execution->selectDeptTitle      = 'Abteilung wählen';
$lang->execution->copyTeam             = 'Team kopieren';
$lang->execution->copyFromTeam         = "Kopieren von {$lang->executionCommon} Team: <strong>%s</strong>";
$lang->execution->noMatched            = "$lang->executionCommon mit '%s' konnte nicht gefunden werden.";
$lang->execution->copyTitle            = "Wählen Sie ein {$lang->executionCommon} zum Kopieren.";
$lang->execution->copyNoExecution      = 'There are no ' . $lang->executionCommon . 'available to copy.';
$lang->execution->copyFromExecution    = "Kopie von {$lang->executionCommon} <strong>%s</strong>";
$lang->execution->cancelCopy           = 'Kopieren abbrechen';
$lang->execution->byPeriod             = 'Nach Zeit';
$lang->execution->byUser               = 'Nach Benutzer';
$lang->execution->noExecution          = 'Keine Projekte. ';
$lang->execution->noExecutions         = "No {$lang->execution->common}.";
$lang->execution->noPrintData          = "No data can be printed.";
$lang->execution->noMembers            = 'Keine Mitglieder. ';
$lang->execution->workloadTotal        = "The cumulative workload ratio should not exceed 100, and the total workload under the current product is: %s";
// $lang->execution->linkProjectStoryTip  = "(Link {$lang->SRCommon} comes from {$lang->SRCommon} linked under the execution)";
$lang->execution->linkAllStoryTip      = "({$lang->SRCommon} has never been linked under the project, and can be directly linked with {$lang->SRCommon} of the product linked with the sprint/stage)";
if($config->systemMode == 'classic') $lang->execution->copyTeamTitle = "Wählen Sie ein {$lang->executionCommon} Team zum Kopieren.";
if($config->systemMode == 'new')     $lang->execution->copyTeamTitle = "Wählen Sie ein {$lang->executionCommon} Team zum Kopieren.";

/* Interactive prompts. */
$lang->execution->confirmDelete               = "Möchten Sie {$lang->executionCommon}[%s] löschen?";
$lang->execution->confirmUnlinkMember         = "Möchten Sie den Benutzer vom {$lang->executionCommon} entfernen?";
$lang->execution->confirmUnlinkStory          = "After {$lang->SRCommon} is removed, cased linked to {$lang->SRCommon} will be reomoved and tasks linked to {$lang->SRCommon} will be cancelled. Do you want to continue?";
$lang->execution->confirmSync                 = "After modifying the project, in order to maintain the consistency of data, the data of products, requirements, teams and whitelist associated with the implementation will be synchronized to the new project. Please know.";
$lang->execution->confirmUnlinkExecutionStory = "Do you want to unlink this Story from the project?";
$lang->execution->notAllowedUnlinkStory       = "This {$lang->SRCommon} is linked to the {$lang->executionCommon} of the project. Remove it from the {$lang->executionCommon}, then try again.";
$lang->execution->notAllowRemoveProducts      = "The story of this product is linked with the {$lang->executionCommon}. Unlink it before doing any action.";
$lang->execution->errorNoLinkedProducts       = "Kein verknüpftes {$lang->productCommon} in {$lang->executionCommon} gefunden. Sie werden auf die {$lang->productCommon} Seite geleitet.";
$lang->execution->errorSameProducts           = "{$lang->executionCommon} Kann nicht mit mehreren identischen {$lang->productCommon} verknüpft werden";
$lang->execution->errorSameBranches           = "{$lang->executionCommon} cannot be linked to the same branch twice";
$lang->execution->errorBegin                  = "The start time of {$lang->executionCommon} cannot be less than the start time of the project %s.";
$lang->execution->errorEnd                    = "The end time of {$lang->executionCommon} cannot be greater than the end time %s of the project.";
$lang->execution->errorLetterProject          = "The start time of stage cannot be less than the start time of the project %s.";
$lang->execution->errorGreaterProject         = "The end time of stage cannot be greater than the end time %s of the project.";
$lang->execution->accessDenied                = "Zugriff zu {$lang->executionCommon} verweigert!";
$lang->execution->tips                        = 'Hinweis';
$lang->execution->afterInfo                   = "{$lang->executionCommon} wurde erstellt. Als nächstes können Sie ";
$lang->execution->setTeam                     = 'Team setzen';
$lang->execution->linkStory                   = 'Link Stories';
$lang->execution->createTask                  = 'Aufgaben erstellen';
$lang->execution->goback                      = "Zurückkehren";
$lang->execution->gobackExecution             = "Go Back {$lang->executionCommon} List";
$lang->execution->noweekend                   = 'Ohne Wochenende';
$lang->execution->nodelay                     = 'Exclude Delay Date';
$lang->execution->withweekend                 = 'Mit Wochenende';
$lang->execution->withdelay                   = 'Include Delay Date';
$lang->execution->interval                    = 'Intervale ';
$lang->execution->fixFirstWithLeft            = 'Modify the left';
$lang->execution->unfinishedExecution         = "This {$lang->executionCommon} has ";
$lang->execution->unfinishedTask              = "[%s] unfinished tasks. ";
$lang->execution->unresolvedBug               = "[%s] unresolved bugs. ";
$lang->execution->projectNotEmpty             = 'Project cannot be empty.';
$lang->execution->confirmStoryToTask          = $lang->SRCommon . '%s are converted to tasks in the current. Do you want to convert them anyways?';
$lang->execution->ge                          = "『%s』should be >= actual begin『%s』.";
$lang->execution->storyDragError              = "The {$lang->SRCommon} is still a draft or has been changed, please drag it after the review";
$lang->execution->countTip                    = ' (%s member)';
$lang->execution->pleaseInput                 = "Enter";

/* Statistics. */
$lang->execution->charts = new stdclass();
$lang->execution->charts->burn = new stdclass();
$lang->execution->charts->burn->graph = new stdclass();
$lang->execution->charts->burn->graph->caption      = "Burndown";
$lang->execution->charts->burn->graph->xAxisName    = "Datum";
$lang->execution->charts->burn->graph->yAxisName    = "Stunde";
$lang->execution->charts->burn->graph->baseFontSize = 12;
$lang->execution->charts->burn->graph->formatNumber = 0;
$lang->execution->charts->burn->graph->animation    = 0;
$lang->execution->charts->burn->graph->rotateNames  = 1;
$lang->execution->charts->burn->graph->showValues   = 0;
$lang->execution->charts->burn->graph->reference    = 'Referenz';
$lang->execution->charts->burn->graph->actuality    = 'Aktualität';
$lang->execution->charts->burn->graph->delay        = 'Delay';

$lang->execution->placeholder = new stdclass();
$lang->execution->placeholder->code      = 'Abkurzung des Projektnamens';
$lang->execution->placeholder->totalLeft = 'Schätzungen zu Beginn des Projekts.';

$lang->execution->selectGroup = new stdclass();
$lang->execution->selectGroup->done = '(Erledigt)';

$lang->execution->orderList['order_asc']  = "Aufsteigend";
$lang->execution->orderList['order_desc'] = "Absteigend";
$lang->execution->orderList['pri_asc']    = "Priorität Auf.";
$lang->execution->orderList['pri_desc']   = "Priorität Ab.";
$lang->execution->orderList['stage_asc']  = "Phase Auf.";
$lang->execution->orderList['stage_desc'] = "Phase Ab.";

$lang->execution->kanban        = "Kanban";
$lang->execution->kanbanSetting = "Kanban Einstellung";
$lang->execution->resetKanban   = "Einstellungen zurücksetzen";
$lang->execution->printKanban   = "Kanban drucken";
$lang->execution->fullScreen    = "Full Screen";
$lang->execution->bugList       = "Bugs";

$lang->execution->kanbanHideCols   = 'Geschlossene und abgebrochene Spalten in Kanban verstecken';
$lang->execution->kanbanShowOption = 'Aufklappen';
$lang->execution->kanbanColsColor  = 'Spaltenfarben';
$lang->execution->kanbanCardsUnit  = 'X';

$lang->execution->kanbanViewList['all']   = 'All';
$lang->execution->kanbanViewList['story'] = "{$lang->SRCommon}";
$lang->execution->kanbanViewList['bug']   = 'Bug';
$lang->execution->kanbanViewList['task']  = 'Task';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = 'Möchten Sie die Einstellungen des Kanbans zurücksetzen?';
$lang->kanbanSetting->optionList['0'] = 'Verstecken';
$lang->kanbanSetting->optionList['1'] = 'Anzeigen';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Kanban drucken';
$lang->printKanban->content = 'Inhanlt';
$lang->printKanban->print   = 'Drucken';

$lang->printKanban->taskStatus = 'Status';

$lang->printKanban->typeList['all']       = 'Alle';
$lang->printKanban->typeList['increment'] = 'Erhöhen';

$lang->execution->typeList['']       = '';
$lang->execution->typeList['stage']  = 'Stage';
$lang->execution->typeList['sprint'] = $lang->executionCommon;
$lang->execution->typeList['kanban'] = 'Kanban';

$lang->execution->featureBar['task']['all']          = $lang->execution->allTasks;
$lang->execution->featureBar['task']['unclosed']     = $lang->execution->unclosed;
$lang->execution->featureBar['task']['assignedtome'] = $lang->execution->assignedToMe;
$lang->execution->featureBar['task']['myinvolved']   = $lang->execution->myInvolved;
$lang->execution->featureBar['task']['assignedbyme'] = $lang->execution->assignedByMe;
$lang->execution->featureBar['task']['needconfirm']  = 'Story geändert';
$lang->execution->featureBar['task']['status']       = $lang->execution->statusSelects[''];

$lang->execution->featureBar['all']['all']       = $lang->execution->all;
$lang->execution->featureBar['all']['undone']    = $lang->execution->undone;
$lang->execution->featureBar['all']['wait']      = $lang->execution->statusList['wait'];
$lang->execution->featureBar['all']['doing']     = $lang->execution->statusList['doing'];
$lang->execution->featureBar['all']['suspended'] = $lang->execution->statusList['suspended'];
$lang->execution->featureBar['all']['closed']    = $lang->execution->statusList['closed'];

$lang->execution->myExecutions = 'Ich bin beteiligt.';
$lang->execution->doingProject = 'Laufende Projekte';

$lang->execution->kanbanColType['wait']      = $lang->execution->statusList['wait']     . ' ' . $lang->execution->common;
$lang->execution->kanbanColType['doing']     = $lang->execution->statusList['doing']    . ' ' . $lang->execution->common;
$lang->execution->kanbanColType['suspended'] = $lang->execution->statusList['suspended']. ' ' . $lang->execution->common;
$lang->execution->kanbanColType['closed']    = $lang->execution->statusList['closed']   . ' ' . $lang->execution->common;

$lang->execution->treeLevel = array();
$lang->execution->treeLevel['all']   = 'Alle aufklappen';
$lang->execution->treeLevel['root']  = 'Alle zuklappen';
$lang->execution->treeLevel['task']  = 'Aufgabe anzeigen';
$lang->execution->treeLevel['story'] = 'Story anzeigen';

$lang->execution->action = new stdclass();
$lang->execution->action->opened  = '$date, created by <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->managed = '$date, managed by <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->edited  = '$date, edited by <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->extra   = 'Linked products is %s.';

$lang->execution->statusColorList = array();
$lang->execution->statusColorList['wait']      = '#0991FF';
$lang->execution->statusColorList['doing']     = '#0BD986';
$lang->execution->statusColorList['suspended'] = '#fdc137';
$lang->execution->statusColorList['closed']    = '#838A9D';

if(!isset($lang->execution->gantt)) $lang->execution->gantt = new stdclass();
$lang->execution->gantt->color[0] = 'bbb';
$lang->execution->gantt->color[1] = 'ff5d5d';
$lang->execution->gantt->color[2] = 'ff9800';
$lang->execution->gantt->color[3] = '16a8f8';
$lang->execution->gantt->color[4] = '00da88';

$lang->execution->gantt->exportImg  = 'Export as Image';
$lang->execution->gantt->exportPDF  = 'Export as PDF';
$lang->execution->gantt->exporting  = 'Exporting...';
$lang->execution->gantt->exportFail = 'Failed to export.';

$lang->execution->boardColorList = array('#32C5FF', '#006AF1', '#9D28B2', '#FF8F26', '#7FBB00', '#424BAC', '#66c5f8', '#EC2761');
