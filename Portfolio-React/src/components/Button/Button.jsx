import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './Button.module.scss';

const cn = className.bind(styles);

export default function Button({ children }) {
  return <button className={cn('btn')}>{children}</button>;
}

Button.propTypes = {
  children: PropTypes.node.isRequired,
};
