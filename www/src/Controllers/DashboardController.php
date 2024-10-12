<?php 
namespace Opt\RedmineReports\Controllers;

use \Opt\RedmineReports\Models\Sprint;

class DashboardController {
    
    public static function index($request) {
        $sprints = Sprint::SPRINTS;
        $sprint = Sprint::id($request['sprint']);
        $sprint->loadIssues();

        return ['sprintsOptions' => $sprints, 'sprint' => $sprint];
    }
}

?>