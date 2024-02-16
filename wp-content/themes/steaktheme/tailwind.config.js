/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      "blanc": "#FFFFFF",
      "noir": "#000000",
      "bleu": "#00425A",
      "vert-clair": "#1F8A70",
      "vert-fonce": "#205B46",
      "orange": "#EF8731",
      "orange-fonce": "#B85227",
      "beige": "#FDF7F1",
      "rose": "#EBDEDE",
      "transparent": "transparent",
    },
    fontSize: {
      '2xl': '300px',
    },
    screens: {
      'xl': { 'max': '1439px' },
      'lg': { 'max': '1023px' },
      'md': { 'max': '767px' },
      'sm': { 'max': '424px' },
    },
    extend: {},
  },
  plugins: [],
}
