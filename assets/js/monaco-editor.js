import * as monaco from 'monaco-editor';

monaco.editor.create(document.getElementById('monacoEditor'), {
    theme: 'vs-dark',
    language: 'javascript',
    scrollBeyondLastLine: false
});
