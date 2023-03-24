import className from 'classnames/bind';
import React, { useState } from 'react';
import { LazyLoadImage } from 'react-lazy-load-image-component';

import HeroButton from '../HeroButton';
import Loader from '../Loader/Loader';
import styles from './Hero.module.scss';
import HeroImage from './image/hero-image.png';
import { EmailIcon, GitIcon, LinkedinIcon } from './svg';

const cn = className.bind(styles);

export default function Hero() {
  const [isLoaded, setLoaded] = useState(false);
  const [isLoadStarted, setLoadStarted] = useState(true);

  const handleLoad = () => {
    setLoaded(true);
  };

  const handleLoadStarted = () => {
    setLoadStarted(true);
  };

  return (
    <div className={cn('hero')}>
      <div className={cn('hero__image-container')}>
        <LazyLoadImage
          src={HeroImage}
          onLoad={handleLoad}
          beforeLoad={handleLoadStarted}
          className={cn('hero__image')}
        />
        {!isLoaded && isLoadStarted && <Loader animationClassName={cn('hero__loader')} />}
      </div>
      <div className={cn('hero__text-wrapper')}>
        <div className={cn('hero__text')}>
          <p className={cn('text__greeting')}>Hi, I am</p>
          <p className={cn('text__name')}>Lukas Daugėla</p>
          <p className={cn('text__profession')}>Front-end Web Developer</p>
        </div>
        <div className={cn('hero__icons-wrapper')}>
          <HeroButton hashLink={'#contact'}>
            <EmailIcon />
          </HeroButton>
          <HeroButton link={'https://github.com/Lukas-Daugela'}>
            <GitIcon />
          </HeroButton>
          <HeroButton link={'https://www.linkedin.com/in/lukas-daugela/'}>
            <LinkedinIcon />
          </HeroButton>
        </div>
      </div>
    </div>
  );
}
