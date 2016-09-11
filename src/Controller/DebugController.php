<?php

namespace App\Controller;



class DebugController extends AppController
{
    public function index()
    {
        //TROP DANGEREUX!!!
        $allimgjson = json_decode(file_get_contents('http://content.warframe.com/MobileExport/Manifest/ExportManifest.json'));

        usort($allimgjson->{'Manifest'}, function($a, $b) { //Sort the array using a user defined function
            return $a->fileTime > $b->fileTime ? -1 : 1; //Compare the scores
        });

        $this->set('allimgjson', $allimgjson->{'Manifest'});
    }

    public function view()
    {

    }
}