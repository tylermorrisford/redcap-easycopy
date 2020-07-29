<?php

namespace UtahCCTS\EasyCopy;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

use REDCap;

class EasyCopy extends AbstractExternalModule 
{
    public function copy() {
        // Enter the pid for the source project
        $sourceProject = 23;
        // Enter the pid for the destination project
        $destinationProject = 26;
        
        echo '<p>The REDCap current project is named "' . REDCap::getProjectTitle() . '".</p><br>';
        echo '<p>Copying project id ' . $sourceProject . ' to project id ' . $destinationProject . '...';
        
        // use REDCap class method to get source data
        $records = REDCap::getData($sourceProject, 'array');
        
        // use REDCap class method to save source data into destination
        $saveResult = REDCap::saveData($destinationProject, 'array', $records);

        echo '<p>Copy result:</p>';
        echo print_r($saveResult);
    }
}