import ApexCharts from 'apexcharts';

let options = {
    chart: {
        type: 'line'
    },
    series: [{
        name: 'sales',
        data: [30,40,35,50,49,60,70,91,125]
    }],
    xaxis: {
        categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
    }
}

let chartElement = document.querySelector("#chart");

// the chart is executed only if the HTML element is found
if (chartElement) {
    let chart = new ApexCharts(chartElement, options);
    chart.render();
}
