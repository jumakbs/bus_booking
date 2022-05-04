<?php
$con  = mysqli_connect('localhost', 'root','', 'bus_booking');
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM buses";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $busname[]  = $row['busname']  ;
            $seatno[] = $row['seatno'];
        }
 
 
 }
 
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>

   
        <div style="width:40%;hieght:20%;text-align:center">
            <h2 class="page-header" >Analytics Reports </h2>
            <div>Product </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>
        <div style="width:40%;hieght:20%;text-align:center">
            <h2 class="page-header" >Analytics Reports </h2>
            <div>Product </div>
        <canvas id="myChart" width="100" height="100"></canvas>
        </div>

        <div style="width:40%;hieght:20%;text-align:center">
            <h2 class="page-header" >Analytics Reports </h2>
            <div>Product </div>
            <canvas id="chartJSContainer" width="600" height="400"></canvas>
        </div>


        <!-- <div style="width:40%;hieght:20%;text-align:center">
            <h2 class="page-header" >QRCODE </h2>
            <div>Product </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div> -->
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="qrcode.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($busname); ?>,
                        datasets: [{
                            label: "The price ",
                            backgroundColor: [
                              
                            ],
                            data:<?php echo json_encode($seatno); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>


<script>
 var ctx = document.getElementById("myChart");
debugger;
var data = {
  labels: ["2 Jan", "9 Jan", "16 Jan", "23 Jan", "30 Jan", "6 Feb", "13 Feb"],
  datasets: [{
    data: [150, 87, 56, 50, 88, 60, 45],
    backgroundColor: "#4082c4"
  }]
}
var myChart = new Chart(ctx, {
  type: 'bar',
  data: data,
  options: {
    "hover": {
      "animationDuration": 0
    },
    "animation": {
      "duration": 1,
      "onComplete": function() {
        var chartInstance = this.chart,
          ctx = chartInstance.ctx;

        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
        ctx.textAlign = 'center';
        ctx.textBaseline = 'bottom';

        this.data.datasets.forEach(function(dataset, i) {
          var meta = chartInstance.controller.getDatasetMeta(i);
          meta.data.forEach(function(bar, index) {
            var data = dataset.data[index];
            ctx.fillText(data, bar._model.x, bar._model.y - 5);
          });
        });
      }
    },
    legend: {
      "display": false
    },
    tooltips: {
      "enabled": false
    },
    scales: {
      yAxes: [{
        display: false,
        gridLines: {
          display: false
        },
        ticks: {
          max: Math.max(...data.datasets[0].data) + 10,
          display: false,
          beginAtZero: true
        }
      }],
      xAxes: [{
        gridLines: {
          display: false
        },
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
</script>



<script>
  var options = {
  type: 'line',
  data: {
    labels: ["A", "B", "C", "D", "E", "F"],
    datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      },
      {
        label: '# of Points',
        data: [7, 11, 5, 8, 3, 7],
        borderWidth: 1
      }
    ]
  },
  options: {
    scales: {
      x: {
        position: 'bottom',
        grid: {
          offset: true // offset true to get labels in between the lines instead of on the lines
        }
      },
      x2: {
        position: 'top',
        grid: {
          offset: true // offset true to get labels in between the lines instead of on the lines
        }
      },
      y: {
        ticks: {
          count: (context) => (context.scale.chart.data.labels1.length + 1)
        }
      }
     
    },
    plugins: {
      labelsY: {
        font: 'Arial',
        size: '14px',
        color: '#666',
        align: 'right',
        reverseLabels: false // true to make A start at top and F at bottom
      }
    }
  },
  plugins: [{
    id: 'labelsY',
    afterDraw: (chart, args, options) => {
      const {
        ctx,
        scales: {
          y,
          x
        },
        data: {
          labels
        }
      } = chart;

      let dupLabels = JSON.parse(JSON.stringify(labels)); // remove pointer to internal labels array so you dont get glitchy behaviour

      if (options.reverseLabels) {
        dupLabels = dupLabels.reverse();
      }

      dupLabels.forEach((label, i) => {
        ctx.save();

        ctx.textAlign = options.align || 'right';
        ctx.font = `${options.size || '40px'} ${options.font || 'Arial'}`;
        ctx.fillStyle = options.color || 'black'

        let xPos = x.getPixelForValue(labels[0]) - ctx.measureText(label).width;
        let yPos = (y.getPixelForValue(y.ticks[i].value) + y.getPixelForValue(y.ticks[i + 1].value)) / 2;

        ctx.fillText(label, xPos, yPos)

        ctx.restore();
      });
    }
  }]
}

var ctx = document.getElementById('chartJSContainer').getContext('2d');
new Chart(ctx, options);
</script>
</html>