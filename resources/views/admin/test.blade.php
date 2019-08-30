<script>
                                        var ctx = document.getElementById("myChart");
                                        var myChart = new Chart(ctx, {
                                          type: 'radar',
                                          data: {
                                            labels: ["M", "T", "W", "T", "F", "S", "S"],
                                            datasets: [{
                                              label: 'apples',
                                              backgroundColor: "rgba(153,255,51,0.4)",
                                              borderColor: "rgba(153,255,51,1)",
                                              data: [12, 19, 3, 17, 28, 24, 7]
                                            }, {
                                              label: 'oranges',
                                              backgroundColor: "rgba(255,153,0,0.4)",
                                              borderColor: "rgba(255,153,0,1)",
                                              data: [30, 29, 5, 5, 20, 3, 10]
                                            }]
                                          }
                                        });

                                      
                                    </script>






                                    var marksCanvas = document.getElementById("myChart");
                                    
                                    var marksData = {
                                      labels: ["Qualité image", "Confort interface bigscreen", "connection reseau", "Qualité graphisme 3D", "Qualité audio"],
                                      datasets: [{
                                        label: "Qualité image",
                                        backgroundColor: "rgba(200,0,0,0.2)",
                                        data: [65, 75, 70, 80, 60]
                                      }, {
                                      label: "Confort interface bigscreen",
                                      backgroundColor: "rgba(0,0,200,0.2)",
                                      data: [54, 65, 60, 70, 70]
                                      },{ 
                                      label: "connection reseau",
                                      backgroundColor: "rgba(0,0,200,0.2)",
                                      data: [54, 65, 60, 70, 70]
                                      },{ 
                                     label: "Qualité graphisme 3D",
                                     backgroundColor: "rgba(0,0,200,0.2)",
                                     data: [54, 65, 60, 70, 70]
                                     },{ 
                                    label: "Qualité graphisme 3D",
                                    backgroundColor: "rgba(0,0,200,0.2)",
                                    data: [54, 65, 60, 70, 70]
                                     },
                                      ]
                                    };
                                    
                                    var radarChart = new Chart(marksCanvas, {
                                      type: 'radar',
                                      data: marksData
                                    });





                                    var data = {
                                      labels: ["Emotional Well Being", "Interpersonal Relationships", "Social Inclusion", "Personal Development","Self Determination", "Physical Well Being", "Material Well Being", "Rights"],
                                      datasets: [
                                          {
                                              label: "Quality of Life Domains",
                                              backgroundColor: "rgba(68,181,238,0.2)",
                                              borderColor: "rgba(68,181,238,1)",
                                              pointBackgroundColor: "rgba(179,181,198,1)",
                                              pointBorderColor: "#fff",
                                              pointHoverBackgroundColor: "#fff",
                                              pointHoverBorderColor: "rgba(179,181,198,1)",
                                              data: [10, 15, 2, 8, 7, 9, 9, 5]
                                          }
                                      ]
                                  };
                                  
                                  var ctx = document.getElementById("radarChart");
                                  
                                  var myRadarChart = new Chart(ctx, {
                                      type: 'radar',
                                      data: data,
                                      options: {
                                        scale: {
                                          ticks: {
                                              beginAtZero: true
                                          }
                                        }
                                      }
                                  });










                                 <script>

                                  var marksCanvas = document.getElementById("myChart");
                                  
                                 
                                  var radarChart = new Chart(marksCanvas, {
                                    type: 'radar',
                                    data: {
                                      labels: ["English", "Maths", "Physics", "Chemistry", "Biology", "History"],
                                      datasets: [{
                                        label: "Student A",
                                        backgroundColor: "rgba(200,0,0,0.2)",
                                        data: [65, 75, 70, 80, 60, 80]
                                      }, {
                                        label: "Student B",
                                        backgroundColor: "rgba(0,0,200,0.2)",
                                        data: [54, 65, 60, 70, 70, 75]
                                      }]
                                    };
                                  });
                               
                                </script>

                                <canvas style="width:400px;height:400px" id="myChart"></canvas>


                                  // $users = DB::table('users')
                                  // ->join('contacts', 'users.id', '=', 'contacts.user_id')
                                  // ->join('orders', 'users.id', '=', 'orders.user_id')
                                  // ->select('users.*', 'contacts.phone', 'orders.price')
                                  // ->get();
              