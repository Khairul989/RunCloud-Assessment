<?php
namespace App\includes;
class BasicPlan implements Plan {
        public function subscribe($obj)
        {
            print "Action: Subcsribing to Plan Basic Plan";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            print "\n";
            print "Subcribed to plan Basic Plan\n\n";
        }
    }
?>