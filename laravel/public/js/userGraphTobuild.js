import Chart from 'chart.js/auto';

const addContainer= document.querySelectorAll(".add__container");
const addGraph= document.querySelectorAll(".add--graph");
const banerGraphs=()=>{
    return `
    <div class="baner overflow-auto float-left p-3 bg-white border rounded">
    <h1 class="text-center h3">Select Graph</h1>
    <p class="close--baner btn btn-outline-danger">X</p>
    <p class="btn btn-outline-primary xd">Usd/Eur</p>
    <p class="btn btn-outline-primary xd">Gbp/Usd</p>
    <p class="btn btn-outline-primary xd">Gold/Eur</p>
    <p class="btn btn-outline-primary xd">Eur/Gbp</p>
    <p class="btn btn-outline-primary xd">Chf/Gbp</p>
    </div>
    `
}
const Creategraph=(parent)=>{
    let graph = document.createElement('canvas')
    graph.setAttribute("class","graph")
    parent.appendChild(graph)
    var xyValues = [
        {x:50, y:7},
        {x:60, y:8},
        {x:70, y:8},
        {x:80, y:9},
        {x:90, y:9},
        {x:100, y:9},
        {x:110, y:10},
        {x:120, y:11},
        {x:130, y:14},
        {x:140, y:14},
        {x:150, y:15}
      ];
        new Chart(graph, {
            type: "scatter",
            data: {
              datasets: [{
                pointRadius: 4,
                pointBackgroundColor: "rgb(0,0,255)",
                data: xyValues
              }]
            },
            options: {
              legend: {display: false},
              scales: {
                xAxes: [{ticks: {min: 1, max:160}}],
                yAxes: [{ticks: {min: 6, max:16}}],
              }
            }
          });
}
const CreateBaner=(parent)=>{
    let baner = document.createElement('div')
    baner.innerHTML=banerGraphs()
    parent.appendChild(baner)
    const closeBanerButton=document.querySelectorAll(".close--baner");
    const graphButtons=document.querySelectorAll(".xd");
    closeBanerButton.forEach(x=>{
        x.addEventListener('click',(e)=>{
            let banerRemove = e.target.parentElement;
            gsap.fromTo(banerRemove,{opacity: 1,scale: 1}, {opacity: 0,scale: 0.8, duration: 0.5}).then(()=>{
                banerRemove.remove()
            })
        })
    })
    graphButtons.forEach(x=>{
        x.addEventListener('click',()=>{
            Creategraph(parent)
            console.log(parent.firstChild.nodeName)
            })
        })
}

addGraph.forEach(x=>{
    x.addEventListener('click',(e)=>{
        let parent = e.target.parentElement;
        CreateBaner(parent)
        gsap.from(parent, {opacity: 0,scale: 0.8, duration: 0.5});
    })
})
