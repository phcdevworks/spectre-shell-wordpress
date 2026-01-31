import type { Config } from 'tailwindcss'

export default {
  content: [
    './spectre-theme/**/*.php',
    './src/**/*.{js,ts,jsx,tsx}',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
} satisfies Config
