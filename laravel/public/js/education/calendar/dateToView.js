const dateToView=(now,monthChangeSystemOne,calendarToday,days,monthNames)=>{
    let monthToView=new Date(now.year, now.month+monthChangeSystemOne, 0).getMonth()+1
    let yearToView=new Date(now.year, now.month+monthChangeSystemOne, 0).getFullYear()
    calendarToday.innerHTML=`${now.day}.${(monthToView<10) ? "0"+monthToView : monthToView}.${yearToView}`
    if(now.month+1!=monthToView || now.year!=yearToView){
        calendarToday.innerHTML=`${monthNames[monthToView-1]} ${yearToView}`
        days[parseInt(now.day)+1].classList.remove("currentday")
    }
    else{
        calendarToday.innerHTML=`${now.day}.${(monthToView<10) ? "0"+monthToView : monthToView}.${yearToView}`
        days[parseInt(now.day)+1].classList.add("currentday")
    }
}


export default dateToView