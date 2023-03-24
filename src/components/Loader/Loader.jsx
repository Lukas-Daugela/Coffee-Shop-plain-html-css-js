import classNames from 'classnames/bind';
import React from 'react';

import styles from './Loaders.module.scss';

const cn = classNames.bind(styles);

export default function Loader() {
  return (
    <div className={cn('loader__container')}>
      <span className={cn('loader__animation')}></span>
    </div>
  );
}
