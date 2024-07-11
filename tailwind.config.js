/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      screens: {
        xs: '390px',
        max: '1921px',
      },
    
      colors: {
        primary: '#fdf4db',
        secondary: '#2b314f',
        third: '#be9466',
      },
      animation: {
        'spin-slow': 'spin 15s linear infinite',
      },
    },
  },
  plugins: [],
}


