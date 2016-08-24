<script type="text/javascript">
    var dt = new Date();
    var time = dt.getTimezoneOffset();
    time = time*-60;
    
    function warjson(time) {
        $.post('Alerts/alerts', { time: time },function (datas) {

            //Alerts
            $(".col-Alerts").html('');
            if(datas.Alerts) {
                $.each(datas.Alerts, function (key, value) {
                    if (datas.timenow <= value.Expiry.sec) {
                        var alertwar = $('<div class="alert"/>');

                        if (value.Activation.sec <= datas.timenow) {
                            var timeExpiry = $('<span class="label label-success alert-timer expiry"/>').attr({
                                'data-end': value.Expiry.usec,
                                'data': value.Expiry.sec
                            });
                            alertwar.append(timeExpiry);
                        }
                        else {
                            var timeActivation = $('<span class="label label-default alert-timer activation">').attr({
                                'data-end': value.Activation.usec,
                                'data': value.Activation.sec
                            });
                            alertwar.append(timeActivation);
                        }

                        var ln = $('<div style="margin-bottom: 3px"/>');

                        var nom = $('<strong/>').text(value.MissionInfo.location + " ");
                        ln.append(nom);

                        if (value.MissionInfo.nightmare == true) {
                            var nightmare = $('<span class="label label-danger alert-cauchemar"/>').text('Cauchemar');
                            ln.append(nightmare);
                        }
                        if (value.MissionInfo.archwingRequired == true) {
                            var archwing = $('<span class="label label-primary alert-archwing"/>').text('Archwing');
                            ln.append(archwing);
                        }


                        alertwar.append(ln);

                        var type = $('<strong/>').text(value.MissionInfo.missionType);
                        alertwar.append(type);

                        if (value.MissionInfo.maxWaveNum) {
                            var wave;
                            if (value.MissionInfo.missionType == 'Espionage') {
                                wave = $('<spa/>').text(" | Mini. " + value.MissionInfo.maxWaveNum + " données");
                            }
                            else if (value.MissionInfo.missionType == 'Survie') {
                                wave = $('<span/>').text(" | " + value.MissionInfo.maxWaveNum + " minutes");
                            }
                            else {
                                wave = $('<span/>').text(" | " + value.MissionInfo.maxWaveNum + " vagues");
                            }
                            alertwar.append(wave);
                        }

                        var faction = $('<span/>').text(" | " + value.MissionInfo.faction);
                        alertwar.append(faction);

                        var level = $('<span/>').text(" | " + value.MissionInfo.minEnemyLevel + " - " + value.MissionInfo.maxEnemyLevel);
                        alertwar.append(level);

                        var div = $('<div/>');

                        var credit = $('<span/>').text(value.MissionInfo.missionReward.credits + ' crédits');
                        div.append(credit);

                        $.each(value.MissionInfo.missionReward['items'], function (key, value) {
                            var reward = $('<span class="label label-default alert-reward"/>').text(value);
                            div.append(reward);
                        });
                        $.each(value.MissionInfo.missionReward.countedItems, function (key, value) {
                            var reward = $('<span class="label label-default alert-reward"/>').text(value.ItemCount + " " + value.ItemType);
                            div.append(reward);
                        });

                        alertwar.append(div);
                        alertwar.appendTo(".col-Alerts");
                    }
                });
                $(".alert-timer").each(function () {
                    $(this).countdown($(this).attr('data-end'), function (event) {
                        $(this).html(
                            event.strftime([
                                '<span><span>%D</span></span>',
                                '<span>J </span>',
                                '<span><span>%H</span></span>',
                                '<span>h </span>',
                                '<span><span>%M</span></span>',
                                '<span>m </span>',
                                '<span><span>%S</span></span>',
                                '<span>s </span>',
                            ].join(''))
                        );
                    });
                });
            }
            else {
                var alertwar = $('<div class="alert"/>');
                var noAlerts = $('<h3 style="text-align: center;margin-top: 10px;"/>').text('Aucune');
                alertwar.append(noAlerts);
                alertwar.appendTo(".col-Alerts");
            }

            //Sorties
            if(datas.Sorties) {
                $(".col-Sorties").html('');
                $.each(datas.Sorties, function (key, value) {
                    var sortiesInfo = $('<div class="alert"/>');

                    var sortiesSaison = $('<div/>').text(value.Reward).css({"text-align" : "center", "font-weight" : "bold", "font-size" : "18px"});
                    sortiesInfo.append(sortiesSaison);

                    var sortiesTime = $('<div class="sortiesCountdown"/>').attr({
                        'data-end': value.Expiry.usec
                    });
                    sortiesInfo.append(sortiesTime);

                    var div = $('<div/>').text('Ennemi : ').css({"text-align" : "center"});
                    var sortiesBoss = $('<strong/>').text(value.Boss);
                    div.append(sortiesBoss);
                    div.appendTo(sortiesInfo);

                    sortiesInfo.appendTo(".col-Sorties");


                    var sortiesRewardTable = $('<table class="table table-bordered table-hover"/>');
                    var sortiesRewardTableBody = $('<tbody/>');
                    $.each(value.RewardList, function (key, reward) {
                        var sortiesRewardTableLigne = $('<tr/>');
                        var sortiesRewardTableCell = $('<td style="padding: 0 10px"/>')
                        sortiesRewardTableCell.text('- ' + reward);
                        sortiesRewardTableLigne.append(sortiesRewardTableCell);
                        sortiesRewardTableBody.append(sortiesRewardTableLigne);
                    });
                    sortiesRewardTable.append(sortiesRewardTableBody);

                    sortiesRewardTable.appendTo(".col-Sorties");
                });
                $(".sortiesCountdown").each(function () {
                    $(this).countdown($(this).attr('data-end'), function (event) {
                        $(this).html(
                            event.strftime([
                                '<span><span>%D</span></span>',
                                '<span>J </span>',
                                '<span><span>%H</span></span>',
                                '<span>h </span>',
                                '<span><span>%M</span></span>',
                                '<span>m </span>',
                                '<span><span>%S</span></span>',
                                '<span>s </span>',
                            ].join(''))
                        );
                    });
                });
            }
            else {
                var sortieswar = $('<div class="alert"/>');
                var noSorties = $('<h3 style="text-align: center;margin-top: 10px;"/>').text('Aucune');
                sortieswar.append(noSorties);
                sortieswar.appendTo(".col-Sorties");
            }

            
            //Reset
            setTimeout("warjson(time)",10000);
        }, 'json');
    }
    warjson(time);







    /*
    $(".countdown").each(function () {
        $(this).countdown($(this).attr('data-end'), function (event) {
            $(this).html(
                event.strftime([
                    '<div class="countdown-item">',
                    '<span>Days</span>',
                    '<span><span>%D</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                    '<span>Hours</span>',
                    '<span><span>%H</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                    '<span>Minutes</span>',
                    '<span><span>%M</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                    '<span>Seconds</span>',
                    '<span><span>%S</span></span>',
                    '</div>'
                ].join(''))
            );
        });
    });
    */

</script>