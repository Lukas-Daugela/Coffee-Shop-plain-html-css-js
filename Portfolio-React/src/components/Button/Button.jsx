import className from 'classnames/bind';
import React from 'react';

import styles from './Button.module.scss';

const cn = className.bind(styles);

export default function Button() {
  return <div className={cn('divas')}>Button</div>;
}
