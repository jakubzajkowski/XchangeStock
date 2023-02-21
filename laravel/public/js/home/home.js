let gold = document.querySelector('.gold--price');
fetch('http://127.0.0.1:8000/api/gold').then(res=>res.json()).then((res)=>{
    gold.innerHTML=res[res.length-1].price;
})
let dollar = document.querySelector('.dollar--price');
fetch('http://127.0.0.1:8000/api/usd').then(res=>res.json()).then((res)=>{
    dollar.innerHTML=res[res.length-1].price;
})
fetch('http://127.0.0.1:8000/api/chf').then(res=>res.json())
fetch('http://127.0.0.1:8000/api/gbp').then(res=>res.json())
fetch('http://127.0.0.1:8000/api/eur').then(res=>res.json())


let nextPlus= document.querySelector('.next--plus');
let nextMinus=document.querySelector('.next--minus');
let slideContainer = document.querySelector('.slide');
let width = slideContainer.offsetWidth;
nextPlus.addEventListener('click',()=>{
    gsap.to(".slide", {
        duration: 4, 
        x: (width/8), 
      });
})
nextMinus.addEventListener('click',()=>{
    gsap.to(".slide", {
        duration: 2, 
        x: -(width/8), 
      });
})
Draggable.create('.slide',{
    type : 'x',
    bounds: {minX: (width/8),maxX: -(width/8),}
})
  
 