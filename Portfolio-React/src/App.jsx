// import className from 'classnames/bind';
import React from 'react';
import { useState } from 'react';

import AboutSection from './components/AboutSection/AboutSection';
import ContactForm from './components/ContactForm';
import Hero from './components/Hero';
import SectionPorfolio from './components/SectionPorfolio/SectionPorfolio';
import SkillsSection from './components/SkillsSection';
import PageLayout from './layouts/PageLayout/PageLayout';
import { formTexts } from './texts';
// import styles from './layouts/PageLayout/PageLayout.module.scss';

// const cn = className.bind(styles);

function App() {
  const { isSubmited, setIsSubmited } = useState(false);

  const handleIsSubmited = () => {
    setIsSubmited(true);
  };
  return (
    <div className="app">
      <PageLayout>
        <Hero />
        <AboutSection />
        <SkillsSection />
        <SectionPorfolio />
        {!isSubmited && <ContactForm onSubmit={handleIsSubmited} texts={formTexts} />}
      </PageLayout>
    </div>
  );
}

export default App;
