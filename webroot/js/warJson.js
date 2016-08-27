function warjson(time) {
    $.post('Alerts/index', { time: time },function (datas) {

        //Alerts
        var colAlerts = $(".col-Alerts");
        colAlerts.html('');
        if(datas.Alerts) {
            $.each(datas.Alerts, function (key, value) {
                if (datas.timenow <= value.Expiry.sec) {
                    var alertwar = $('<div class="alert"/>');

                    if (value.Activation.sec <= datas.timenow) {
                        alertwar.append($('<span class="label label-success alert-timer expiry"/>').attr({
                            'data-end': value.Expiry.usec,
                            'data': value.Expiry.sec
                        }));
                    }
                    else {
                        alertwar.append($('<span class="label label-default alert-timer activation">').attr({
                            'data-end': value.Activation.usec,
                            'data': value.Activation.sec
                        }));
                    }
                    var ligne = $('<div/>').css({"margin-bottom" : "3px"});
                    ligne.append($('<strong/>').text(value.MissionInfo.location + " "));

                    if (value.MissionInfo.nightmare == true) {
                        ligne.append($('<span class="label label-danger alert-cauchemar"/>').text('Cauchemar'));
                    }
                    if (value.MissionInfo.archwingRequired == true) {
                        ligne.append($('<span class="label label-primary alert-archwing"/>').text('Archwing'));
                    }

                    alertwar.append(ligne);
                    alertwar.append($('<strong/>').text(value.MissionInfo.missionType));

                    if (value.MissionInfo.maxWaveNum) {
                        if (value.MissionInfo.missionType == 'Espionage') {
                            alertwar.append($('<spa/>').text(" | Mini. " + value.MissionInfo.maxWaveNum + " données"));
                        }
                        else if (value.MissionInfo.missionType == 'Survie') {
                            alertwar.append($('<span/>').text(" | " + value.MissionInfo.maxWaveNum + " minutes"));
                        }
                        else {
                            alertwar.append($('<span/>').text(" | " + value.MissionInfo.maxWaveNum + " vagues"));
                        }
                    }

                    alertwar.append($('<span/>').text(" | " + value.MissionInfo.faction));
                    alertwar.append($('<span/>').text(" | " + value.MissionInfo.minEnemyLevel + " - " + value.MissionInfo.maxEnemyLevel));
                    alertwar.append('<br/>');
                    alertwar.append($('<span/>').text(value.MissionInfo.missionReward.credits + ' crédits'));

                    $.each(value.MissionInfo.missionReward['items'], function (key, value) {
                        alertwar.append($('<span class="label label-default alert-reward"/>').text(value));
                    });
                    $.each(value.MissionInfo.missionReward.countedItems, function (key, value) {
                        alertwar.append($('<span class="label label-default alert-reward"/>').text(value.ItemCount + " " + value.ItemType));
                    });

                    colAlerts.append(alertwar);
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
            colAlerts.append($('<div class="alert"/>').append($('<h3/>').text('Aucune').css({"text-align" : "center", "margin-top" : "10px"})));
        }

        //Sorties
        var sortiesInfo = $('.sortiesInfo');
        var sortiesReward = $('.sortiesReward');
        var sortiesMissions = $('.sortiesMissions');
        sortiesInfo.html('');
        sortiesReward.html('');
        sortiesMissions.html('');
        if(datas.Sorties) {
            $.each(datas.Sorties, function (key, value) {

                sortiesInfo.append($('<span/>').text(value.Reward).css({"font-weight" : "bold"}));
                sortiesInfo.append($('<div class="sortiesCountdown"/>').attr({'data-end': value.Expiry.usec}));
                sortiesInfo.append($('<span/>').text('Ennemi : ').append($('<span/>').text(value.Boss).css({"font-weight" : "bold"})));

                $.each(value.RewardList, function (key, reward) {
                    sortiesReward.append($('<span/>').text('- ' + reward)).append('<br/>');
                });

                $.each(value.Variants, function (key, value) {
                    var sortiesMission = $('<div class="alert"/>');

                    sortiesMission.append($('<span/>').text(value.node).css({"font-weight" : "bold"}));

                    switch(key) {
                        case 0: sortiesMission.append($('<span/>').text(' | 55 - 60')); break;
                        case 1: sortiesMission.append($('<span/>').text(' | 65 - 80')); break;
                        case 2: sortiesMission.append($('<span/>').text(' | 80 - 100')); break;
                    }

                    sortiesMission.append('<br/>');
                    sortiesMission.append($('<span/>').text('Mission : '));
                    sortiesMission.append($('<span/>').text(value.missionIndex).css({"font-weight" : "bold"}));
                    sortiesMission.append('<br/>');
                    sortiesMission.append($('<span/>').text('Condition : '));
                    sortiesMission.append($('<span/>').text(value.modifierIndex).css({"font-weight" : "bold"}));
                    sortiesMissions.append(sortiesMission);

                });
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
            sortiesInfo.append($('<h3/>').text('Aucune').css({"text-align" : "center", "margin-top" : "10px"}));
        }


        //VoidTraders
        var traderName = $('.traderName');
        var voidTraderList = $('.voidTrader');
        var traderLocation = $('.traderLocation');
        traderName.html('');
        voidTraderList.html('');
        traderLocation.html('');
        $.each(datas.VoidTraders, function (key, value) {

            traderName.text(value.Character);

            if(value.Manifest){
                var itemsTable = $('<table class="table table-bordered table-hover table-striped ItemsTrader"/>');
                var itemsTableHead = $('<thead><tr><th>Objets</th><th>Ducats</th><th>Crédits</th></tr></thead>');
                var itemsTableBody = $('<tbody/>');
                $.each(value.Manifest, function (key, value) {
                    itemsTableBody.append($('<tr/>').append($('<td/>').text(value.ItemType).css({"text-align" : "center"})).append($('<td/>').text(value.PrimePrice).css({"text-align" : "center"})).append($('<td/>').text(value.RegularPrice).css({"text-align" : "center"})));
                });
                voidTraderList.append(itemsTable.append(itemsTableHead).append(itemsTableBody));
            }
            else {
                voidTraderList.append($('<div class="alert"/>').append($('<h3/>').text('Aucune').css({"text-align" : "center", "margin-top" : "10px"})));
            }

            if (value.Activation.sec <= datas.timenow) {
                $('.tradercountdown').attr({'data-end': value.Expiry.usec, 'data': value.Expiry.sec});
            }
            else {
                $('.tradercountdown').attr({'data-end': value.Activation.usec, 'data': value.Activation.sec});
            }

            traderLocation.text(value.Node).css({"text-align" : "center", "margin-top" : "10px"});

        });
        $(".tradercountdown").each(function() {
            $(this).countdown($(this).attr('data-end'), function(event) {
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

        //Reset
        setTimeout("warjson(((new Date()).getTimezoneOffset())*-60)",10000);
    }, 'json');
}

warjson(((new Date()).getTimezoneOffset())*-60);

