import className from 'classnames/bind';
import React from 'react';

import styles from './SkillsSection.module.scss';

const cn = className.bind(styles);

export default function SkillsSection() {
  return (
    <div id="skills" className={cn('skills')}>
      {/* Skill svg */}
      <p className={cn('skills__name')}>html5</p>
      <p className={cn('skills__name')}>css</p>
      <p className={cn('skills__name')}>javascript</p>
      <p className={cn('skills__name')}>scss</p>
      <p className={cn('skills__name')}>react</p>
    </div>
  );
}
