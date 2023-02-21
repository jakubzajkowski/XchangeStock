const fetchEvents=async ()=>{
    const res = await fetch('http://127.0.0.1:8000/education/calendar/events')
    const data = await res.json()
    return data
}

export default fetchEvents