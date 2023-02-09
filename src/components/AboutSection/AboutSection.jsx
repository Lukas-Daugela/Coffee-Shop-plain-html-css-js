import Aos from 'aos';
import className from 'classnames/bind';
import React, { useEffect } from 'react';

import { HorizontalLine } from '../../../public/assets/svg';
import SectionsHeading from '../SectionsHeading';
import styles from './AboutSection.module.scss';
import { text } from './text';

const cn = className.bind(styles);

const { description } = text;

export default function AboutSection() {
  useEffect(() => {
    Aos.init();
  }, []);
  return (
    <div id="about" className={cn('about')}>
      <SectionsHeading>about me</SectionsHeading>
      <p
        data-aos="fade-left"
        data-aos-delay="100"
        data-aos-once={true}
        className={cn('about__description')}
      >
        {description}
      </p>
      <HorizontalLine />
    </div>
  );
}
