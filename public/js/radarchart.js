//pie Chart pour la question 6
var ctx = document.getElementById("myChart1");
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels:['Occulus Rift/s','HTC Vive','Windows Mixed Reality',' PSVR'],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
       
      ],
      data: ["{{$pie6[0]}}", "{{$pie6[1]}}", "{{$pie6[2]}}", "{{$pie6[3]}}"]
    }]
  }
});