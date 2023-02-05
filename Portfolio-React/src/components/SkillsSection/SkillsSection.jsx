import className from 'classnames/bind';
import React from 'react';

import SkillCard from '../SkillCard';
import styles from './SkillsSection.module.scss';
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

export default function SkillsSection() {
  return (
    <div id="skills" className={cn('skills')}>
      <SkillCard name="html">
        <HtmlIcon />
      </SkillCard>
      <SkillCard name="git">
        <GitIcon />
      </SkillCard>
      <SkillCard name="react">
        <ReactIcon />
      </SkillCard>
      <SkillCard name="css">
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
  );
}
