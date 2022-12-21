let gold = document.querySelector('.gold--price');
fetch('http://127.0.0.1:8000/api/gold').then(res=>res.json()).then((res)=>{
    gold.innerHTML=res[res.length-1].price;
})