import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';
import { HashLink } from 'react-router-hash-link';

import styles from './HeroButton.module.scss';

const cn = className.bind(styles);

export default function HeroButton({ children, hashLink, link }) {
  let button;

  if (hashLink) {
    button = (
      <HashLink to={hashLink} smooth>
        <button className={cn('btn')}>{children}</button>
      </HashLink>
    );
  } else {
    button = (
      <a href={link} target="_blank" rel="noreferrer">
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
