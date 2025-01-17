<?php 
namespace Opt\RedmineReports\Models;
use Opt\RedmineReports\Models\Issue;

class Sprint {
    
    public  $start;
    public  $end;
    public  $issues;

    const SPRINTS = [
        ['desc' => 'Sprint 1 - Credenciamento', 'start' => '2024-03-22', 'end' => '2024-04-05'],
        ['desc' => 'Sprint 2 - Correções e Ajustes', 'start' => '2024-04-10', 'end' => '2024-04-18'],
        ['desc' => 'Sprint 3 - Inscrição, Submissão e Homologação', 'start' => '2024-04-22', 'end' => '2024-05-17'],
        ['desc' => 'Sprint 4 - Ajustes para Implantação', 'start' => '2024-05-20', 'end' => '2024-06-07'],
    ];

    public function __construct($attributes = []) {
        $this->start = $attributes['start'];
        $this->end = $attributes['end'];
    }

    public static function id($id) {
        return new Self(self::SPRINTS[$id]);
    }

    public function getDuration() {
        $start = new \DateTime($this->start);
        $end = new \DateTime($this->end);
        return $start->diff($end)->format('%a days');
    }

    public function loadIssues() {
        $this->issues = Issue::fromSprint($this);
    }
}

?>