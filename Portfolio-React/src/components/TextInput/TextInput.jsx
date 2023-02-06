import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './TextInput.module.scss';

const cn = className.bind(styles);

export default function TextInput({
  name,
  placeholder,
  onBlur,
  value,
  required,
  error,
  autoComplete,
}) {
  return (
    <div className={cn('text-input')}>
      <input
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
        autoComplete={autoComplete}
      />
      {error && (
        <span id={`${name}-error`} className={cn('text-input__error-msg')}>
          {error}
        </span>
      )}
    </div>
  );
}

TextInput.propTypes = {
  name: PropTypes.string.isRequired,
  placeholder: PropTypes.string,
  onBlur: PropTypes.func.isRequired,
  value: PropTypes.string,
  required: PropTypes.bool,
  error: PropTypes.oneOfType([PropTypes.string, PropTypes.bool]),
  autoComplete: PropTypes.string,
};
