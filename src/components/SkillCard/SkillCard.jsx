import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import styles from './SkillCard.module.scss';

const cn = className.bind(styles);

export default function SkillCard({ children, name }) {
  return (
    <figure className={cn('card')}>
      {children}
      <figcaption className={cn('card__name')}>{name}</figcaption>
    </figure>
  );
}

SkillCard.propTypes = {
  children: PropTypes.node.isRequired,
  name: PropTypes.string.isRequired,
};
