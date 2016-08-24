<?php

namespace App\Controller;

use App\Controller;
use Cake\Cache\Cache;
//use Cake\Event\Event;

class AlertsController extends AppController
{
    public function index() {

    }

    public function alerts() {
        $time = $this->request->data['time'];
        $time = intval($time);

            if (Cache::read('Alerts', 'warjson') === false) {

                //TROP DANGEREUX!!!
                //$allimgjson = json_decode(file_get_contents('http://content.warframe.com/MobileExport/Manifest/ExportManifest.json'));

                //On récupère toutes les informations du flux de warframe
                $alljson = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));
                $nodesjson = json_decode(file_get_contents('./json/solNodes.json'));
                $typesjson = json_decode(file_get_contents('./json/missionTypes.json'));
                $factionjson = json_decode(file_get_contents('./json/factionsData.json'));
                $countedItems = json_decode(file_get_contents('./json/countedItemsAlerts.json'));
                $noCountedItem = json_decode(file_get_contents('./json/noCountedItemAlerts.json'));
                $sortiesReward = json_decode(file_get_contents('./json/sortiesReward.json'));
                $sortiesName = json_decode(file_get_contents('./json/sortiesName.json'));
                $sortiesBoss = json_decode(file_get_contents('./json/sortiesBoss.json'));
                $missionIndex = json_decode(file_get_contents('./json/missionIndex.json'));
                $modifierIndex = json_decode(file_get_contents('./json/modifierIndex.json'));

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

                    //Change le nom des rewards numérotés
                    if (isset($value->{'MissionInfo'}->{'missionReward'}->{'countedItems'})) {
                        foreach ($value->{'MissionInfo'}->{'missionReward'}->{'countedItems'} as $value2) {
                            foreach ($countedItems as $key2 => $reward) {
                                if ($value2->{'ItemType'} == $key2) {
                                    $value2->{'ItemType'} = $reward->{'value'};
                                }
                            }
                        }
                    }

                    //Change le nom des rewards non numérotés
                    if (isset($value->{'MissionInfo'}->{'missionReward'}->{'items'})) {
                        foreach ($value->{'MissionInfo'}->{'missionReward'}->{'items'} as $key4 => $value3) {
                            foreach ($noCountedItem as $key3 => $reward2) {
                                if ($value->{'MissionInfo'}->{'missionReward'}->{'items'}[$key4] == $key3) {
                                    $value->{'MissionInfo'}->{'missionReward'}->{'items'}[$key4] = $reward2->{'value'};
                                }
                            }
                        }
                    }
                }
                //Mise en cache des données Alertes
                Cache::write('Alerts', $alljson->{'Alerts'}, 'warjson');

                //Sorties
                foreach ($alljson->{'Sorties'} as $value) {
                    $value->{'Activation'}->{'sec'} = $value->{'Activation'}->{'sec'} + $time;
                    $value->{'Activation'}->{'usec'} = date("Y-m-d H:i:s", $value->{'Activation'}->{'sec'});
                    $value->{'Expiry'}->{'sec'} = $value->{'Expiry'}->{'sec'} + $time;
                    $value->{'Expiry'}->{'usec'} = date("Y-m-d H:i:s", $value->{'Expiry'}->{'sec'});

                    //Récupération du boss
                    foreach ($sortiesBoss as $key => $name) {
                        if($value->{'Variants'}['0']->{'bossIndex'} == $key){
                            $value->{'Boss'} = $name->{'value'};
                        }
                    }

                    //Récupération des rewards
                    foreach ($sortiesReward as $key => $list) {
                        if($value->{'Reward'} == $key){
                            $value->{'RewardList'} = $list;
                        }
                    }

                    //Change le nom de la saison
                    foreach ($sortiesName as $key => $name) {
                        if($value->{'Reward'} == $key){
                            $value->{'Reward'} = $name->{'value'};
                        }
                    }

                    foreach ($value->{'Variants'} as $key => $variant) {

                        //Change le nom de la mission
                        foreach ($nodesjson as $key2 => $node) {
                            if ($variant->{'node'} == $key2) {
                                $variant->{'node'} = $node->{'value'};
                            }
                        }

                        //Change le type de la mission
                        foreach ($missionIndex as $key2 => $type) {
                            if ($variant->{'missionIndex'} == $key2) {
                                $variant->{'missionIndex'} = $type->{'value'};
                            }
                        }

                        //Change le modifier de la mission
                        foreach ($modifierIndex as $key2 => $mod) {
                            if ($variant->{'modifierIndex'} == $key2) {
                                $variant->{'modifierIndex'} = $mod->{'value'};
                            }
                        }
                    }
                }
                //Mise en cache des données Alertes
                Cache::write('Sorties', $alljson->{'Sorties'}, 'warjson');
            }

        //Récupération des données en cache
        $alerts = Cache::read('Alerts', 'warjson');
        $sorties = Cache::read('Sorties', 'warjson');

        $this->set('Alerts', $alerts);
        $this->set('Sorties', $sorties);
        $this->set('timenow', time() + $time);
    }
}