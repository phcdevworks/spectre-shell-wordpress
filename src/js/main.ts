import '../styles/main.css'

// Your TypeScript code here
console.log('Vite WordPress Theme Loaded!')

// HMR
if (import.meta.hot) {
  import.meta.hot.accept(() => {
    console.log('HMR update')
  })
}
