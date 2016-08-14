<?php
/**
 * Created by PhpStorm.
 * User: aymer
 * Date: 05/08/2016
 * Time: 15:32
 */

namespace App\Controller;

use App\Controller;
//use Cake\Cache\Cache;
//use Cake\Event\Event;

class HomeController extends AppController
{
    public function index()
    {
        $alljson = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));
        $this->set('datas', $alljson);
    }

    public function warjson()
    {
        $time = $this->request->data['time'];
        $time = intval($time);

        //TROP DANGEREUX!!!
        //$allimgjson = json_decode(file_get_contents('http://content.warframe.com/MobileExport/Manifest/ExportManifest.json'));

        //On récupère toutes les informations du flux de warframe
        $alljson = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));
        $nodesjson = json_decode(file_get_contents('./json/solNodes.json'));
        $typesjson = json_decode(file_get_contents('./json/missionTypes.json'));
        $factionjson = json_decode(file_get_contents('./json/factionsData.json'));
        $rewardjson = json_decode(file_get_contents('./json/rewardAlerts.json'));


        //Alerts
        foreach ($alljson->{'Alerts'} as $value) {
            $value->{'Activation'}->{'sec'} = $value->{'Activation'}->{'sec'} + $time;
            $value->{'Activation'}->{'usec'} = date("Y-m-d H:i:s", $value->{'Activation'}->{'sec'});
            $value->{'Expiry'}->{'sec'} = $value->{'Expiry'}->{'sec'} + $time;
            $value->{'Expiry'}->{'usec'} = date("Y-m-d H:i:s", $value->{'Expiry'}->{'sec'});

            //Change le nom de la mission
            foreach ($nodesjson as $key => $node) {
                if ($value->{'MissionInfo'}->{'location'} == $key) {
                    $value->{'MissionInfo'}->{'location'} = $node->{'value'};
                }
            }

            //Change le type de la mission
            foreach ($typesjson as $key => $type) {
                if ($value->{'MissionInfo'}->{'missionType'} == $key) {
                    $value->{'MissionInfo'}->{'missionType'} = $type->{'value'};
                }
            }

            //Change la faction de la mission
            foreach ($factionjson as $key => $faction) {
                if ($value->{'MissionInfo'}->{'faction'} == $key) {
                    $value->{'MissionInfo'}->{'faction'} = $faction->{'value'};
                }
            }

            //Change le nom des rewards
            if (isset($value->{'MissionInfo'}->{'missionReward'}->{'countedItems'})){
                foreach ($value->{'MissionInfo'}->{'missionReward'}->{'countedItems'} as $value2) {
                    foreach ($rewardjson as $key2 => $reward) {
                        if ($value2->{'ItemType'} == $key2) {
                            $value2->{'ItemType'} = $reward->{'value'};
                        }
                    }
                }
            }

            if (isset($value->{'MissionInfo'}->{'missionReward'}->{'items'})){
                foreach ($value->{'MissionInfo'}->{'missionReward'}->{'items'} as $value3) {
                    foreach ($rewardjson as $key3 => $reward) {
                        if ($value3 == $key3) {
                            $value3 = $reward->{'value'};
                        }
                    }
                }
            }
        }

        $this->set('datas', $alljson);
        $this->set('timenow', time() + $time);

        //Mise en cache des données
        //Cache::write('data', $json);

        //Récupération des données en cache
        //$data = Cache::read('data');
    }
}