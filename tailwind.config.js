/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{html,js,php}",
    "./*.{html,js,php}"
  ],
  theme: {
    extend: {
      colors: {
        "primary-color": "var(--primary-color)",
        "primary-color-hover": "var(--primary-color-hover)",
        "secondary-color": "var(--secondary-color)",
        "secondary-color-hover": "var(--secondary-color-hover)",
      },
    },
  },
  plugins: [],
}

