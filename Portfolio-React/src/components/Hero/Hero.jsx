import className from 'classnames/bind';
import React from 'react';

import HeroButton from '../HeroButton/HeroButton';
import styles from './Hero.module.scss';
import HeroImage from './image/hero-image.png';
import { EmailIcon, GitIcon, LinkedinIcon } from './svg';

const cn = className.bind(styles);

export default function Hero() {
  return (
    <div className={cn('hero')}>
      <img className={cn('hero__image')} src={HeroImage} alt="" />
      <div className={cn('hero__text-wrapper')}>
        <div className={cn('hero__text')}>
          <p className={cn('text__greeting')}>Hi, I am</p>
          <p className={cn('text__name')}>Lukas Daugėla</p>
          <p className={cn('text__profession')}>Front-end Web Developer</p>
        </div>
        <div className={cn('hero__icons-wrapper')}>
          <HeroButton>
            <EmailIcon />
          </HeroButton>
          <HeroButton>
            <GitIcon />
          </HeroButton>
          <HeroButton>
            <LinkedinIcon />
          </HeroButton>
        </div>
      </div>
    </div>
  );
}
