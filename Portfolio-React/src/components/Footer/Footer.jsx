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
        <ul>
          <li>
            <a href="">
              <FacebookIcon />
            </a>
          </li>
          <li>
            <a href="">
              <LinkedinIcon />
            </a>
          </li>
          <li>
            <a href="">
              <InstagramIcon />
            </a>
          </li>
          <li>
            <a href="">
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
