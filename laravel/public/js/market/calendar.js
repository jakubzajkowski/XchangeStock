const calendarEvents = document.querySelector(".xd")

const fetchData=async ()=>{
    let res = await fetch("http://127.0.0.1:8000/education/calendar/events")
    let res_1 = res.json()
    return res_1
}


const createEvents=(title,img,country,date)=>{
    return `<div class="p-3 text-start" style="background-color:rgb(219, 218, 218);">
        <p>${date}</p>
        <p><img style="width: 8%;" src="${img}" alt=""> ${title} ${country}</p>
    </div>
`
}

const xd=async ()=>{
    let data = await fetchData()
    for (let i=0;i<3;i++){
        let title = data[i].title
        let img = data[i].img
        let country = data[i].country.toUpperCase()
        let date = data[i].date
        calendarEvents.innerHTML+=createEvents(title,img,country,date)
    }
}
xd()