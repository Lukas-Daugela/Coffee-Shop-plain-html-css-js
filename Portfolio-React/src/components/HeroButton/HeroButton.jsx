import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './HeroButton.module.scss';

const cn = className.bind(styles);

export default function HeroButton({ children }) {
  return <button className={cn('btn')}>{children}</button>;
}

HeroButton.propTypes = {
  children: PropTypes.node.isRequired,
};
