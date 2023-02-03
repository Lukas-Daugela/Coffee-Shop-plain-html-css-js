import className from 'classnames/bind';
import PropTypes from 'prop-types';
import React from 'react';
import { HashLink } from 'react-router-hash-link';

import styles from './Footer.module.scss';
import { DoubleArrow, EmailIcon, FacebookIcon, InstagramIcon, LinkedinIcon } from './svg';

const cn = className.bind(styles);

export default function Footer({ className }) {
  return (
    <footer className={cn('footer', className)}>
      <div className={cn('footer__container')}>
        <DoubleArrow />
        <HashLink to="#top" smooth>
          <button className={cn('footer__scroll-button')}>back to top</button>
        </HashLink>
        <ul className={cn('footer__icon-list')}>
          <li className={cn('footer__list-items')}>
            <a
              className={cn('footer__links')}
              href="https://www.facebook.com/profile.php?id=100005593037465"
              target="_blank"
              rel="noreferrer"
            >
              <FacebookIcon />
            </a>
          </li>
          <li className={cn('footer__list-items')}>
            <a
              className={cn('footer__links')}
              href="https://www.linkedin.com/in/lukas-daugela/"
              target="_blank"
              rel="noreferrer"
            >
              <LinkedinIcon />
            </a>
          </li>
          <li className={cn('footer__list-items')}>
            <a
              className={cn('footer__links')}
              href="https://www.instagram.com/lukas_daug/"
              target="_blank"
              rel="noreferrer"
            >
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

Footer.propTypes = {
  className: PropTypes.string,
};
