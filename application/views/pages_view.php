<div id="content">
    <?=$pages_info['text'];?>
    <?
    if($page == 'time_table_change')
        echo "<p class='time_table_date_time'>Змінено: <em>".$pages_info['data_date']."</em></p>";
    else
        echo "<p class='date_time'>Змінено: ".$pages_info['data_date']."</p>";
    ?>
</div>
