// import className from 'classnames/bind';
import React from 'react';

import AboutSection from './components/AboutSection/AboutSection';
import Hero from './components/Hero';
import SectionPorfolio from './components/SectionPorfolio/SectionPorfolio';
import SkillsSection from './components/SkillsSection';
import TextArea from './components/TextArea/TextArea';
import TextInput from './components/TextInput/TextInput';
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
        <TextInput
          name="firstName"
          autoComplete="given-name"
          placeholder={'Add you name'}
          required
          error="Required"
        />
        <TextArea
          name="firstName"
          autoComplete="given-name"
          placeholder={'Add you name'}
          required
        />
      </PageLayout>
    </div>
  );
}

export default App;
