import className from 'classnames/bind';
import React from 'react';

import SkillCard from '../SkillCard';
import styles from './SkillsSection.module.scss';

const cn = className.bind(styles);

export default function SkillsSection() {
  return (
    <div id="skills" className={cn('skills')}>
      <SkillCard name="html">{/* children */}</SkillCard>
    </div>
  );
}
