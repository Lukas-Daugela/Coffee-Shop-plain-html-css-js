import className from 'classnames/bind';
import React from 'react';

import SectionsHeading from '../SectionsHeading';
import styles from './AboutSection.module.scss';

const cn = className.bind(styles);

export default function AboutSection() {
  return (
    <div className={cn('about')}>
      <SectionsHeading>about me</SectionsHeading>
      <p className={cn('about__description')}>tekstas</p>
    </div>
  );
}
