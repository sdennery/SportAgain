<!DOCTYPE html>
<html>
    <head>
        <title> Calendrier </title>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8"  />
        <link rel="stylesheet" type="text/css" href="../Vue/miniCalendrier.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript">
            jQuery(function ($) {
                var lesMois = new Date();
                var moisCourant = lesMois.getMonth();
                var leMois = moisCourant+1;
                $(".month").hide();
                $("#month"+leMois).show();
                $(".months a#linkMonth"+leMois).addClass('active');
                var current =leMois;
                $(".months a").click(function() {
                    var month = $(this).attr('id').replace("linkMonth", '');
                    if(month != current){
                        $('#month'+current).slideUp();
                        $('#month'+month).slideDown();
                        $(".months a").removeClass("active");
                        $(".months a#linkMonth" + month).toggleClass("active");
                        current = month;
                    }
                    return false;
                });
            }); </script>
    </head>
    <body>
        <?php
        include('../Modele/traitcal.php');
        require('../Modele/dates.php');
        $date = new Date();
        $anneeb = date('Y');
        $events1 = $date->getEvents1($anneeb); 
        $dates = $date->getAll($anneeb);
        ?>
        <div class="periode">
            <div class="year"><?php echo $anneeb ; ?></div>
            <div class="months">
                <ul>
                    <?php foreach ($date->months as $id=>$mois): ?>
                        <li><a href="#" id="linkMonth<?php echo $id+1; ?>"> <?php echo utf8_encode(substr(utf8_decode($mois),0,3)); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="clear"></div>
            <?php $dates = current($dates); ?>
            <?php foreach ($dates as $mois=>$days): ?>
                <div class="month relative" id="month<?php echo $mois; ?>">
                    <table class="table1">
                        <thead>
                            <tr>
                                <?php foreach ($date->days as $jours): ?>
                                    <th><?php echo substr($jours,0,3); ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php $dernierjour = end($days); foreach ($days as $jours=>$joursem): ?>
                                <?php $time = strtotime("$anneeb-$mois-$jours"); ?>
                                <?php if($jours == 1 && $jours != $joursem): ?>
                                    <td colspan="<?php echo $joursem-1; ?>" class="padding"> </td>
                                <?php endif; ?>
                                <td <?php if($time == strtotime(date('Y-m-d'))): ?> class="today" <?php endif; ?> >
                                    <div class="relative">
                                        <div class="affichageJour"> 
                                            <?php echo $jours; ?> </div>
                                    </div>
                                    <div class="dateDuJour">
                                        <?php echo $date->days[$joursem-1]; ?> <?php echo $jours; ?> <?php echo $date->months[$mois-1]; ?>
                                    </div>
                                    
                                    <ul class="events">
                                        <?php    if(isset($events[$time])):  foreach($events[$time] as $e): ?>
                                        <li> <?php echo $e; ?> </li>
                                        <?php endforeach; endif;  ?>
                                    </ul>
                                    
                                </td>
                                <?php if($joursem == 7): ?>
                                </tr><tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if($dernierjour != 7): ?>
                                <td colspan="<?php echo 7-$dernierjour; ?>" class="padding" ></td>
                            <?php endif; ?>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="clear"></div>
    </body>
</html>