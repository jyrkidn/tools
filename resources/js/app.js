import 'alpinejs'
import codemirror from 'codemirror'

import CodeMirror from 'codemirror'
import 'codemirror/mode/javascript/javascript'
import 'codemirror/mode/xml/xml'

let editor = null

document.addEventListener('livewire:load', () => {
  initEditor()
  Livewire.hook('element.updated', (el, component) => {
    initEditor()
  })
})

window.addEventListener('value-beautified', event => {
  editor.setOption('value', event.detail.beautified)
  editor.setOption('mode', event.detail.language)
})

function initEditor() {
  editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
    lineNumbers: true,
    matchBrackets: true,
  })

  editor.setSize('100%', '100%')
}