import * as monaco from 'monaco-editor';

const editor = monaco.editor.create(document.getElementById('monacoEditor'), {
    theme: 'vs-dark',
    language: 'javascript',
    scrollBeyondLastLine: false
});

export default editor;
