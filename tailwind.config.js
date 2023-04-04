/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    padding: {
      '34': '34px',
      '45': '45px',
      '4': '16px',
      '12': '48px',
      '6': '24px',
      '8': '32px',
    },
    margin:{
      '13.5': '54px',
      '3.75': '15px',
      '65': '65px',
      '114': '114px',
      '79': '79px',
      '82': '82px',
      '67': '67px',
      '18': '18px',
      '6': '24px',
      '8': '32px',
    },
    colors: {
      'gray': '#867070',
      'primary': '#867070',
    },

    backgroundImage: {
      'gradient': 'radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%)',
    },
    backgroundColor: {
      'primary': '#867070',
      'secondary': '#D5B4B4',

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

