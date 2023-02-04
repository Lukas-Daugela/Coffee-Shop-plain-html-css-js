import className from 'classnames/bind';
import React from 'react';

import SectionsHeading from '../SectionsHeading';
import styles from './AboutSection.module.scss';
import { text } from './text';

const cn = className.bind(styles);

const { description } = text;

export default function AboutSection() {
  return (
    <div className={cn('about')}>
      <SectionsHeading>about me</SectionsHeading>
      <p className={cn('about__description')}>{description}</p>
    </div>
  );
}
