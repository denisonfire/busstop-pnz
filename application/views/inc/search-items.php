<?php /** @var $items Model_Station[] */
foreach($items as $station)
{
    printf('<li>
        <a href="/station_forecast?id=%d&type=%s">
           <span class="ui-li-content">%s</span>
           <div>
               <span class="ui-li-desc zeromargin">%s</span>
               <span class="ui-li-desc zeromargin"> &rarr;%s</span>
           </div>
        </a>
    </li>',
        $station->id,$station->type,
        $station->name,
        $station->descr,
        $station->heading);
}
?>