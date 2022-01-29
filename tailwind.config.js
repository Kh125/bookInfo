module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      padding: {
        '1/3': '33.33333%',
        '2/3': '66.66667%'
      },
      colors: {
        primarycolor: "#24B0D0",
        secondarycolor: "#89CBCB",
        lightcolor: "#ffffff",
        secondarylightcolor: "#edf0f5",
        darkcolor: "#0F1010"
      },
      fontFamily: {
        'montserrat': ["'Montserrat'", 'sans-serif'],
        'cairo':["'Cairo'", 'sans-serif'],        
        'raleway':["'Raleway'", 'sans-serif'],
      }

    },
  },
  plugins: [
  ],
}
