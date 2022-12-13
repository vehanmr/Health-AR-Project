
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="js/guage.js"></script>
		<style type="text/css">

		</style>
  
    <title>liveFeed</title>
    
</head>
<body>
<style>
    html,
body {
  height: 100%;
  padding: 0;
  margin: 0;
}

/* div {
  width: 50%;
  height: 50%;
  float: left;
} */

#div1 {
  background: #fff;
  width: 50%;
  height: 50%;
  float: left;
}

#div2 {
  background: #AAA;
  width: 50%;
  height: 50%;
  float: left;
}

#div3 {
  background: #AAA;
  width: 50%;
  height: 50%;
  float: left;
}

#div4 {
  background: #fff;
  width: 50%;
  height: 50%;
  float: left;
}
#chart_div{
    width: 90%;
  height: 81%;
  float: left;
  }
</style>
<script>
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'BPM');

      data.addRows([
        [0, 0],   [1, 40],  [2, 40],  [3, 40],  [3, 40],  [3, 40],
        [6, 40],  [7, 40],  [8, 40],  [9, 40],  [10, 40], [11, 40],
        [12, 20], [13, 40], [14, 40], [15, 40], [16, 40], [17, 48],
        [18, 20], [19, 40], [20, 40], [21, 40], [22, 40], [23, 57],
        [24, 20], [25, 40], [26, 40], [27, 40], [28, 40], [29, 53],
        [30, 40], [31, 40], [32, 40], [33, 40], [34, 40], [35, 65],
        [36, 20], [37, 40], [38, 40], [39, 40], [40, 40], [41, 65],
        [42, 20], [43, 40], [44, 40], [45, 40], [46, 40], [47, 40],
        [48, 20], [49, 40], [50, 40], [51, 40], [52, 40], [53, 40],
        [54, 20], [55, 40], [56, 40], [57, 40], [58, 40], [59, 40],
        [60, 20], [61, 40], [62, 40], [63, 40], [64, 40], [65, 40],
        [66, 20], [67, 40], [68, 40], [69, 40]
      ]);

      var options = {
        hAxis: {
          title: 'Time'
        },
        vAxis: {
          title: 'BPM'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
</script>

<div id="div1">
  <h4>Measuring heart rate</h4>
    <div id="chart_div"></div>
</div>
<div id="div2">
<h4>Foot balance</h4>
<style>

.grid-container {
  background-image: url(image/image4.jpeg);
  background-size: 140px 264px;
  display: inline-grid;
  grid-template-columns: auto auto ;
  background-color: #2196F3;
  padding: 8px;
  float: right;
}
.grid-container1 {
  background-image: url(image/image5.jpeg);
  background-size: 140px 264px;
  display: inline-grid;
  grid-template-columns: auto auto ;
  background-color: #2196F3;
  padding: 8px;
  float: right;
}

.grid-item {
  
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 30px;
  font-size: 30px;
  text-align: center;
}
</style>
<div class="grid-container">
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
</div>
<div class="grid-container1">
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
</div>
</div>

</div>
<div id="div3"><h4>Hand motion capture</h4>
<div id="canvas-holder" style="width:30%">
        <canvas id="chart-speed"></canvas>
    </div>
    <div id="canvas-holder" style="width:50%" style="position: absolute;">
        <canvas id="chart-direction"></canvas>
    </div>
   
    <script>
       

        var configSpeed = {
            "type": "gauge",
            "data": {
                "datasets": [
                    
                     
                ],
                "current": 135,
            },
            "options": {
                "panel": {
                    "min": 0,
                    "max": 240,
                    "tickInterval": 1,
                    "tickColor": "rgb(0, 0, 0)",
                    "tickOuterRadius": 99,
                    "tickInnerRadius": 95,
                    "scales": [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200, 210, 220, 230, 240],
                    "scaleColor": "rgb(0, 0, 0)",
                    "scaleBackgroundColor": "rgb(105, 125, 151)",
                    "scaleTextRadius": 80,
                    "scaleTextSize": 8,
                    "scaleTextColor": "rgba(0, 0, 0, 1)",
                    "scaleOuterRadius": 99,
                    "scaleInnerRadius": 93,
                },
                "needle": {
                    "lengthRadius": 100,
                    "circleColor": "rgba(188, 188, 188, 1)",
                    "color": "rgba(180, 0, 0, 0.8)",
                    "circleRadius": 7,
                    "width": 5,
                },
              
                
            }
        };

        var configDirection = {
            "type": "gauge",
            "data": {
                "datasets": [
                    {
                        "data": [],
                        "backgroundColor": [],
                        "borderWidth": 0,
                        "hoverBackgroundColor": [],
                        "hoverBorderWidth": 0
                    }
                ],
                "current": 90,
            },
            "options": {
                "panel": {
                    "min": 0,
                    "max": 180,
                    "tickInterval": 1,
                    "tickColor": "rgb(0, 0, 0)",
                    "tickOuterRadius": 99,
                    "tickInnerRadius": 95,
                    "scales": [90, 80, 70, 60, 50, 40, 30, 20, 10, 0, 10, 20, 30, 40, 50, 60, 70, 80, 90],
                    "scaleColor": "rgb(0, 0, 0)",
                    "scaleBackgroundColor": "rgb(105, 125, 151)",
                    "scaleTextRadius": 80,
                    "scaleTextSize": 8,
                    "scaleTextColor": "rgba(0, 0, 0, 1)",
                    "scaleOuterRadius": 99,
                    "scaleInnerRadius": 93,
                },
                "needle": {
                    "lengthRadius": 100,
                    "circleColor": "rgba(188, 188, 188, 1)",
                    "color": "rgba(180, 0, 0, 0.8)",
                    "circleRadius": 7,
                    "width": 5,
                },
                "cutoutPercentage": 90,
                "rotation": -Math.PI,
                "circumference": Math.PI,
                "legend": {
                    "display": false,
                    "text": "legend"
                },
                "tooltips": {
                    "enabled": false
                },
                "title": {
                    "display": true,
                    "text": "direction",
                    "position": "bottom"
                },
                "animation": {
                    "animateRotate": false,
                    "animateScale": false
                },
                "hover": {
                    "mode": null
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('chart-speed').getContext('2d');
            window.speed = new Chart(ctx, configSpeed);
            var ctx = document.getElementById('chart-direction').getContext('2d');
            window.direction = new Chart(ctx, configDirection);
        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            configSpeed.data.current = Math.round(Math.random() * 240);
            window.speed.update();
            configDirection.data.current = Math.round(Math.random() * 180);
            window.direction.update();
        });
    </script>
</div>
<div id="div4"><h4>Data visualization</h4>
<div class="container">
  <div>
<button class="btn btn-primary"><a href="coachHome.php" class="text-light">Back</a></button>
     <button class="btn btn-danger"><a href="" class="text-light">Submit</a></button>
     <input type="text" class="form-control" placeholder="Enter Player ID" name="playerId">
     </div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Event ID</th>
      <th scope="col">BPM</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>
</div>


</body>
</html> 