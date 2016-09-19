$(function () {
var chart = c3.generate({
    bindto: '#rotated-chart',
    data: {
    columns: [
    ['data1', 200, 400, 150, 250]
    ],
    types: {
        data1: 'bar'
        }
    },
    axis: {
        rotated: true,
        x: {
        type: 'categorized'
        }
    },
    color: {pattern: ['#118FDD',  '#54BC75', '#00AFDA', '#FFA800', '#DF4B33', '#555']}
    });
});