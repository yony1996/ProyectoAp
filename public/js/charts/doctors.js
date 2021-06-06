const chart = Highcharts.setOptions({
    lang: {
        loading: "Cargando...",
        months: [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        weekdays: [
            "Domingo",
            "Lunes",
            "Martes",
            "Miércoles",
            "Jueves",
            "Viernes",
            "Sábado"
        ],
        shortMonths: [
            "Ene",
            "Feb",
            "Mar",
            "Abr",
            "May",
            "Jun",
            "Jul",
            "Ago",
            "Sep",
            "Oct",
            "Nov",
            "Dic"
        ],
        exportButtonTitle: "Exportar",
        printButtonTitle: "Importar",
        rangeSelectorFrom: "Desde",
        rangeSelectorTo: "Hasta",
        rangeSelectorZoom: "Período",
        downloadPNG: "Descargar imagen PNG",
        downloadJPEG: "Descargar imagen JPEG",
        downloadPDF: "Descargar imagen PDF",
        downloadSVG: "Descargar imagen SVG",
        printChart: "Imprimir",
        resetZoom: "Reiniciar zoom",
        resetZoomTitle: "Reiniciar zoom",
        thousandsSep: ",",
        decimalPoint: "."
    }
});
Highcharts.chart("container", {
    chart: {
        type: "column"
    },
    title: {
        text: "Medicos más activos"
    },
    xAxis: {
        categories: [],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: "Citas Atendidas"
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true
    },

    series: []
});

function fetchData() {
    fetch('/charts/doctors/column/data')
        .then(function(response) {
            return response.json();
        })
        .then(function(myJson) {
            console.log(myJson);
        });
}
