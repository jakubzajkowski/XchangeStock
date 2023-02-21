let mobile = document.querySelector('.mobile')
let desktop = document.querySelector('.desktop')
let bars = document.querySelector('.bars')
let mobileNav = document.querySelector('.mobile__nav')
let screenWidth = window.matchMedia("(max-width: 950px)")
    if (screenWidth.matches) {
        desktop.style.display="none"
        let barsState=true
        mobileNav.style.opacity=barsState ? '0':'1';
        bars.addEventListener('click',()=>{
            barsState=!barsState
            mobileNav.style.opacity=barsState ? '0':'1';
            mobileNav.style.zIndex=barsState ? '0':'2';
        }) 
    } else {
        mobile.style.display="none"
        mobileNav.style.display="none"
    }