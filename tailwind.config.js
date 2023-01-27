/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
  theme: {
    extend: {
      fontFamily: {
        'Inter': ['"Inter"', 'sans-serif']
      }
    }
  }
}

module.exports = {
  theme: {
    extend: {
      keyframes: {
        hamburgerspin: {
          '0%, 100%': { transform: 'rotate(90deg)' },
          '50%': { transform: 'rotate(180deg)' },
        }
      }
    }
  }
}


