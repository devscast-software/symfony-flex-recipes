/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./templates/**/*.html.twig'],
  safelist: [],
  presets: [],
  darkMode: "media", // or 'class'
  theme: {},
  plugins: [
    require("@tailwindcss/forms"),
  ],
};
