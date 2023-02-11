export default class Table {
    public urlFirst: string;
    public urlSec: string;
    public urlThird: string;
    public urlFourth: string;
    constructor(urlFirst: string,urlSec: string,urlThird: string,urlFourth: string){
        this.urlFirst=urlFirst;
        this.urlSec=urlSec;
        this.urlThird=urlThird;
        this.urlFourth=urlFourth
    }
    get_data():any{
        return new Promise((resolve,reject)=>{
                fetch(this.urlFirst).then(res=>res.json()).then(res=>{
                    resolve(res[res.length-1])
                })
        })
    }
    get_data1():any{
        return new Promise((resolve,reject)=>{
                fetch(this.urlSec).then(res=>res.json()).then(res=>{
                    resolve(res[res.length-1])
                })
        })
    }
    get_data2():any{
        return new Promise((resolve,reject)=>{
                fetch(this.urlThird).then(res=>res.json()).then(res=>{
                    resolve(res[res.length-1])
                })
        })
    }
    get_data3():any{
        return new Promise((resolve,reject)=>{
                fetch(this.urlFourth).then(res=>res.json()).then(res=>{
                    resolve(res[res.length-1])
                })
        })
    }
    calculatePower(currencyPrice0: number,currencyPrice1: number): number{
        return Math.round(currencyPrice0/currencyPrice1*100)/100;
    }
    async renderHtml(){
            let data:any = await this.get_data()
            let data1:any = await this.get_data1()
            let data2:any = await this.get_data2()
            let data3:any = await this.get_data3()
            let table:HTMLElement= document.querySelector('table')
            table.innerHTML=`
            <tr>
                <th>PAIR</th>
                <th>PRICE</th>
            </tr>
            <tr>
                <th>${data.code}/${data1.code}</th>
                <th>${this.calculatePower(data.price,data1.price)}</th>
            </tr>
            <tr>
                <th>${data1.code}/${data2.code}</th>
                <th>${this.calculatePower(data1.price,data2.price)}</th>
            </tr>
            <tr>
                <th>${data2.code}/${data3.code}</th>
                <th>${this.calculatePower(data2.price,data3.price)}</th>
            </tr>
            <tr>
                <th>${data3.code}/${data.code}</th>
                <th>${this.calculatePower(data3.price,data.price)}</th>
            </tr>
            `
    }
}