module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
   theme: {
     extend: {
      width:{
        '430px' : '430px'
      },
      screens:{
        'xs': '425px'
      }
     }
   },
   variants: {
     extend: {},
   },
   plugins: [],
 }