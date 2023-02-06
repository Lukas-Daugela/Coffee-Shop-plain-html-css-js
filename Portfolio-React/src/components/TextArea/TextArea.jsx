import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './TextArea.module.scss';

const cn = className.bind(styles);

export default function TextArea({ name, placeholder, onBlur, value, required, error }) {
  return (
    <div className={cn('text-input')}>
      <textarea
        rows={10}
        cols={40}
        type="text"
        name={name}
        id={name}
        placeholder={placeholder}
        onBlur={onBlur}
        value={value}
        className={cn('text-input__field', {
          'text-input__field--has-error': error,
        })}
        required={required}
        aria-describedby={`${name}-error`}
      />
      {error && (
        <span id={`${name}-error`} className={cn('text-input__error-msg')}>
          {error}
        </span>
      )}
    </div>
  );
}

TextArea.propTypes = {
  name: PropTypes.string.isRequired,
  placeholder: PropTypes.string,
  onBlur: PropTypes.func.isRequired,
  value: PropTypes.string,
  required: PropTypes.bool,
  error: PropTypes.oneOfType([PropTypes.string, PropTypes.bool]),
};
