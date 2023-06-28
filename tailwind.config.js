/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/*.{html,js,php}",
    "./*.{html,js,php}",
    "./components/*.{html,js,php}",
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: ["Inter", "sans-serif"],
        keania: ["Keania One", "cursive"],
      },
    },
  },
  plugins: [],
};
