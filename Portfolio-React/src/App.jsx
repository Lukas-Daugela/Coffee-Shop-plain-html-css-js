import className from 'classnames/bind';
import React from 'react';

import PageLayout from './layouts/PageLayout/PageLayout';
import styles from './layouts/PageLayout/PageLayout.module.scss';

const cn = className.bind(styles);

function App() {
  return (
    <div className="app">
      <PageLayout>
        <div className={cn('hero')}>This is Hero</div>
        <div className={cn('sections')}>This is sections</div>
        <div className={cn('sections')}>This is sections</div>
        <div className={cn('sections')}>This is sections</div>
      </PageLayout>
    </div>
  );
}

export default App;
