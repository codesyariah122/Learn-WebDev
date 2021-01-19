const covidChart = (last_date, labels, label, dataCovid) => {
    const ctx = document.getElementById('chart-line').getContext('2d');
    if(window.bar != undefined) 
    window.bar.destroy(); 
	
	ctx.height=500;

    window.bar  = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: `# ${label} | Update : ${last_date}`,
                data: dataCovid,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132,1)',
                borderWidth: 1
            }]
        },
        options: {
            // responsive: true,
            // maintainAspectRatio: false,
	        tooltips: {
	            mode: 'index'
	        }
	    }
    });
}

const genderChart = (labels, dataChartGender) => {
    const ctx2 = document.getElementById('chart-pie-gender').getContext('2d');
    if(window.pie != undefined) 
    window.pie.destroy(); 
    window.pie =  new Chart(ctx2, {
        type: 'pie',
        data: {
          labels: labels,
          datasets: [{
            backgroundColor: [
              "#2ecc71",
              "#3498db",
              "#95a5a6",
              "#9b59b6",
              "#f1c40f",
              "#e74c3c",
              "#34495e"
            ],
            data: dataChartGender
          }]
        }

      });
}

const ageChart = (labels, dataChartAge) => {

    const ctx3 = document.getElementById('chart-pie-age').getContext('2d');
    if(window.pie != undefined) 
        window.pie.destroy(); 
    window.pie =  new Chart(ctx3, {
        type: 'pie',
        data: {
          labels: labels,
          datasets: [{
            backgroundColor: [
              "#2ecc71",
              "#3498db",
              "#95a5a6",
              "#9b59b6",
              "#f1c40f",
              "#e74c3c",
              "#34495e"
            ],
            data: dataChartAge
          }]
        }
    });
}