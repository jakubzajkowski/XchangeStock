const news = document.querySelectorAll('.news');
const optionAuthors = document.querySelectorAll('.option-authors');
const optionCurrency = document.querySelectorAll('.option-currency');
const filter = {
  authors: [],
  currency: []
};

const applyFilters = () => {
  news.forEach(article => {
    const author = article.getAttribute('data-author');
    const currency = article.getAttribute('data-currency');
    const isAuthorIncluded = filter.authors.length === 0 || filter.authors.includes(author);
    const isCurrencyIncluded = filter.currency.length === 0 || filter.currency.includes(currency);
    article.style.display = isAuthorIncluded && isCurrencyIncluded ? 'block' : 'none';
  });
};

optionAuthors.forEach(authorOption => {
  authorOption.addEventListener('change', () => {
    if (authorOption.checked) {
      filter.authors.push(authorOption.value);
    } else {
      const index = filter.authors.indexOf(authorOption.value);
      filter.authors.splice(index, 1);
    }
    applyFilters();
  });
});

optionCurrency.forEach(currencyOption => {
  currencyOption.addEventListener('change', () => {
    if (currencyOption.checked) {
      filter.currency.push(currencyOption.value);
    } else {
      const index = filter.currency.indexOf(currencyOption.value);
      filter.currency.splice(index, 1);
    }
    applyFilters();
  });
});
