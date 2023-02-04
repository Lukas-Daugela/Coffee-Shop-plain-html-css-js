import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './SectionsHeading.module.scss';

const cn = className.bind(styles);

export default function SectionsHeading({ children }) {
  return (
    <div className={cn('heading__wrapper')}>
      <h2 className={cn('heading__title')}>{children}</h2>
    </div>
  );
}

SectionsHeading.propTypes = {
  children: PropTypes.string.isRequired,
};
