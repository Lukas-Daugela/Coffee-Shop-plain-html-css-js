import className from 'classnames/bind';
import React from 'react';

import styles from './AboutSection.module.scss';

const cn = className.bind(styles);

export default function AboutSection() {
  return (
    <div className={cn('about')}>
      <h2 className={cn('about__title')}>about me</h2>
      <p className={cn('about__description')}>tekstas</p>
    </div>
  );
}
