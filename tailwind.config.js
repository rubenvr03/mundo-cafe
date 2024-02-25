/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.css",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors:{
            'bg_nav' : '#745944',
        },
        fontFamily:{
            customFont:['CocoGothic', 'sans-serif'],
        }
    },
  },
  plugins: [],
}

