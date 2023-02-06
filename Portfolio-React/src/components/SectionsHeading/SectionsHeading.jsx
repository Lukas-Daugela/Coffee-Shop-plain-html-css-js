import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './SectionsHeading.module.scss';

const cn = className.bind(styles);

export default function SectionsHeading({ children, type }) {
  return (
    <div className={cn('heading', type && `heading--${type}`)}>
      <h2 className={cn('heading__title', type && `title--${type}`)}>{children}</h2>
    </div>
  );
}

SectionsHeading.propTypes = {
  children: PropTypes.string.isRequired,
  type: PropTypes.string,
};
