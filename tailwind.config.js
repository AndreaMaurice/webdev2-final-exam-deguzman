module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      backgroundImage: (theme) => ({
        'hero-lg': "url('/public/img/img1.jpg')",
    }),
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}

