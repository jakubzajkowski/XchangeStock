let news = document.querySelectorAll('.news');
let optionAuthors = document.querySelectorAll('.option-authors');
let optionCurrency = document.querySelectorAll('.option-currency');
let filter={
    authors: [],
    currency:[]
};
const selectFiltersAuthors=()=>{
    news.forEach(x=>{
        let newsDataAuthors=x.getAttribute('data-author')
        let newsDataCurrency=x.getAttribute('data-currency')
        if(filter.authors.length === 0){
            x.style.display="block"
        }
        else{
            if(!filter.authors.includes(newsDataAuthors)){
                x.style.display="none"
            }
            else{
                x.style.display="block"
            }
        }
    })
}
const selectFiltersCurrency=()=>{
    news.forEach(x=>{
        let newsDataAuthors=x.getAttribute('data-author')
        let newsDataCurrency=x.getAttribute('data-currency')
        if(filter.currency.length === 0){
            x.style.display="block"
        }
        else{
            if(!filter.currency.includes(newsDataCurrency)){
                x.style.display="none"
            }
            else{
                x.style.display="block"
            }
        }
    })
}
optionAuthors.forEach(x=>{
    x.addEventListener('change',()=>{
        if(x.checked){
            filter.authors.push(x.value);
            selectFiltersAuthors()
            console.log(filter.authors)
        }
        else{
            let xIndex = filter.authors.indexOf(x.value)
            filter.authors.splice(xIndex,1);
            selectFiltersAuthors()
            console.log(filter.authors)
        }
    })
})
optionCurrency.forEach(x=>{
    x.addEventListener('click',()=>{
        if(x.checked){
            filter.currency.push(x.value);
            selectFiltersCurrency()
            console.log(filter.currency)
        }
        else{
            let xIndex = filter.currency.indexOf(x.value)
            filter.currency.splice(xIndex,1);
            selectFiltersCurrency()
            console.log(filter.currency)
        }
    })
})
