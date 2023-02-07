import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import Navigation from '../Navigation';
import styles from './Header.module.scss';

const cn = className.bind(styles);

export default function Header({ className }) {
  return (
    <header className={cn('header', className)}>
      {/* In future you can insert Logo here */}
      <Navigation />
    </header>
  );
}

Header.propTypes = {
  className: PropTypes.string,
};
