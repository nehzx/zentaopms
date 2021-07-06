<?php
/**
 * The fr file of block module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.zentao.net
 */
global $config;
$lang->block = new stdclass();
$lang->block->common     = 'Bloc';
$lang->block->name       = 'Nom';
$lang->block->style      = 'Style';
$lang->block->grid       = 'Position';
$lang->block->color      = 'Couleur';
$lang->block->reset      = 'Réinit';
$lang->block->story      = 'Story';
$lang->block->investment = 'Investment';
$lang->block->estimate   = 'Estimate';
$lang->block->last       = 'Last';

$lang->block->account = 'Compte';
$lang->block->module  = 'Module';
$lang->block->title   = 'Titre';
$lang->block->source  = 'Source Module';
$lang->block->block   = 'Source Bloc';
$lang->block->order   = 'Ordre';
$lang->block->height  = 'Hauteur';
$lang->block->role    = 'Rôle';

$lang->block->lblModule    = 'Module';
$lang->block->lblBlock     = 'Bloc';
$lang->block->lblNum       = 'Numéro';
$lang->block->lblHtml      = 'HTML';
$lang->block->dynamic      = 'Historique';
$lang->block->assignToMe   = 'Todo';
$lang->block->done         = 'Done';
$lang->block->lblFlowchart = 'Organigramme';
$lang->block->welcome      = 'Bienvenue';
$lang->block->lblTesttask  = 'Détail Recette';
$lang->block->contribute   = 'Personal Contribution';

$lang->block->leftToday           = 'Reste à faire';
$lang->block->myTask              = 'Mes Tâches';
$lang->block->myStory             = 'Stories';
$lang->block->myBug               = 'Bugs';
$lang->block->myExecution         = 'Unclosed ' . $lang->executionCommon . 's';
$lang->block->myProduct           = 'Unclosed ' . $lang->productCommon . 's';
$lang->block->delayed             = 'Ajourné';
$lang->block->noData              = 'Pas de données pour ce type de rapport.';
$lang->block->emptyTip            = 'No data.';
$lang->block->createdTodos        = 'Todos Created';
$lang->block->createdRequirements = 'UR/Epics Created';
$lang->block->createdStories      = 'SR/Stories Created';
$lang->block->finishedTasks       = 'Tasks Finished';
$lang->block->createdBugs         = 'Bugs Created';
$lang->block->resolvedBugs        = 'Bugs Resolved';
$lang->block->createdCases        = 'Cases Created';
$lang->block->createdRisks        = 'Risks Created';
$lang->block->resolvedRisks       = 'Risks Resolved';
$lang->block->createdIssues       = 'Issues Created';
$lang->block->resolvedIssues      = 'Issues Resolved';
$lang->block->createdDocs         = 'Docs Created';
$lang->block->allExecutions       = 'All ' . $lang->executionCommon;
$lang->block->doingExecution      = 'Doning ' . $lang->executionCommon;
$lang->block->finishExecution     = 'Finish ' . $lang->executionCommon;
$lang->block->estimatedHours      = 'Estimated Hours';
$lang->block->consumedHours       = 'Consumed Hours';
$lang->block->time                = 'No';
$lang->block->week                = 'Week';
$lang->block->month               = 'Month';
$lang->block->selectProduct       = 'Product selection';
$lang->block->of                  = ' di ';
$lang->block->remain              = 'Left';

$lang->block->params = new stdclass();
$lang->block->params->name  = 'Nom';
$lang->block->params->value = 'Valeur';

$lang->block->createBlock        = 'Ajouter Bloc';
$lang->block->editBlock          = 'Editer Bloc';
$lang->block->ordersSaved        = 'L´ordre a été sauvegardé.';
$lang->block->confirmRemoveBlock = 'Voulez-vous vraiment supprimer ce bloc ?';
$lang->block->noticeNewBlock     = 'Une nouvelle disposition est disponible. Voulez-vous la consulter ?';
$lang->block->confirmReset       = 'Voulez-vous vraiment réinitialiser la disposition ?';
$lang->block->closeForever       = 'Fermeture Permanente';
$lang->block->confirmClose       = 'Voulez-vous vraiment fermer de façon permanente ce bloc ? Ensuite, plus personne ne pourra l´utiliser. Il pourra être réactivé par l´admin.';
$lang->block->remove             = 'Supprimer';
$lang->block->refresh            = 'Rafraichir';
$lang->block->nbsp               = ' ';
$lang->block->hidden             = 'Masquer';
$lang->block->dynamicInfo        = "<span class='timeline-tag'>%s</span> <span class='timeline-text'>%s <em>%s</em> %s <a href='%s' title='%s'>%s</a></span>";

$lang->block->productName  = $lang->productCommon . ' Name';
$lang->block->totalStory   = 'The Total ' . $lang->SRCommon;
$lang->block->totalBug     = 'The Total Bug';
$lang->block->totalRelease = 'Release The Number';

$lang->block->totalInvestment = 'Total investment';
$lang->block->totalPeople     = 'Total number';
$lang->block->spent           = 'Has Been Spent';
$lang->block->budget          = 'Budget';
$lang->block->left            = 'Residuals';

$lang->block->default['waterfall']['project']['1']['title']  = 'Project Weekly';
$lang->block->default['waterfall']['project']['1']['block']  = 'waterfallreport';
$lang->block->default['waterfall']['project']['1']['source'] = 'project';
$lang->block->default['waterfall']['project']['1']['grid']   = 8;

$lang->block->default['waterfall']['project']['2']['title']  = 'Estimate';
$lang->block->default['waterfall']['project']['2']['block']  = 'waterfallestimate';
$lang->block->default['waterfall']['project']['2']['source'] = 'project';
$lang->block->default['waterfall']['project']['2']['grid']   = 4;

$lang->block->default['waterfall']['project']['3']['title']  = 'Plan Gantt Chart';
$lang->block->default['waterfall']['project']['3']['block']  = 'waterfallgantt';
$lang->block->default['waterfall']['project']['3']['source'] = 'project';
$lang->block->default['waterfall']['project']['3']['grid']   = 8;

$lang->block->default['waterfall']['project']['4']['title']  = 'Progress Chart';
$lang->block->default['waterfall']['project']['4']['block']  = 'waterfallprogress';
$lang->block->default['waterfall']['project']['4']['grid']   = 4;

$lang->block->default['waterfall']['project']['5']['title']  = 'project Issue';
$lang->block->default['waterfall']['project']['5']['block']  = 'waterfallissue';
$lang->block->default['waterfall']['project']['5']['source'] = 'project';
$lang->block->default['waterfall']['project']['5']['grid']   = 8;

$lang->block->default['waterfall']['project']['5']['params']['type']    = 'all';
$lang->block->default['waterfall']['project']['5']['params']['count']   = '15';
$lang->block->default['waterfall']['project']['5']['params']['orderBy'] = 'id_desc';

$lang->block->default['waterfall']['project']['6']['title']  = 'Dynamic';
$lang->block->default['waterfall']['project']['6']['block']  = 'dynamic';
$lang->block->default['waterfall']['project']['6']['grid']   = 4;
$lang->block->default['waterfall']['project']['6']['source'] = '';

$lang->block->default['waterfall']['project']['7']['title']  = 'Project Risk';
$lang->block->default['waterfall']['project']['7']['block']  = 'waterfallrisk';
$lang->block->default['waterfall']['project']['7']['source'] = 'project';
$lang->block->default['waterfall']['project']['7']['grid']   = 8;

$lang->block->default['waterfall']['project']['7']['params']['type']    = 'all';
$lang->block->default['waterfall']['project']['7']['params']['count']   = '15';
$lang->block->default['waterfall']['project']['7']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['1']['title'] =  'Project Overall';
$lang->block->default['scrum']['project']['1']['block'] = 'scrumoverview';
$lang->block->default['scrum']['project']['1']['grid']  = 8;

$lang->block->default['scrum']['project']['2']['title'] = $lang->executionCommon . ' List';
$lang->block->default['scrum']['project']['2']['block'] = 'scrumlist';
$lang->block->default['scrum']['project']['2']['grid']  = 8;

$lang->block->default['scrum']['project']['2']['params']['type']    = 'undone';
$lang->block->default['scrum']['project']['2']['params']['count']   = '20';
$lang->block->default['scrum']['project']['2']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['3']['title'] = 'Test Version';
$lang->block->default['scrum']['project']['3']['block'] = 'scrumtest';
$lang->block->default['scrum']['project']['3']['grid']  = 8;

$lang->block->default['scrum']['project']['3']['params']['type']    = 'wait';
$lang->block->default['scrum']['project']['3']['params']['count']   = '15';
$lang->block->default['scrum']['project']['3']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['4']['title'] = $lang->executionCommon . ' Overview';
$lang->block->default['scrum']['project']['4']['block'] = 'sprint';
$lang->block->default['scrum']['project']['4']['grid']  = 4;

$lang->block->default['scrum']['project']['5']['title'] = 'Dynamic';
$lang->block->default['scrum']['project']['5']['block'] = 'projectdynamic';
$lang->block->default['scrum']['project']['5']['grid']  = 4;

$lang->block->default['product']['1']['title'] = ' Rapport de ' . $lang->productCommon;
$lang->block->default['product']['1']['block'] = 'statistic';
$lang->block->default['product']['1']['grid']  = 8;

$lang->block->default['product']['1']['params']['type']  = 'all';
$lang->block->default['product']['1']['params']['count'] = '20';

$lang->block->default['product']['2']['title'] = "Vue d'ensemble du " . $lang->productCommon;
$lang->block->default['product']['2']['block'] = 'overview';
$lang->block->default['product']['2']['grid']  = 4;

$lang->block->default['product']['3']['title'] = $lang->productCommon . 's Actifs';
$lang->block->default['product']['3']['block'] = 'list';
$lang->block->default['product']['3']['grid']  = 8;

$lang->block->default['product']['3']['params']['count'] = 15;
$lang->block->default['product']['3']['params']['type']  = 'noclosed';

$lang->block->default['product']['4']['title'] = 'Mes Stories';
$lang->block->default['product']['4']['block'] = 'story';
$lang->block->default['product']['4']['grid']  = 4;

$lang->block->default['product']['4']['params']['count']   = 15;
$lang->block->default['product']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['product']['4']['params']['type']    = 'assignedTo';

$lang->block->default['execution']['1']['title'] = 'Rapport de execution';
$lang->block->default['execution']['1']['block'] = 'statistic';
$lang->block->default['execution']['1']['grid']  = 8;

$lang->block->default['execution']['1']['params']['type']  = 'all';
$lang->block->default['execution']['1']['params']['count'] = '20';

$lang->block->default['execution']['2']['title'] = "Vue d'ensemble du execution";
$lang->block->default['execution']['2']['block'] = 'overview';
$lang->block->default['execution']['2']['grid']  = 4;

$lang->block->default['execution']['3']['title'] = 'Executions Actifs';
$lang->block->default['execution']['3']['block'] = 'list';
$lang->block->default['execution']['3']['grid']  = 8;

$lang->block->default['execution']['3']['params']['count']   = 15;
$lang->block->default['execution']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['execution']['3']['params']['type']    = 'undone';

$lang->block->default['execution']['4']['title'] = 'Mes Tâches';
$lang->block->default['execution']['4']['block'] = 'task';
$lang->block->default['execution']['4']['grid']  = 4;

$lang->block->default['execution']['4']['params']['count']   = 15;
$lang->block->default['execution']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['execution']['4']['params']['type']    = 'assignedTo';

$lang->block->default['execution']['5']['title'] = 'Build List';
$lang->block->default['execution']['5']['block'] = 'build';
$lang->block->default['execution']['5']['grid']  = 8;

$lang->block->default['execution']['5']['params']['count']   = 15;
$lang->block->default['execution']['5']['params']['orderBy'] = 'id_desc';

$lang->block->default['qa']['1']['title'] = 'Rapport de Tests';
$lang->block->default['qa']['1']['block'] = 'statistic';
$lang->block->default['qa']['1']['grid']  = 8;

$lang->block->default['qa']['1']['params']['type']  = 'noclosed';
$lang->block->default['qa']['1']['params']['count'] = '20';

//$lang->block->default['qa']['2']['title'] = 'Testcase Overview';
//$lang->block->default['qa']['2']['block'] = 'overview';
//$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['title'] = 'Mes Bugs';
$lang->block->default['qa']['2']['block'] = 'bug';
$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['params']['count']   = 15;
$lang->block->default['qa']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['2']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['3']['title'] = 'Mes CasTests';
$lang->block->default['qa']['3']['block'] = 'case';
$lang->block->default['qa']['3']['grid']  = 4;

$lang->block->default['qa']['3']['params']['count']   = 15;
$lang->block->default['qa']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['3']['params']['type']    = 'assigntome';

$lang->block->default['qa']['4']['title'] = 'Builds en attente';
$lang->block->default['qa']['4']['block'] = 'testtask';
$lang->block->default['qa']['4']['grid']  = 8;

$lang->block->default['qa']['4']['params']['count']   = 15;
$lang->block->default['qa']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['4']['params']['type']    = 'wait';

$lang->block->default['full']['my']['1']['title']  = 'Bienvenue';
$lang->block->default['full']['my']['1']['block']  = 'welcome';
$lang->block->default['full']['my']['1']['grid']   = 8;
$lang->block->default['full']['my']['1']['source'] = '';

$lang->block->default['full']['my']['2']['title']  = 'Historique';
$lang->block->default['full']['my']['2']['block']  = 'dynamic';
$lang->block->default['full']['my']['2']['grid']   = 4;
$lang->block->default['full']['my']['2']['source'] = '';

$lang->block->default['full']['my']['3']['title']           = 'My Todos';
$lang->block->default['full']['my']['3']['block']           = 'list';
$lang->block->default['full']['my']['3']['grid']            = 4;
$lang->block->default['full']['my']['3']['source']          = 'todo';
$lang->block->default['full']['my']['3']['params']['count'] = '20';

if($config->systemMode == 'new')
{
    $lang->block->default['full']['my']['4']['title']           = 'Project Statistic';
    $lang->block->default['full']['my']['4']['block']           = 'statistic';
    $lang->block->default['full']['my']['4']['source']          = 'project';
    $lang->block->default['full']['my']['4']['grid']            = 8;
    $lang->block->default['full']['my']['4']['params']['count'] = '20';
}

$lang->block->default['full']['my']['5']['title']  = 'Personal Contribution';
$lang->block->default['full']['my']['5']['block']  = 'contribute';
$lang->block->default['full']['my']['5']['source'] = '';
$lang->block->default['full']['my']['5']['grid']   = 4;

$lang->block->default['full']['my']['6']['title']  = 'Recent Projecets';
$lang->block->default['full']['my']['6']['block']  = 'recentproject';
$lang->block->default['full']['my']['6']['source'] = 'project';
$lang->block->default['full']['my']['6']['grid']   = 8;

$lang->block->default['full']['my']['7']['title']  = 'Todo';
$lang->block->default['full']['my']['7']['block']  = 'assigntome';
$lang->block->default['full']['my']['7']['source'] = '';
$lang->block->default['full']['my']['7']['grid']   = 8;

$lang->block->default['full']['my']['7']['params']['todoNum']    = '20';
$lang->block->default['full']['my']['7']['params']['taskNum']    = '20';
$lang->block->default['full']['my']['7']['params']['bugNum']     = '20';
$lang->block->default['full']['my']['7']['params']['riskNum']    = '20';
$lang->block->default['full']['my']['7']['params']['issueNum']   = '20';
$lang->block->default['full']['my']['7']['params']['storyNum']   = '20';
$lang->block->default['full']['my']['7']['params']['meetingNum'] = '20';

if($config->systemMode == 'new')
{
    $lang->block->default['full']['my']['8']['title']  = 'Human Input';
    $lang->block->default['full']['my']['8']['block']  = 'projectteam';
    $lang->block->default['full']['my']['8']['source'] = 'project';
    $lang->block->default['full']['my']['8']['grid']   = 8;
}

$lang->block->default['full']['my']['9']['title']  = 'Project List';
$lang->block->default['full']['my']['9']['block']  = 'project';
$lang->block->default['full']['my']['9']['source'] = 'project';
$lang->block->default['full']['my']['9']['grid']   = 8;

$lang->block->default['full']['my']['9']['params']['orderBy'] = 'id_desc';
$lang->block->default['full']['my']['9']['params']['count']   = '15';

$lang->block->count   = 'Numéro';
$lang->block->type    = 'Type';
$lang->block->orderBy = 'Trié par';

$lang->block->availableBlocks            = new stdclass();
$lang->block->availableBlocks->todo      = 'Mon emploi du temps';
$lang->block->availableBlocks->task      = 'Mes Tâches';
$lang->block->availableBlocks->bug       = 'Mes Bugs';
$lang->block->availableBlocks->case      = 'Mes CasTests';
$lang->block->availableBlocks->story     = 'Mes Stories';
$lang->block->availableBlocks->product   = $lang->productCommon . 's';
$lang->block->availableBlocks->execution = $lang->executionCommon . 's';
$lang->block->availableBlocks->plan      = 'Plans';
$lang->block->availableBlocks->release   = 'Releases';
$lang->block->availableBlocks->build     = 'Builds';
$lang->block->availableBlocks->testtask  = 'Recettes';
$lang->block->availableBlocks->risk      = 'My Risks';
$lang->block->availableBlocks->issue     = 'My Issues';
$lang->block->availableBlocks->meeting   = 'My Meetings';

if($config->systemMode == 'new') $lang->block->moduleList['project'] = 'Project';
$lang->block->moduleList['product']   = $lang->productCommon;
$lang->block->moduleList['execution'] = $lang->execution->common;
$lang->block->moduleList['qa']        = 'Test';
$lang->block->moduleList['todo']      = 'Todo';

$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks = new stdclass();
$lang->block->modules['project']->availableBlocks->project       = 'Project List';
$lang->block->modules['project']->availableBlocks->recentproject = 'Recent Projects';
$lang->block->modules['project']->availableBlocks->statistic     = 'Project Statistic';
$lang->block->modules['project']->availableBlocks->projectteam   = 'Project Human Input';

$lang->block->modules['scrum']['index'] = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks->scrumoverview  = 'Project Overview';
$lang->block->modules['scrum']['index']->availableBlocks->scrumlist      = $lang->executionCommon . ' List';
$lang->block->modules['scrum']['index']->availableBlocks->sprint         = $lang->executionCommon . ' Overview';
$lang->block->modules['scrum']['index']->availableBlocks->scrumtest      = 'Test Version';
$lang->block->modules['scrum']['index']->availableBlocks->projectdynamic = 'Dynamics';

$lang->block->modules['waterfall']['index'] = new stdclass();
$lang->block->modules['waterfall']['index']->availableBlocks = new stdclass();
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallreport   = 'Project Weekly';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallestimate = 'Estimate';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallgantt    = 'Plan Gantt Chart';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallprogress = 'Progress Chart';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallissue    = 'Project Issue';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallrisk     = 'Project Risk';
$lang->block->modules['waterfall']['index']->availableBlocks->projectdynamic    = 'Dynamics';

$lang->block->modules['product'] = new stdclass();
$lang->block->modules['product']->availableBlocks = new stdclass();
$lang->block->modules['product']->availableBlocks->statistic = 'Rapport de ' . $lang->productCommon;
$lang->block->modules['product']->availableBlocks->overview  = "Vue d'ensemble du " . $lang->productCommon;
$lang->block->modules['product']->availableBlocks->list      = 'Liste ' . $lang->productCommon;
$lang->block->modules['product']->availableBlocks->story     = 'Story';
$lang->block->modules['product']->availableBlocks->plan      = 'Plan';
$lang->block->modules['product']->availableBlocks->release   = 'Release';

$lang->block->modules['execution'] = new stdclass();
$lang->block->modules['execution']->availableBlocks = new stdclass();
$lang->block->modules['execution']->availableBlocks->statistic = $lang->execution->common . ' Statistiques';
$lang->block->modules['execution']->availableBlocks->overview  = $lang->execution->common . " Vue d'ensemble";
$lang->block->modules['execution']->availableBlocks->list      = $lang->execution->common . ' Liste';
$lang->block->modules['execution']->availableBlocks->task      = 'Tâches';
$lang->block->modules['execution']->availableBlocks->build     = 'Build';

$lang->block->modules['qa'] = new stdclass();
$lang->block->modules['qa']->availableBlocks = new stdclass();
$lang->block->modules['qa']->availableBlocks->statistic = 'Rapport de Tests';
//$lang->block->modules['qa']->availableBlocks->overview  = 'Testcase Overview';
$lang->block->modules['qa']->availableBlocks->bug       = 'Bug';
$lang->block->modules['qa']->availableBlocks->case      = 'CasTests';
$lang->block->modules['qa']->availableBlocks->testtask  = 'Build';

$lang->block->modules['todo'] = new stdclass();
$lang->block->modules['todo']->availableBlocks = new stdclass();
$lang->block->modules['todo']->availableBlocks->list = 'Todo';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->product = array();
$lang->block->orderByList->product['id_asc']      = 'Tri par ID Produit ASC';
$lang->block->orderByList->product['id_desc']     = 'Tri par ID Produit DESC';
$lang->block->orderByList->product['status_asc']  = 'Tri par Statut ASC';
$lang->block->orderByList->product['status_desc'] = 'Tri par Statut DESC';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['id_asc']      = 'Tri par ID Projet ASC';
$lang->block->orderByList->project['id_desc']     = 'Tri par ID Projet DESC';
$lang->block->orderByList->project['status_asc']  = 'Tri par Statut ASC';
$lang->block->orderByList->project['status_desc'] = 'Tri par Statut DESC';

$lang->block->orderByList->execution = array();
$lang->block->orderByList->execution['id_asc']      = 'Tri par ID Execution ASC';
$lang->block->orderByList->execution['id_desc']     = 'Tri par ID Execution DESC';
$lang->block->orderByList->execution['status_asc']  = 'Tri par Statut ASC';
$lang->block->orderByList->execution['status_desc'] = 'Tri par Statut DESC';

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'Tri par ID Tâche ASC';
$lang->block->orderByList->task['id_desc']       = 'Tri par ID Tâche DESC';
$lang->block->orderByList->task['pri_asc']       = 'Tri par Priorité de tâche ASC';
$lang->block->orderByList->task['pri_desc']      = 'Tri par Priorité de tâche DESC';
$lang->block->orderByList->task['estimate_asc']  = 'Tri par durée estimée tâche ASC';
$lang->block->orderByList->task['estimate_desc'] = 'Tri par durée estimée tâche DESC';
$lang->block->orderByList->task['status_asc']    = 'Tri par Statut ASC';
$lang->block->orderByList->task['status_desc']   = 'Tri par Statut DESC';
$lang->block->orderByList->task['deadline_asc']  = 'Tri par Date Butoir Tâche ASC';
$lang->block->orderByList->task['deadline_desc'] = 'Tri par Date Butoir Tâche DESC';

$lang->block->orderByList->bug = array();
$lang->block->orderByList->bug['id_asc']        = 'Tri par ID Bug ASC';
$lang->block->orderByList->bug['id_desc']       = 'Tri par ID Bug DESC';
$lang->block->orderByList->bug['pri_asc']       = 'Tri par Priorité Bug ASC';
$lang->block->orderByList->bug['pri_desc']      = 'Tri par Priorité Bug DESC';
$lang->block->orderByList->bug['severity_asc']  = 'Tri par Sévérité Bug ASC';
$lang->block->orderByList->bug['severity_desc'] = 'Tri par Sévérité Bug DESC';

$lang->block->orderByList->case = array();
$lang->block->orderByList->case['id_asc']   = 'Tri par ID CasTest ASC';
$lang->block->orderByList->case['id_desc']  = 'Tri par ID CasTest DESC';
$lang->block->orderByList->case['pri_asc']  = 'Tri par Priorité ASC';
$lang->block->orderByList->case['pri_desc'] = 'Tri par Priorité DESC';

$lang->block->orderByList->story = array();
$lang->block->orderByList->story['id_asc']      = 'Tri par ID Story ASC';
$lang->block->orderByList->story['id_desc']     = 'Tri par ID Story DESC';
$lang->block->orderByList->story['pri_asc']     = 'Tri par Priorité Story ASC';
$lang->block->orderByList->story['pri_desc']    = 'Tri par Priorité Story DESC';
$lang->block->orderByList->story['status_asc']  = 'Tri par Statut Story ASC';
$lang->block->orderByList->story['status_desc'] = 'Tri par Statut Story DESC';
$lang->block->orderByList->story['stage_asc']   = 'Tri par Phase Story ASC';
$lang->block->orderByList->story['stage_desc']  = 'Tri par Phase Story DESC';

$lang->block->todoNum    = 'Todo';
$lang->block->taskNum    = 'Task';
$lang->block->bugNum     = 'Bug';
$lang->block->riskNum    = 'Risk';
$lang->block->issueNum   = 'Issues';
$lang->block->storyNum   = 'Stories';
$lang->block->meetingNum = 'Meetings';

$lang->block->typeList = new stdclass();

$lang->block->typeList->task['assignedTo'] = 'Tâches qui me sont assignées';
$lang->block->typeList->task['openedBy']   = "Tâches que j'ai créées";
$lang->block->typeList->task['finishedBy'] = "Tâches que j'ai terminées";
$lang->block->typeList->task['closedBy']   = "Tâches que j'ai fermées";
$lang->block->typeList->task['canceledBy'] = "Tâches que j'ai annulées";

$lang->block->typeList->bug['assignedTo'] = 'Bugs qui me sont assignés';
$lang->block->typeList->bug['openedBy']   = "Bugs que j'ai détectés";
$lang->block->typeList->bug['resolvedBy'] = "Bugs que j'ai résolus";
$lang->block->typeList->bug['closedBy']   = "Bugs que j'ai fermés";

$lang->block->typeList->case['assigntome'] = 'CasTests qui me sont assignés';
$lang->block->typeList->case['openedbyme'] = "CasTests que j'ai créés";;

$lang->block->typeList->story['assignedTo'] = 'Stories qui me sont assignées';
$lang->block->typeList->story['openedBy']   = "Stories que j'ai créées";
$lang->block->typeList->story['reviewedBy'] = "Stories que j'ai acceptées";
$lang->block->typeList->story['closedBy']   = "Stories que j'ai fermées";

$lang->block->typeList->product['noclosed'] = 'Ouverts';
$lang->block->typeList->product['closed']   = 'Fermés';
$lang->block->typeList->product['all']      = 'Tous';
$lang->block->typeList->product['involved'] = 'Impliqués';

$lang->block->typeList->project['undone']   = 'Unfinished';
$lang->block->typeList->project['doing']    = 'Ongoing';
$lang->block->typeList->project['all']      = 'All';
$lang->block->typeList->project['involved'] = 'Involved';

$lang->block->typeList->execution['undone']   = 'Unfinished';
$lang->block->typeList->execution['doing']    = 'Ongoing';
$lang->block->typeList->execution['all']      = 'All';
$lang->block->typeList->execution['involved'] = 'Involved';

$lang->block->typeList->scrum['undone']   = 'Unfinished';
$lang->block->typeList->scrum['doing']    = 'Ongoing';
$lang->block->typeList->scrum['all']      = 'All';
$lang->block->typeList->scrum['involved'] = 'Involved';

$lang->block->typeList->testtask['wait']    = 'En attente';
$lang->block->typeList->testtask['doing']   = 'En cours';
$lang->block->typeList->testtask['blocked'] = 'Bloquées';
$lang->block->typeList->testtask['done']    = 'Jouées';
$lang->block->typeList->testtask['all']     = 'Toutes';

$lang->block->modules['project']->moreLinkList = new stdclass();
$lang->block->modules['project']->moreLinkList->recentproject  = 'project|browse|';
$lang->block->modules['project']->moreLinkList->statistic      = 'project|browse|';
$lang->block->modules['project']->moreLinkList->project        = 'project|browse|';
$lang->block->modules['project']->moreLinkList->cmmireport     = 'weekly|index|';
$lang->block->modules['project']->moreLinkList->cmmiestimate   = 'workestimation|index|';
$lang->block->modules['project']->moreLinkList->cmmiissue      = 'issue|browse|';
$lang->block->modules['project']->moreLinkList->cmmirisk       = 'risk|browse|';
$lang->block->modules['project']->moreLinkList->scrumlist      = 'project|execution|';
$lang->block->modules['project']->moreLinkList->scrumtest      = 'testtask|browse|';
$lang->block->modules['project']->moreLinkList->scrumproduct   = 'product|all|';
$lang->block->modules['project']->moreLinkList->sprint         = 'project|execution|';
$lang->block->modules['project']->moreLinkList->projectdynamic = 'project|dynamic|';

$lang->block->modules['product']->moreLinkList        = new stdclass();
$lang->block->modules['product']->moreLinkList->list  = 'product|all|';
$lang->block->modules['product']->moreLinkList->story = 'my|story|type=%s';

$lang->block->modules['execution']->moreLinkList       = new stdclass();
$lang->block->modules['execution']->moreLinkList->list = 'execution|all|status=%s&executionID=';
$lang->block->modules['execution']->moreLinkList->task = 'my|task|type=%s';

$lang->block->modules['qa']->moreLinkList           = new stdclass();
$lang->block->modules['qa']->moreLinkList->bug      = 'my|bug|type=%s';
$lang->block->modules['qa']->moreLinkList->case     = 'my|testcase|type=%s';
$lang->block->modules['qa']->moreLinkList->testtask = 'testtask|browse|type=%s';

$lang->block->modules['todo']->moreLinkList       = new stdclass();
$lang->block->modules['todo']->moreLinkList->list = 'my|todo|type=all';

$lang->block->modules['common']                        = new stdclass();
$lang->block->modules['common']->moreLinkList          = new stdclass();
$lang->block->modules['common']->moreLinkList->dynamic = 'company|dynamic|';

$lang->block->welcomeList['06:00'] = 'Bonjour, %s';
$lang->block->welcomeList['11:30'] = 'Bonjour, %s';
$lang->block->welcomeList['13:30'] = 'Bonjour, %s';
$lang->block->welcomeList['19:00'] = 'Bonsoir, %s';

$lang->block->gridOptions[8] = 'Left';
$lang->block->gridOptions[4] = 'Right';

$lang->block->flowchart              = array();
$lang->block->flowchart['admin']     = array('Administrateur', 'Ajoute Compartiment', 'Ajoute Utilisateurs', 'Administre Privilèges');
$lang->block->flowchart['product']   = array($lang->productCommon . ' Owner', 'Ajoute ' . $lang->productCommon . '/Modules', 'Ajoute ' . $lang->executionCommon . 's', 'Ajoute Stories', 'Maintient Plans', 'Crée Releases');
$lang->block->flowchart['execution'] = array('Scrum Master', 'Ajoute ' . $lang->executionCommon . 's', 'Constitue Equipes', 'Associe ' . $lang->productCommon . 's', 'Rattache Stories', 'Crée/Affecte Tâches');
$lang->block->flowchart['dev']       = array('Développeurs', 'Réclament Tâches/Bugs', 'Effectuent Tâches', 'Corrigent Bugs', 'MàJ Statuts', 'Terminent Tâches/Bugs');
$lang->block->flowchart['tester']    = array('Testeurs', 'Rédigent CasTests', 'Jouent CasTests', 'Détectent Bugs', 'Vérifient Corrections', 'Ferment Bugs');
