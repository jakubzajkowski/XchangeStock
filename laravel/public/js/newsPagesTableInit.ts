import Table from './newsPagesTable'
let table = new Table('http://127.0.0.1:8000/api/usd','http://127.0.0.1:8000/api/eur','http://127.0.0.1:8000/api/chf','http://127.0.0.1:8000/api/gbp');
table.renderHtml();