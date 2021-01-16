<?php
 $date_now = date("m-d"); // this format is string comparable


if ($date_now == '02-12') {
    $holiday = 'Lunar New Year';
}elseif($date_now == '04-01'){
    $holiday = 'Maundy Thursday';
}elseif($date_now == '04-02'){
    $holiday = 'Good Friday';
}elseif($date_now == '04-09'){
    $holiday = 'Bataan Day';
}elseif($date_now == '05-01'){
    $holiday = 'Labour Day';
}elseif($date_now == '05-12' or $date_now == '05-13'){
    $holiday = 'Eid al-Fitr';
}elseif($date_now == '08-30'){
    $holiday = 'National Heroes Day (in Philippines)';
}elseif($date_now == '11-30'){
    $holiday = 'Bonifacio Day';
}elseif($date_now == '12-08'){
    $holiday = 'Feast of the Immaculate Conception';
}elseif($date_now == '12-25'){
    $holiday = 'Christmas Day';
}elseif($date_now == '12-30'){
    $holiday = 'Rizal Day';
}else{
    $holiday = '';
}
?>
  

<div class="<?php if($holiday == ''){echo 'd-none';}?>">
    <i class="fa fa-star-half-o" aria-hidden="true"></i> <?php echo $holiday;?>
</div>
