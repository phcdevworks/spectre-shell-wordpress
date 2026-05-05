import '../styles/main.css'
import { defineSpectreComponents } from '@phcdevworks/spectre-components'

defineSpectreComponents()

if (import.meta.hot) {
  import.meta.hot.accept()
}
