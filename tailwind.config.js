  /** @type {import('tailwindcss').Config} */
  import forms from '@tailwindcss/forms';

module.exports = {
  darkMode: 'class',
  presets: [
    require('./vendor/tallstackui/tallstackui/tailwind.config.js')
  ],
  content: [
    "./resources/**/*.blade.php",
    './vendor/tallstackui/tallstackui/src/**/*.php',
    './app/View/Components/**/*.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [
      forms,
      require('tailwind-dracula')(),
  ],
}

