import className from 'classnames/bind';
import { Form, Formik } from 'formik';
import PropTypes from 'prop-types';
import React, { useRef } from 'react';

import Button from '../Button';
import TextArea from '../TextArea';
import TextInput from '../TextInput';
import styles from './ContactForm.module.scss';
import withValidation from './withValidation';

const cn = className.bind(styles);

const FieldTextInput = withValidation(TextInput);
const FieldTextArea = withValidation(TextArea);

export default function ContactForm({ texts }) {
  const formikInnerRef = useRef();

  const initialValues = {
    firstName: '',
    email: '',
    phone: '',
    message: '',
  };

  const { firstNameText, phoneNumber, email, message } = texts;

  const handleOnSubmit = (values) => {
    const formData = new FormData();
    Object.entries(values).forEach(([key, value]) => formData.append(key, value));
  };

  return (
    <Formik
      innerRef={formikInnerRef}
      initialValues={initialValues}
      onSubmit={handleOnSubmit}
      // validationSchema={validationSchema}
    >
      {({ handleSubmit }) => (
        <Form className={cn('contact-form')}>
          <FieldTextInput
            name="firstName"
            autoComplete="given-name"
            placeholder={firstNameText.placeholder}
            required
          />
          <FieldTextInput
            name="email"
            autoComplete="email"
            placeholder={email.placeholder}
            required
          />
          <FieldTextInput
            name="phone"
            autoComplete="phone-number"
            placeholder={phoneNumber.placeholder}
          />
          <FieldTextArea name="message" placeholder={message.placeholder} required />
          <div className={cn('contact-form__button-wrapper')}>
            <Button onClick={handleSubmit}>Send</Button>
          </div>
        </Form>
      )}
    </Formik>
  );
}

ContactForm.propTypes = {
  // onSubmit: PropTypes.func.isRequired,
  texts: PropTypes.object.isRequired,
};
