import className from 'classnames/bind';
import { Form, Formik } from 'formik';
import PropTypes from 'prop-types';
import React from 'react';

import Button from '../Button';
import TextArea from '../TextArea';
import TextInput from '../TextInput';
import styles from './ContactForm.module.scss';
import { validationSchema } from './validation/validationSchema';

const cn = className.bind(styles);

export default function ContactForm({ texts }) {
  const initialValues = {
    firstName: '',
    email: '',
    phone: '',
    message: '',
  };

  const { firstNameText, email, phoneNumber, message } = texts;

  return (
    <Formik initialValues={initialValues} validationSchema={validationSchema}>
      {() => (
        <Form className={cn('contact-form')}>
          <TextInput
            name="firstName"
            autoComplete="given-name"
            type="text"
            placeholder={firstNameText.placeholder}
          />
          <TextInput
            name="email"
            autoComplete="email"
            type="text"
            placeholder={email.placeholder}
          />
          <TextInput
            name="phone"
            type="tel"
            autoComplete="tel"
            placeholder={phoneNumber.placeholder}
          />
          <TextArea name="message" placeholder={message.placeholder} />
          <div className={cn('contact-form__button-wrapper')}>
            <Button>Send</Button>
          </div>
        </Form>
      )}
    </Formik>
  );
}

ContactForm.propTypes = {
  texts: PropTypes.object.isRequired,
};
