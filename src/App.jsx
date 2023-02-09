import React from 'react';

import Hero from './components/Hero';
import SectionAbout from './components/SectionAbout';
import SectionContact from './components/SectionContact';
import SectionPorfolio from './components/SectionPorfolio';
import SectionSkills from './components/SectionSkills';
import PageLayout from './layouts/PageLayout/PageLayout';

function App() {
  return (
    <>
      <PageLayout>
        <Hero />
        <SectionAbout />
        <SectionSkills />
        <SectionPorfolio />
        <SectionContact />
      </PageLayout>
    </>
  );
}

export default App;
