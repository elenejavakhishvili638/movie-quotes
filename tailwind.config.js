/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    margin:{
      '13.5': '54px',
      '3.75': '15px',
      '65': '65px',
      '114': '114px',
    },
    backgroundImage: {
      'gradient': 'radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%)',
    },
    extend: {
      height: {
        '386': '386px',
        '58': '58px',
        '414': '414px',
        '533': '533px'
      },
      width: {
        '700':'700px',
        '58': '58px',
        '748': '748px'
      }
    },
  },
  plugins: [],
}

