import className from 'classnames/bind';
import { useField } from 'formik';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './TextInput.module.scss';

const cn = className.bind(styles);

export default function TextInput({ placeholder, ...props }) {
  const [field, meta] = useField(props);

  const error = meta.touched && meta.error;

  return (
    <div className={cn('text-input')}>
      <input
        {...field}
        {...props}
        placeholder={placeholder}
        className={cn('text-input__field', {
          'text-input__field--has-error': error,
        })}
      />
      {error && <span className={cn('text-input__error-msg')}>{meta.error}</span>}
    </div>
  );
}

TextInput.propTypes = {
  name: PropTypes.string.isRequired,
  placeholder: PropTypes.string,
  value: PropTypes.string,
  required: PropTypes.bool,
};
