<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class HighLightPriority
    {
        function highlght($bean, $event, $arguments)
        {
            if($bean->priority == 'P1'){
				$bean->priority = '<div class="btn-high" > High </div>';
				
			}
			if($bean->priority == 'P2'){
				$bean->priority = '<div class="btn-med" > Medium </div>';
			}
			if($bean->priority == 'P3'){
				$bean->priority = '<div class="btn-low"> Low </div>';
			}
        }
    }

?>

