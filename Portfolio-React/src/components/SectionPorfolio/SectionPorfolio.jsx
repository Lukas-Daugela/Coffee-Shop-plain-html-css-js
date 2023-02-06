import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import Button from '../Button/Button';
import SectionsHeading from '../SectionsHeading';
import firstProject from './first-project.jpg';
import styles from './SectionPorfolio.module.scss';

const cn = className.bind(styles);

export default function SectionPorfolio({ children, alt }) {
  return (
    <div id="portfolio" className={cn('portfolio')}>
      <SectionsHeading>projects</SectionsHeading>
      <div className={cn('portfolio__projects')}>
        <div className={cn('project')}>
          <img className={cn('project__image')} src={firstProject} alt={alt} />
          <div className={cn('project__features')}>
            <span className={cn('project__role')}>coded and designed</span>
            <h3 className={cn('project__title')}>Sourcery Academy</h3>
            <p className={cn('project__description')}>Sourcery Akademy website</p>
            <div className={cn('project__button-wrapper')}>
              <Button type={'light'}>demo</Button>
              <Button type={'light'}>src code</Button>
            </div>
          </div>
        </div>
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
