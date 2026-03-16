/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'royal-purple': '#4B0082',
        'lilac': '#C8A2C8',
        'wedding-pink': '#faf8f7',
      },
      fontFamily: {
        'alex': ['Alex Brush', 'cursive'],
        'cormorant': ['Cormorant Garamond', 'serif'],
        'nunito': ['Nunito Sans', 'sans-serif'],
      },
      animation: {
        'bounce-slow': 'bounce 2s infinite',
        'heart-beat': 'heart-beat 1.5s ease-in-out infinite',
      },
      keyframes: {
        'heart-beat': {
          '0%, 100%': { transform: 'scale(1)' },
          '50%': { transform: 'scale(1.1)' },
        }
      }
    },
  },
  plugins: [],
}
