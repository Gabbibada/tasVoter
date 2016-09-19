$(function() {
    var data = [{
        label: "Sulexy D",
        data: 40
    }, {
        label: "MYS Akins",
        data: 30
    }, {
        label: "Coolchi Shef",
        data: 20
    }, {
        label: "Gabbi G",
        data: 10
    }];
    var options = {
        series: {
            pie: {
                show: true,
                innerRadius: 0.5,
                show: true
            }
        },
        legend: {
            show: true
        },
        grid: {
            hoverable: true,
            clickable: true
        },
        colors: ['#f0ad4e', '#d9534f', '#5bc0de', '#555555'],
        tooltip: true,
        tooltipOpts: {
            defaultTheme: false
        }
    };
    $.plot($("#pie-chart-donut #pie-donutContainer"), data, options);
});