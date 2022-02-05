setTimeout(function(){$("#subscribeModal").modal("show")},2e3);var options={chart:{height:360,type:"bar",stacked:!0,toolbar:{show:!1},zoom:{enabled:!0}},plotOptions:{bar:{horizontal:!1,columnWidth:"15%",endingShape:"rounded"}},dataLabels:{enabled:!1},
    series:[
        {
            name:"Заробітна плата",data:[
                16800,21980,19000,21200,17900,18600,18650,24700,23000,19000,19000,17900
            ]
        },
        {
            name:"Премія",data:[
                1300,2300,200,800,1300,2700,1800,220,1000,1600,2400,2200
            ]
        },
        {
            name:"Штрафи",data:[
                0,2300,0,0,0,0,0,0,0,0,0,2200
            ]
        }
        ],xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},
    colors:["#556ee6","#34c38f","#f46a6a"],legend:{position:"bottom"},fill:{opacity:1}},
    chart=new ApexCharts(document.querySelector("#stacked-column-chart"),options);chart.render();options={chart:{height:200,type:"radialBar",offsetY:-10},plotOptions:{radialBar:{startAngle:-135,endAngle:135,dataLabels:{name:{fontSize:"13px",color:void 0,offsetY:60},value:{offsetY:22,fontSize:"16px",color:void 0,formatter:function(e){return e+"%"}}}}},colors:["#556ee6"],fill:{type:"gradient",gradient:{shade:"dark",shadeIntensity:.15,inverseColors:!1,opacityFrom:1,opacityTo:1,stops:[0,50,65,91]}},stroke:{dashArray:4},
    series:[
       $countDays
    ],labels:["Відпрацьовано"]};(chart=new ApexCharts(document.querySelector("#radialBar-chart"),options)).render();
