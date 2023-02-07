import className from 'classnames/bind';
import React from 'react';
import { useState } from 'react';

import { HorizontalLine } from '../../../public/assets/svg';
import { ContactContext } from '../../context/ContactContext';
import ContactForm from '../ContactForm';
import SectionsHeading from '../SectionsHeading';
import styles from './SectionContact.module.scss';
import { formTexts } from './texts';

const cn = className.bind(styles);

export default function SectionContact() {
  const [submited, setSubmited] = useState(false);

  return (
    <div id="contact" className={cn('contact')}>
      <SectionsHeading>contact</SectionsHeading>
      <p className={cn('contact__description')}>
        I’m always up for new connections, you can contact me by submiting this contact
        form or via social media.
      </p>
      <HorizontalLine className={cn('contact__hr')} />
      <ContactContext.Provider
        value={{
          setSubmited: () => {
            setSubmited(true);
          },
        }}
      >
        <div className={cn('contact__form-wrapper')}>
          {!submited && <ContactForm texts={formTexts} />}
          {submited && (
            <div className={cn('success-message')}>
              <h3 className={cn('success-message__gratitude')}>Thank you!</h3>
              <p className={cn('success-message__confirmation')}>
                Your message has been sent
              </p>
            </div>
          )}
        </div>
      </ContactContext.Provider>
    </div>
  );
}
