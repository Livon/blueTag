module.exports = {
  //  https://laravel.com/docs/8.x/mix#working-with-stylesheets
  purge: [
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
      // require('@tailwindcss/forms'),
  ],
}
