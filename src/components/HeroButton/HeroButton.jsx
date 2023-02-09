import Aos from 'aos';
import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React, { useEffect } from 'react';
import { HashLink } from 'react-router-hash-link';

import styles from './HeroButton.module.scss';

const cn = className.bind(styles);

export default function HeroButton({ children, hashLink, link }) {
  let button;

  useEffect(() => {
    Aos.init();
  }, []);

  if (hashLink) {
    button = (
      <HashLink
        data-aos="fade-right"
        data-aos-delay="100"
        data-aos-once={true}
        to={hashLink}
        smooth
      >
        <button className={cn('btn')}>{children}</button>
      </HashLink>
    );
  } else {
    button = (
      <a
        data-aos="fade-right"
        data-aos-delay="100"
        data-aos-once={true}
        href={link}
        target="_blank"
        rel="noreferrer"
      >
        <button className={cn('btn')}>{children}</button>
      </a>
    );
  }
  return <>{button}</>;
}

HeroButton.propTypes = {
  children: PropTypes.node.isRequired,
  hashLink: PropTypes.string,
  link: PropTypes.string,
};
