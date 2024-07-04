// Tailkit (Tailwind CSS v3 Configuration)
import defaultTheme from "tailwindcss/defaultTheme";

import aspectRatio from "@tailwindcss/aspect-ratio";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/views/**/*.blade.php"],
  darkMode: "selector",
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter", ...defaultTheme.fontFamily.sans],
      },
      maxWidth: {
        "8xl": "90rem",
        "9xl": "105rem",
        "10xl": "120rem",
      },
      zIndex: {
        1: 1,
        60: 60,
        70: 70,
        80: 80,
        90: 90,
        100: 100,
      },
      keyframes: {
        "spin-slow": {
          "100%": {
            transform: "rotate(-360deg)",
          },
        },
      },
      animation: {
        "spin-slow": "spin-slow 8s linear infinite",
      },
    },
  },
  plugins: [aspectRatio, forms, typography],
};
