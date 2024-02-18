

    <?php
    
    include 'head.php';
    
    
    ?>
    
      <style>
    body {
        background:rgba(218, 175, 118, 0.399);
    }
    h2 {
        margin-top:3em;
        margin-left:7em;
        font-family:britannic bold;
        font-weight:bold;
        color:rgba(19, 92, 69, 0.644);
    }
    label {
        margin-top:3em;
        margin-left:10em;
        font-size:1.5em;
        font-family:calibri;
        color:rgba(19, 71, 92, 0.644);
        font-weight:bold;
    }
    #chartType {
        width:20%;
        background:rgba(195, 212, 126, 0.775);
        
        font-family:cambria;
        margin-left:15em;
    }
    .input {
        margin-top:2em;
        font-family:cambria;
        margin-left:15em;
        margin-bottom:1em;
    }
    .labelInput {
        width:20%;
        background:rgba(195, 212, 126, 0.775);
        color:smokewhite;
        
    }
    
    .valueInput {
        width:20%;
        background:rgba(195, 212, 126, 0.775);
        color:smokewhite;
        margin-top:1em;
    }
    </style>
    
    <body>
        <div>
            <h2> Welcome to Chart Generator</h2><a href="logout.php" style="font-size: 1em; margin-right:5em; float:right;">Logout</a>
        </div>
  <div>
    <label for="chartType">Select Chart Type:</label><br>
    <select id="chartType">
      <option value="pie">Pie Chart</option>
      <option value="bar">Bar Chart</option>
    </select>
  </div>
  <div id="dataInput">
    <!-- Input fields for label and value pairs -->
    <div class = "input">
      <input type="text" placeholder="Label" class="labelInput"><br>
      <input type="number" placeholder="Value" class="valueInput">
    </div>
    <button id="addMore" style = "margin-left:15em; background:rgba(126, 169, 212, 0.644);  font-family:calibri; width:16%; color:rgba(61, 68, 36, 0.775);">Add More</button>
  </div>
  <button id="generate" style = "margin-left:15em; background:rgba(126, 169, 212, 0.644);  font-family:calibri; width:16%; color:rgba(61, 68, 36, 0.775);">Generate Chart</button>

  <canvas id="myChart"></canvas>

  <script>
    document.getElementById('generate').addEventListener('click', function() {
      const chartType = document.getElementById('chartType').value;
      const labels = document.querySelectorAll('.labelInput');
      const values = document.querySelectorAll('.valueInput');
      const data = [];
      labels.forEach((label, index) => {
        data.push({ label: label.value, value: parseInt(values[index].value) });
      });
      generateChart(chartType, data);
    });

    document.getElementById('addMore').addEventListener('click', function() {
      const inputFields = document.createElement('div');
      inputFields.innerHTML = `
        <input type="text" placeholder="Label" class="labelInput">
        <input type="number" placeholder="Value" class="valueInput">
      `;
      document.getElementById('dataInput').appendChild(inputFields);
    });

    function generateChart(chartType, data) {
      const ctx = document.getElementById('myChart').getContext('2d');
      const chartData = {
        labels: data.map(item => item.label),
        datasets: [{
          label: 'Chart Data',
          data: data.map(item => item.value),
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      };

      let chart;
      if (chartType === 'pie') {
        chart = new Chart(ctx, {
          type: 'pie',
          data: chartData,
        });
      } else if (chartType === 'bar') {
        chart = new Chart(ctx, {
          type: 'bar',
          data: chartData,
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      }
    }
  </script>
</body>
</html>