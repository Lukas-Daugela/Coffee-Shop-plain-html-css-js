import className from 'classnames/bind';
import { useField } from 'formik';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './TextArea.module.scss';

const cn = className.bind(styles);

export default function TextArea({ placeholder, ...props }) {
  const [field, meta] = useField(props);

  const error = meta.touched && meta.error;

  return (
    <div className={cn('text-input')}>
      <textarea
        rows={10}
        cols={40}
        {...field}
        {...props}
        placeholder={placeholder}
        className={cn('text-input__field', {
          'text-input__field--has-error': error,
        })}
        aria-describedby={`${field.name}-error`}
      />
      {error && <span className={cn('text-input__error-msg')}>{meta.error}</span>}
    </div>
  );
}

TextArea.propTypes = {
  name: PropTypes.string.isRequired,
  placeholder: PropTypes.string,
  value: PropTypes.string,
  required: PropTypes.bool,
};
