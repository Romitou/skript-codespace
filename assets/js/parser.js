const monaco = require('./monaco-editor');

document.getElementById('run').addEventListener('click',  () => {
    const value = monaco.default.getValue().replace('\n', '\\n');
    const response = fetch('/api/parser', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `script=${value}`
    });

    const console =  document.getElementById('console');

    response.then(r => r.json().then(json => {
        json?.logs?.forEach(log => {
            const span = document.createElement('p');
            span.innerText = log.message;
            span.className = 'text-white';
            console.appendChild(span);
        })
    }))

});
