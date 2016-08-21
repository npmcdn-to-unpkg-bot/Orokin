<!-- Banner -->
<section class="youplay-banner big banner-top youplay-banner-parallax">
    <div class="image" style="background-image: url('https://i.imgur.com/wQzVkEt.jpg')"></div>
    <div class="info">
        <div>
            <div class="container text-center">
                <img class="alignnone size-full" src="http://i.imgur.com/SZOtqEY.png" alt="LogoBig">
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

<div class="container mt-40">

    <div class="alert alert-warning" role="alert">
        <strong>Développement en cours!</strong>
    </div>

    <div class="col-md-6">
        <h2 style="text-align: center">Alerts</h2>
        <div class="col-Alerts"></div>
    </div>

    <div class="col-md-6">

    </div>
</div>


<!-- Realistic Battles -->
<div class="h2"></div>
<section class="youplay-banner youplay-banner-parallax mid" id="exclusive">
    <div class="image" style="background-image: url('http://i.imgur.com/lPpEwSu.png');" data-speed="-0.5">
    </div>
    <div class="info container align-center">
        <div>
            <h2>Black Rock Shooter II</h2>

            <!-- See countdown init in bottom of the page -->
            <div class="countdown style-1 h2" data-end="2017-02-18 10:00:30" data-timezone="EST"></div>
        </div>
    </div>
</section>
<!-- /Realistic Battles -->

<?php $this->start('script'); ?>
<script type="text/javascript">

    var dt = new Date();
    var time = dt.getTimezoneOffset();
    time = time*-60;

    function warjson(time) {
        $.post('Alerts/alerts', { time: time },function (datas) {
            $(".col-Alerts").html('');
            $.each(datas.datas.Alerts, function (key, value) {
                if (datas.timenow <= value.Expiry.sec) {
                    var alertwar = $('<div class="alert"/>');

                    if (value.Activation.sec <= datas.timenow) {
                        var timeExpiry = $('<span class="label label-success alert-timer expiry"/>').attr({ 'data-end': value.Expiry.usec, 'data': value.Expiry.sec});
                        alertwar.append(timeExpiry);
                    }
                    else {
                        var timeActivation = $('<span class="label label-default alert-timer activation">').attr({ 'data-end': value.Activation.usec, 'data': value.Activation.sec});
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
<?php $this->end(); ?>