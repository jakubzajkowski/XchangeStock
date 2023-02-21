import fetchEvents from "./fetchEvents"

const addEvents = async (days,monthChangeSystemOne,now,firstDayInMonth,containerEvents) => {
  let data = await fetchEvents();
  let monthToView = new Date(now.year, now.month + monthChangeSystemOne, 0).getMonth() + 1;
  const eventText=(title,country,date,img,actual,consensus,previous,note)=>{
    return `
    <div class="event row p-2 my-2 " style="background-color: rgb(206, 206, 206);border-radius:2rem">
      <div class="p-2 col-sm-4">
          <img src="${img}" alt="usa">
          <h3>${country.toUpperCase()} <span>${date}</span></h3>
          <p>${title}</p>
      </div>
      <div class="p-2 col-sm-8">
          <ul class="list-inline h5 d-flex justify-content-between">
              <li class="d-inline">${actual} Actual</li>
              <li class="d-inline">${consensus} Consensus</li>
              <li class="d-inline">${previous} Previous</li>
          </ul>
          <div>
              <p>${note}</p>
          </div>
      </div>
    </div>
    `
  }
  const createEvent=(title,id,country,img,date,actual,consensus,previous,note)=>{
      let div = document.createElement('div')
      div.innerHTML=eventText(title,country,date,img,actual,consensus,previous,note)
      div.classList.add(`id_${id}`)
      containerEvents.appendChild(div)
      gsap.from(div,{opacity:0.2,duration:0.2})
  }
  const createEventContent=()=>{

    data.map(event => {
      let monthOfEvent = parseInt(event.date.slice(5, 7));
      let dayOfEvent = parseInt(event.date.slice(8, 10));
      let country,date,img,actual,consensus,previous,note;
      country=event.country
      img=event.img
      date=event.date
      actual=event.actual
      consensus=event.consensus
      previous=event.previous
      note=event.note
      if(monthOfEvent === monthToView){
          createEvent(event.title,event.id,country,img,date,actual,consensus,previous,note)
      }
      else{
          let xd =document.querySelectorAll(`.id_${event.id}`)
          xd.forEach(x=>{
            x.remove()
          })
      }
    });
  }
    createEventContent()

    for (let i = 0; i < days.length; i++) {
      let day = i-firstDayInMonth+2;
      let hasEvent = data.some(event => {
        let monthOfEvent = parseInt(event.date.slice(5, 7));
        let dayOfEvent = parseInt(event.date.slice(8, 10));
        return monthOfEvent === monthToView && dayOfEvent === day;
      });

      if (hasEvent) {
        days[i].classList.add('eventday');
      } else {
        days[i].classList.remove('eventday');
      }
    }
  }

export default addEvents