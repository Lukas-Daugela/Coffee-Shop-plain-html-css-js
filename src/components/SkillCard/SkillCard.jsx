import Aos from 'aos';
import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React, { useEffect } from 'react';

import styles from './SkillCard.module.scss';

const cn = className.bind(styles);

export default function SkillCard({ children, name }) {
  useEffect(() => {
    Aos.init();
  }, []);
  return (
    <figure
      data-aos="fade-right"
      data-aos-delay="100"
      data-aos-once={true}
      className={cn('card')}
    >
      {children}
      <figcaption className={cn('card__name')}>{name}</figcaption>
    </figure>
  );
}

SkillCard.propTypes = {
  children: PropTypes.node.isRequired,
  name: PropTypes.string.isRequired,
};
