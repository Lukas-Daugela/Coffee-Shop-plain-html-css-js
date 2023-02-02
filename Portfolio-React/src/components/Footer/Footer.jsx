import className from 'classnames/bind';
import React from 'react';

import styles from './Footer.module.scss';
import { DoubleArrow, EmailIcon, FacebookIcon, InstagramIcon, LinkedinIcon } from './svg';

const cn = className.bind(styles);

export default function Footer() {
  return (
    <footer className={cn('footer')}>
      <div className={cn('footer__container')}>
        <DoubleArrow />
        <button className={cn('footer__scroll-button')}>back to top</button>
        <ul className={cn('footer__icon-list')}>
          <li className={cn('footer__list-items')}>
            <a className={cn('footer__links')} href="">
              <FacebookIcon />
            </a>
          </li>
          <li className={cn('footer__list-items')}>
            <a className={cn('footer__links')} href="">
              <LinkedinIcon />
            </a>
          </li>
          <li className={cn('footer__list-items')}>
            <a className={cn('footer__links')} href="">
              <InstagramIcon />
            </a>
          </li>
          <li className={cn('footer__list-items')}>
            <a className={cn('footer__links')} href="">
              <EmailIcon />
            </a>
          </li>
        </ul>
        <p className={cn('footer__copyright')}>
          &copy; {new Date().getFullYear()} Lukas Daugėla
        </p>
      </div>
    </footer>
  );
}
