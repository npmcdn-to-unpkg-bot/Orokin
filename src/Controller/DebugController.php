<?php

namespace App\Controller;



class DebugController extends AppController
{
    public function index()
    {
        //TROP DANGEREUX!!!
        $allimgjson = json_decode(file_get_contents('http://content.warframe.com/MobileExport/Manifest/ExportManifest.json'));
        $this->set('allimgjson', $allimgjson->{'Manifest'});
    }

    public function view()
    {

    }
}