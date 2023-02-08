import className from 'classnames/bind';
import React from 'react';

import SectionsHeading from '../SectionsHeading';
import SkillCard from '../SkillCard';
import styles from './SectionSkills.module.scss';
import {
  BootstrapIcon,
  CssIcon,
  FigmaIcon,
  GitIcon,
  HtmlIcon,
  JavaScriptIcon,
  ReactIcon,
  SassIcon,
} from './svg';

const cn = className.bind(styles);

export default function SectionSkills() {
  return (
    <div id="skills" className={cn('skills__wrapper')}>
      <SectionsHeading>skills</SectionsHeading>
      <div className={cn('skills')}>
        <SkillCard name="html5">
          <HtmlIcon />
        </SkillCard>
        <SkillCard name="git">
          <GitIcon />
        </SkillCard>
        <SkillCard name="react">
          <ReactIcon />
        </SkillCard>
        <SkillCard name="css3">
          <CssIcon />
        </SkillCard>
        <SkillCard name="sass">
          <SassIcon />
        </SkillCard>
        <SkillCard name="javascript">
          <JavaScriptIcon />
        </SkillCard>
        <SkillCard name="figma">
          <FigmaIcon />
        </SkillCard>
        <SkillCard name="bootstrap">
          <BootstrapIcon />
        </SkillCard>
      </div>
    </div>
  );
}
