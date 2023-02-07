import className from 'classnames/bind';
import React from 'react';
import { useState } from 'react';

import { HorizontalLine } from '../../../public/assets/svg';
import ContactForm from '../ContactForm';
import SectionsHeading from '../SectionsHeading';
import styles from './SectionContact.module.scss';
import { formTexts } from './texts';

const cn = className.bind(styles);

export default function SectionContact() {
  const { submited, setSubmited } = useState(false);

  console.log(setSubmited);

  return (
    <div id="contact" className={cn('contact')}>
      <SectionsHeading>contact</SectionsHeading>
      <p className={cn('contact__description')}>
        I’m always up for new connections, you can contact me by submiting this contact
        form or via social media.
      </p>
      <HorizontalLine className={cn('contact__hr')} />
      <div className={cn('contact__form-wrapper')}>
        {!submited && <ContactForm texts={formTexts} />}
        {/* {submited && <SuccessMessage/>} */}
      </div>
    </div>
  );
}
