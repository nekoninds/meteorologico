<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
        
        <?php 
        	echo "var obj = [";
            $TemperaturaColima = "SELECT * FROM datos WHERE idSensor='1' AND ubicacion = 'villa' ORDER BY idDato";
            $exec = mysqli_query($con,$TemperaturaColima);
            while($row =mysqli_fetch_array($exec))
            {
                echo "[new Date('".$row['fecha']." ".$row['hora']."'), ".$row['dato']."],";
            }
            echo "];";
        ?>
        
        /*
        var obj = [
            [new Date('December 22, 2013 07:26:12'),   4],
            [new Date(1387719023801),   1],
            [new Date(1387721025901),   3],
            [new Date(1387723027001),   8],
        ];*/
        
        var data = new google.visualization.DataTable();
        data.addColumn('datetime', 'Date');
        data.addColumn('number', 'Temperatura');
        data.addRows(obj);

        var options = {
            curveType: "function",
            width: 800, 
            height: 550,
            vAxis: {maxValue: 100}, 
            title: 'Temperatura',
            hAxis: {
                //format: "HH:mm"
                //format: "HH:mm:ss"
                format:'MMM d, y'
            },
            explorer: { 
                actions: ['dragToZoom', 'rightClickToReset'], 
                axis: 'vertical'
            }
        };

        var chart = new google.visualization.LineChart(
        document.getElementById('chart_div'));
        chart.draw(data, options);
        chart.draw(data2, options);
    }
    </script>