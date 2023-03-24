import classNames from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './Loaders.module.scss';

const cn = classNames.bind(styles);

export default function Loader({ positionAbsolute, animationClassName }) {
  return (
    <div
      className={cn('loader__container', {
        'loader__container--absolute': positionAbsolute,
      })}
    >
      <span className={cn('loader__animation', animationClassName)}></span>
    </div>
  );
}

Loader.propTypes = {
  animationClassName: PropTypes.string,
  positionAbsolute: PropTypes.bool,
};
