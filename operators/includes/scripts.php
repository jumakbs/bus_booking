  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

   

    <!-- Page level custom scripts -->
    <script >
      // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($busname) ?>,
    datasets: [{
      label: "seats",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: <?php echo json_encode($seatno) ?>,
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 15,
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true,
         
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

    </script>



 <!-- bar chart start here -->

 <script>

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
// *     example: number_format(1234.56, 2, ',', ' ');
// *     return: '1 234,56'
number = (number + '').replace(',', '').replace(' ', '');
var n = !isFinite(+number) ? 0 : +number,
prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
s = '',
toFixedFix = function(n, prec) {
var k = Math.pow(10, prec);
return '' + Math.round(n * k) / k;
};
// Fix for IE parseFloat(0.55).toFixed(0) = 0;
s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
if (s[0].length > 3) {
s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
}
if ((s[1] || '').length < prec) {
s[1] = s[1] || '';
s[1] += new Array(prec - s[1].length + 1).join('0');
}
return s.join(dec);
}

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
type: 'bar',

data: {
  labels: <?php echo json_encode($destination)  ?>,


datasets: [{
label: <?php echo json_encode($froms)  ?>,
backgroundColor: "#4e73df",
hoverBackgroundColor: "#2e59d9",
borderColor: "#4e73df",
data: <?php echo json_encode($price) ?>,
}],
},
options: {
maintainAspectRatio: false,
layout: {
padding: {
  left: 10,
  right: 25,
  top: 25,
  bottom: 0
}
},
scales: {
xAxes: [{
  
  gridLines: {
    display: false,
    drawBorder: false
  },
  ticks: {
    maxTicksLimit: 6
  },
  maxBarThickness: 25,
}],
yAxes: [{
  ticks: {
    value: <?php echo json_encode($destination) ?>,
    beginAtZero: true,
    // Include a dollar sign in the ticks
    callback: function(value, index, values) {
      return ' ' + number_format(value)  + '/= ' ;
    }
  },
  gridLines: {
    color: "rgb(234, 236, 244)",
    zeroLineColor: "rgb(234, 236, 244)",
    drawBorder: false,
    borderDash: [2],
    zeroLineBorderDash: [2]
  }
}],
},
legend: {
display: false
},
tooltips: {
titleMarginBottom: 10,
titleFontColor: '#6e707e',
titleFontSize: 14,
backgroundColor: "rgb(255,255,255)",
bodyFontColor: "#858796",
borderColor: '#dddfeb',
borderWidth: 1,
xPadding: 15,
yPadding: 15,
displayColors: false,
caretPadding: 10,
callbacks: {
  label: function(tooltipItem, chart) {
    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
    return datasetLabel + ' ' + number_format(tooltipItem.yLabel) + '/=';
  }
}
},
}

});

</script>
    <script src="js/demo/chart-pie-demo.js"></script>
