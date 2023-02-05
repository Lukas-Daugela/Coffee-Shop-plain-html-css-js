import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import SectionsHeading from '../SectionsHeading';
import firstProject from './first-project.jpg';
import styles from './SectionPorfolio.module.scss';

const cn = className.bind(styles);

export default function SectionPorfolio({ children, alt }) {
  return (
    <div className={cn('portfolio')}>
      <SectionsHeading>projects</SectionsHeading>
      <div className={cn('portfolio__projects')}>
        <img src={firstProject} alt={alt} />
        <img src={firstProject} alt={alt} />
        {children}
      </div>
    </div>
  );
}

SectionPorfolio.propTypes = {
  children: PropTypes.node,
  alt: PropTypes.string,
};
