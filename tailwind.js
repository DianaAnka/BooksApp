module.exports = {
  purge: [],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
}
@tailwind preflight;

/**
 * Here you would add any of your custom component classes; stuff that you'd
 * want loaded *before* the utilities so that the utilities could still
 * override them.
 *
 * Example:
 * 
 * .btn { ... }
 * .form-input { ... }
 *
 * Or if using a preprocessor:
 * 
 * @import "components/buttons";
 * @import "components/forms";
 */

/**
 * This injects all of Tailwind's utility classes, generated based on your
 * config file.
 */
@tailwind utilities;

margin: {
  'px': '1px',
  '0': '0',
  '1': '0.25rem',
  '2': '0.5rem',
  '3': '0.75rem',
  '4': '1rem',
  '6': '1.5rem',
  '8': '2rem',
},