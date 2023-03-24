import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';

import Button from '../Button';
import styles from './MyProject.module.scss';

const cn = className.bind(styles);

export default function MyProject({ information }) {
  const { thumbnail, role, title, description, demoUrl, repositoryUrl } = information;

  return (
    <div className={cn('project')}>
      <img className={cn('project__image')} src={thumbnail} alt="" />
      <div className={cn('project__features')}>
        <span className={cn('project__role')}>{role}</span>
        <h3 className={cn('project__title')}>{title}</h3>
        <p className={cn('project__description')}>{description}</p>
        <div className={cn('project__button-wrapper')}>
          <a target="_blank" href={demoUrl} rel="noreferrer">
            <Button type={'light'}>demo</Button>
          </a>
          <a target="_blank" href={repositoryUrl} rel="noreferrer">
            <Button type={'light'}>src code</Button>
          </a>
        </div>
      </div>
    </div>
  );
}

MyProject.propTypes = {
  information: PropTypes.object.isRequired,
};
