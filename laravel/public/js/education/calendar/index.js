import date from "./date"
import dateToView from "./dateToView"
import addEvents from "./addEvents"

const todayDate= document.querySelector('.today--date')
const calendarToday= document.querySelector('.calendar__today')
const nextButton= document.querySelector('.calendar__next__icon')
const backButton= document.querySelector('.calendar__back__icon')
const namesDays=document.querySelectorAll('.days__name')
const containerEvents=document.querySelector('.container__events')



let monthChangeSystemOne=1
let monthChangeSystemTwo=0

const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
const daysNames = ["Monday", "Tusday", "Wensday", "Thursday", "Friday", "Saturday","Sunday"];


const x = window.matchMedia("(max-width: 950px)")

if(x.matches){
    namesDays.forEach((x,index)=>{
        x.innerHTML=daysNames[index].slice(0,3)
        console.log(daysNames[index].slice(0,3))
    })
}
else{
    namesDays.forEach((x,index)=>{
        x.innerHTML=daysNames[index]
    })
}
const createCalendar=()=>{
    const now = date()
    const days= document.querySelectorAll('.days')
    const daysInMonth=new Date(now.year, now.month+monthChangeSystemOne, 0).getDate();
    const daysInLastMonth=new Date(now.year, now.month+monthChangeSystemTwo, 0).getDate();
    let firstDayInMonth=new Date(now.year, now.month+monthChangeSystemTwo, 1).getDay();
    firstDayInMonth=(firstDayInMonth===0)? 7 : firstDayInMonth;
    let lastDayInMonth=new Date(now.year, now.month+1+monthChangeSystemTwo, 0).getDay();
    for (let i=1;i<=daysInMonth;i++){
        days[(firstDayInMonth-2)+i].innerHTML=i
    }
    for (let i=0;i<=firstDayInMonth-2;i++){
        days[i].innerHTML=(daysInLastMonth-(firstDayInMonth-2))+i
    }
    for (let i=daysInMonth+firstDayInMonth-1;i<days.length;i++){
        days[i].innerHTML=((daysInMonth+firstDayInMonth-2)-i)*-1
    }
    dateToView(now,monthChangeSystemOne,calendarToday,days,monthNames)
    addEvents(days,monthChangeSystemOne,now,firstDayInMonth,containerEvents)

}

setInterval(()=>{
    const now = date()
    todayDate.innerHTML=`${daysNames[now.dayString]} ${monthNames[now.month]} ${now.day} ${now.year}  ${now.hour}:${now.minutes}:${now.seconds}`
},1000)

createCalendar()

nextButton.addEventListener('click',()=>{
    monthChangeSystemOne+=1
    monthChangeSystemTwo+=1
    createCalendar()
        //animate calendar slide
    gsap.from('.calendar__main',{x:"100%", duration: 0.1})
})
backButton.addEventListener('click',()=>{
    monthChangeSystemOne-=1
    monthChangeSystemTwo-=1
    createCalendar()
    //animate calendar slide
    gsap.from('.calendar__main',{x:"-100%", duration: 0.1})
})
