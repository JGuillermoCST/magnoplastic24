/** @type {import('tailwindcss').Config} */

module.exports = {
    darkMode: 'class',
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./node_modules/flowbite/**/*.js",
      "./node_modules/tw-elements/dist/js/**/*.js"
    ],
    theme: {
      extend: {
        maxWidth: {
            'card': '180px',
        },
        maxHeight: {
            'card': '180px',
        },
        inset: {
            '-2': '-2px',
            'p1': '10%',
            'p2': '20%',
            'p3': '30%',
            'p35': '35%',
            'p4': '40%',
            'p5': '50%',
            'p7': '70%',
            'hidden3': '-300px'
        },
        aspectRatio: {
            none: 0,
            square: [1, 1],
            "16/9": [16, 9],
            "4/3": [4, 3],
            "21/9": [21, 9]
        },
      },
    },
    variants: {
        aspectRatio: ['responsive'],
        extend: {},
    },
    plugins: [
        // require("tailwindcss-aspect-ratio"),
        // require("tailwindcss-responsive-embed"),
        require('flowbite/plugin'),
        require("tw-elements/dist/plugin.cjs")
    ]
  }
