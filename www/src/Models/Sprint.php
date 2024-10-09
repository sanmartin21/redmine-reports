<?php 
namespace Opt\RedmineReports\Models;

class Sprint {
    public  $start;
    public  $end;

    public function __construct($attributes = []) {
        $this->start = $attributes['start'];
        $this->end = $attributes['end'];
    }

    public function getDuration() {
        $start = new \DateTime($this->start);
        $end = new \DateTime($this->end);
        return $start->diff($end)->format('%a days');
    }
}

?>