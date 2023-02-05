// import className from 'classnames/bind';
import React from 'react';

import AboutSection from './components/AboutSection/AboutSection';
import Hero from './components/Hero';
import SectionPorfolio from './components/SectionPorfolio/SectionPorfolio';
import SkillsSection from './components/SkillsSection';
import PageLayout from './layouts/PageLayout/PageLayout';
// import styles from './layouts/PageLayout/PageLayout.module.scss';

// const cn = className.bind(styles);

function App() {
  return (
    <div className="app">
      <PageLayout>
        <Hero />
        <AboutSection />
        <SkillsSection />
        <SectionPorfolio />
      </PageLayout>
    </div>
  );
}

export default App;
