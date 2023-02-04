// import className from 'classnames/bind';
import React from 'react';

import Hero from './components/Hero';
import PageLayout from './layouts/PageLayout/PageLayout';
// import styles from './layouts/PageLayout/PageLayout.module.scss';

// const cn = className.bind(styles);

function App() {
  return (
    <div className="app">
      <PageLayout>
        <Hero />
      </PageLayout>
    </div>
  );
}

export default App;
