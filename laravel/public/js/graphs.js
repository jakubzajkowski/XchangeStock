class Graphs {
    d7 = document.querySelector('.d7');
    d14 = document.querySelector('.d14');
    yValuesGbp =[];
    yValuesUsd =[];
    labesX=[];
    labesXStatus=true;
    urlCur1;
    urlCur2;
    legendCurrency1;
    legendCurrency2;
    max;
    min;
    constructor(){
        let text = window.location.href;
        let currencyId2= text.slice(text.length-3, text.length);
        let currencyId1= text.slice(text.length-7, text.length-4);
        if (currencyId1=='old'){
            this.legendCurrency1='gold'
            this.legendCurrency2=currencyId2
            this.urlCur1=`http://127.0.0.1:8000/api/gold`
            this.urlCur2=`http://127.0.0.1:8000/api/${currencyId2}`
            this.max=100;
            this.min=2;
        }
        else{
            this.legendCurrency1=currencyId1
            this.legendCurrency2=currencyId2
            this.urlCur1=`http://127.0.0.1:8000/api/${currencyId1}`
            this.urlCur2=`http://127.0.0.1:8000/api/${currencyId2}`
            this.max=6;
            this.min=3;
        }
    }
    fetchData(){
        fetch(this.urlCur1).then(res=>res.json()).then(res=>{
            res.map(x=>this.yValuesGbp.push(x.price))
            res.map(x=>this.labesX.push(x.date))
        }).then(fetch(this.urlCur2).then(data=>data.json()).then(data=>{
            data.map(x=>this.labesX.push(x.date))
            data.map(x=>this.yValuesUsd.push(x.price))
            this.chart(this.labesX,this.yValuesGbp,this.yValuesUsd)
        }
        ))
    }
    ButtonsAction(){
        this.d7.addEventListener('click',()=>{
            this.labesXStatus=true
            this.chart(this.labesX,this.yValuesGbp,this.yValuesUsd)
        })
        this.d14.addEventListener('click',()=>{
            this.labesXStatus=false
            this.chart(this.labesX,this.yValuesGbp,this.yValuesUsd)
        })
    }
    chart(x,ygb,yus){
        if (this.legendCurrency1=='gold'){
            ygb=ygb.map(x=>x/yus[yus.length-1])
        }
        return new Chart("myChart", {
        type: "line",
        data: {
            labels: (this.labesXStatus==true) ? this.labesX.slice(this.labesX.length-7,this.labesX.length) : this.labesX.slice(this.labesX.length-14,this.labesX.length),
            datasets: [
            {
            label: this.legendCurrency1,
            borderColor: "rgb(180, 231, 0)",
            borderWidth: 5,
            data: (this.labesXStatus==true) ? ygb.slice(ygb.length-7,ygb.length) : ygb.slice(ygb.length-14,ygb.length),
            fill: true
            },
            {
            label: this.legendCurrency2,
            borderColor: "red",
            borderWidth: 5,
            data: (this.labesXStatus==true) ? yus.slice(yus.length-7,yus.length) : yus.slice(yus.length-14,yus.length),
            fill: true
            }
        ]
        },
        options:{ 
            interaction: {
                mode: 'nearest',
                axis: 'x',
                intersect: false
              },
            legend: {display: true},
            title: {
                display: true,
                text: "2023",
                fontSize: 22,
            },
            scales: {
            yAxes: [{ticks: {min: this.min, max:this.max}}],
            }}
        });
        }
}

export default Graphs