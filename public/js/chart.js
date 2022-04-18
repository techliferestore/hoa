
// setup lineChart

const data = {
  labels: ['0', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep'],
        datasets: [{
            label: 'Chemicals',
            data: [550, 560, 570, 450, 700, 1000, 240, 250, 980, 700],
            backgroundColor: 'transparent',
            borderColor: '#FFB66D',
            borderWidth: 1,
            tension: 0.2,
            yAxisID: 'y'
        },{
          label: 'Plants',
          data: [750, 250, 950, 550, 970, 260, 150, 200, 210, 190],
          backgroundColor: 'transparent',
          borderColor: '#AFB9E2',
          borderWidth: 1,
          tension: 0.2,
          yAxisID: 'y'
      }]
};

// config lineChart

const config = {
  type: 'line',
  data,
  options: {
      responsive: true,
      tooltips: {
        enabled: true,
        backgroundColor: 'red',
      }
  },
 
};


// render init block lineChart

const myChart = new Chart(
document.getElementById('myChart'),
config
);

// pie Chart

// data of pie chart

const datapie = {
  labels: ['421', '607', '689',],
        datasets: [{
            label: '# of Votes',
            data: [421, 689, 607],
            backgroundColor: '#11A5B8',
            borderColor: '#fff',
            borderWidth: 1
        }]
};

// config pie

const configpie ={
  type: 'doughnut',
  data: datapie,
  options: {}
};



// render or init of pie chart

const pieChart = new Chart(
  document.getElementById('pieChart'),
  configpie
);


