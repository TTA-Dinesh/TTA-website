/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
  content: ["./*.{php,html,js}","./template-parts/*.{php,html,js}"],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      blue: '#00F',
      white: colors.white,
      black: colors.black,
      darkgrey: '#5D5E67',
      black1: '201F1E',
      border_color:'#AAA',
    },
    extend: {
      fontFamily: {
        eiko: ['"PP Eiko Medium"', 'sans-serif'],
        centra: ['"Centra No2 Bold"', 'sans-serif'],
        mon: ['"Montserrat Light"', 'sans-serif'],
        cerapro: ['"Cera PRO Regular"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
