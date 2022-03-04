let apiValue = null;
apiValue = getUrlVars()['api'];

let urlStr = 'http://localhost:8080/';

if (apiValue) {
    urlStr += '?api=';
    urlStr += apiValue;
}

fetch(urlStr)
    .then(response => response.json())
    .then(data => appendToTheDataHolder(data, apiValue))
    .catch(err => console.log('error: ' + err));

let appendToTheDataHolder = (data, apiValue) => {
    let dataHolder = document.getElementById('theData');

    switch (apiValue) {
        case 'users':
            data.forEach((item) => {
                dataHolder.innerHTML += item.first_name + ' ' + item.last_name + '<br />';
            });
            break;
        case 'posts':
            data.forEach((item) => {
                dataHolder.innerHTML += item.title + ' ' + item.body + '<br />';
            });
            break;
        case 'comments':
            data.forEach((item) => {
                dataHolder.innerHTML += item.user_id + ' ' + item.body + '<br />';
            });
            break;
        default:
            dataHolder.innerHTML = 'No data has been requested';
            break;
    }
}

function getUrlVars() {
    let vars = {};
    let parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
        vars[key] = value;
    });
    return vars;
}