$(function() {


    Morris.Bar({
        element: 'bar-example',
        barColors: ['#118FDD',  '#54BC75', '#00AFDA', '#FFA800', '#DF4B33', '#555'],
        data: [{
            y: 'COSIT',
            a: 100
        }, {
            y: 'COSMAS',
            a: 75
        }, {
            y: 'COAVOET',
            a: 50
        }, {
            y: 'COHUM',
            a: 75        
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A'],
        hideHover: 'auto',
        resize: true
    });

});