import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import TextArea from '../TextArea';
import TextInput from '../TextInput';
import styles from './ContactForm.module.scss';

const cn = className.bind(styles);

export default function ContactForm({ texts }) {
  const { firstNameText, phoneNumber, email, message } = texts;

  return (
    <form className={cn('contact')}>
      <TextInput
        name="firstName"
        autoComplete="given-name"
        placeholder={firstNameText.placeholder}
        required
      />
      <TextInput
        name="email"
        autoComplete="email"
        placeholder={email.placeholder}
        required
      />
      <TextInput
        name="phone"
        autoComplete="phone-number"
        placeholder={phoneNumber.placeholder}
      />
      <TextArea name="message" placeholder={message.placeholder} required />
    </form>
  );
}

ContactForm.propTypes = {
  // onSubmit: PropTypes.func.isRequired,
  texts: PropTypes.object.isRequired,
};
