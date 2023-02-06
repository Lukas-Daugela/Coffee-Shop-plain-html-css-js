import className from 'classnames/bind';
import React from 'react';

import MyProject from '../MyProject';
import SectionsHeading from '../SectionsHeading';
import styles from './SectionPorfolio.module.scss';
import { projectInformation } from './texts';

const cn = className.bind(styles);

export default function SectionPorfolio() {
  const numberOfProjects = projectInformation.length;

  return (
    <div id="portfolio" className={cn('portfolio')}>
      <SectionsHeading type={'light'}>projects</SectionsHeading>
      <div
        className={cn(
          'portfolio__projects',
          numberOfProjects > 1 && 'portfolio__multiple-projects',
        )}
      >
        {projectInformation.map((information, index) => (
          <MyProject key={index} information={information} />
        ))}
      </div>
    </div>
  );
}
