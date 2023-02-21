const date=()=>{
    const now = new Date()
    return {
        year : now.getFullYear(),
        dayString : now.getDay(),
        day : (now.getDate()<10) ? "0"+now.getDate() : now.getDate(),
        hour : (now.getHours()<10) ? "0"+now.getHours() : now.getHours(),
        month : now.getMonth(),
        minutes : (now.getMinutes()<10) ? "0"+now.getMinutes() : now.getMinutes(),
        seconds : (now.getSeconds()<10) ? "0"+now.getSeconds() : now.getSeconds(),
    }
}

export default date