module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: [
    './resources/views/**/*.blade.php'
  ],
  theme: {
    extend: {
      colors: {
        'dark-purple': '#2d2b57',
        'light-purple': '#e3dfff',
        'text-yellow': '#f8d000'
      }
    }
  },
  variants: {},
  plugins: [],
}
