module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './resources/**/*.antlers.html',
      './resources/**/*.blade.php',
      './content/**/*.md'
    ]
  },
  important: true,
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
