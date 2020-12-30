<?php
    namespace App\includes;
    class ProPlan implements Plan {
        public function subscribe($obj)
        {
            print "Action: Subcsribing to Plan Pro Plan";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            print "\n";
            print "Subcribed to plan Pro Plan\n\n";
        }
    }
?>