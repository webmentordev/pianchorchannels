/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "main": "#0075E9",
        "dark": "#25252B",
        "dark-b": "#323238",
        "smoke": "#979292",
        "border-c": "#E8E8E8"
      },
      screens: {
        '965px': {
          'max': "965px"
        },
        '940px': {
          'max': "940px"
        },
        '920px': {
          'max': "920px"
        },
        '875px': {
          'max': "875px"
        },
        '780px': {
          'max': "780px"
        },
        '670px': {
          'max': "670px"
        },
        '520px': {
          'max': "520px"
        },
        '490px': {
          'max': "490px"
        },
        '400px': {
          'max': "400px"
        }
      },
      animation: {
        moveright: 'moveright 0.5s linear',
        moveup: 'moveup 0.5s linear',
        navshow: 'navshow 0.5s linear',
        fadeshowup: 'fadeshowup 0.8s linear',
      },
      keyframes: {
        moveright: {
          '0%': { transform: 'translateX(-50px)' },
          '100%': { transform: 'translateX(0px)' },
        },
        moveup: {
          '0%': { transform: 'translateY(50px)' },
          '100%': { transform: 'translateY(0px)' },
        },
        navshow: {
          '0%': { transform: 'translateY(-100%)' },
          '100%': { transform: 'translateY(0px)' },
        },
        fadeshowup: {
          '0%': { transform: 'translateY(100px)', opacity: "0.5" },
          '100%': { transform: 'translateY(0px)', opacity: "1" },
        }
      }
    },
  },
  plugins: [],
}