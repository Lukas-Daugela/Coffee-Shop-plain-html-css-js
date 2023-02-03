import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React, { Children } from 'react';

import Footer from '../../components/Footer';
import Header from '../../components/Header';
import styles from './PageLayout.module.scss';

const cn = className.bind(styles);

export default function PageLayout({ children }) {
  return (
    <div className={cn('page-layout')}>
      <Header className={cn('page-layout__header')} />
      <main className={cn('page-layout__main')}>
        {Children.map(children, (child, index) => (
          <section className={cn(index !== 0 ? 'main__section' : 'main__hero')}>
            {child}
          </section>
        ))}
      </main>
      <Footer className={cn('page-layout__footer')} />
    </div>
  );
}

PageLayout.propTypes = {
  children: PropTypes.node,
};
