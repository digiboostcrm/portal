<?php /* Smarty version 2.6.31, created on 2019-02-11 12:20:20
         compiled from modules/UT_RightSignature/Dashlets/RSDetailChart/RSDetailChart.tpl */ ?>
<div id='rsdetailchart_<?php echo $this->_tpl_vars['id']; ?>
' style='overflow: auto; width: 100%; height: <?php echo $this->_tpl_vars['height']; ?>
px; border: 1px #ddd solid'>
    <div id="rs_chart_div">
    </div>
</div>
<?php echo '
<script type="text/javascript">
    var thisDashId = '; ?>
"<?php echo $this->_tpl_vars['id']; ?>
"<?php echo ';
    var RSChart;
    function drawRSChart() 
    {
        if("'; ?>
<?php echo $this->_tpl_vars['SPACKETDATA']; ?>
<?php echo '" != \'\'){
            var data = google.visualization.arrayToDataTable(['; ?>
<?php echo $this->_tpl_vars['SPACKETDATA']; ?>
<?php echo ']);
            var options = {
                title: "'; ?>
<?php echo $this->_tpl_vars['sRSChartSummTitle']; ?>
<?php echo '",
                width: 500,
                height: 300,
                bar: {groupWidth: "55%"},
                legend: { position: "none" },
            };
            RSChart = new google.visualization.ColumnChart(document.getElementById("rs_chart_div"));
            RSChart.draw(data, options);
        }
    }
    YAHOO.util.Get.script("https://www.google.com/jsapi", {
        onSuccess: function(obj) { 
            google.load(\'visualization\', \'1.0\', {\'packages\':[\'corechart\'], callback: drawRSChart});
        }
    });
</script>
'; ?>