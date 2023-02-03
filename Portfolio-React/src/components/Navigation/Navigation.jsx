import className from 'classnames/bind';
import React, { useEffect, useState } from 'react';
import { HashLink } from 'react-router-hash-link';

import styles from './Navigation.module.scss';
import { BurgerIcon, CloseIcon } from './svg';

const cn = className.bind(styles);

export default function Navigation() {
  const [isBurgerOpen, setIsBurgerOpen] = useState(false);

  useEffect(() => {
    return isBurgerOpen
      ? document.body.classList.add(cn('no-scroll'))
      : document.body.classList.remove(cn('no-scroll'));
  }, [isBurgerOpen]);
  return (
    <>
      <button
        className={cn('nav-button')}
        onClick={() => setIsBurgerOpen((prev) => !prev)}
      >
        {isBurgerOpen ? <CloseIcon /> : <BurgerIcon />}
      </button>
      <nav
        className={cn(
          'navigation',
          { 'navigation--expanded': isBurgerOpen },
          { 'navigation--closed': !isBurgerOpen },
        )}
      >
        <ul className={cn('navigation__wrapper')}>
          <li className={cn('navigation__option')}>
            <HashLink
              className={cn('navigation__link')}
              onClick={() => setIsBurgerOpen(false)}
              to="#about"
              smooth
            >
              About me
            </HashLink>
          </li>
          <li className={cn('navigation__option')}>
            <HashLink
              className={cn('navigation__link')}
              onClick={() => setIsBurgerOpen(false)}
              to="#skills"
              smooth
            >
              Skills
            </HashLink>
          </li>
          <li className={cn('navigation__option')}>
            <HashLink
              className={cn('navigation__link')}
              onClick={() => setIsBurgerOpen(false)}
              to="#portfolio"
              smooth
            >
              Portfolio
            </HashLink>
          </li>
          <li className={cn('navigation__option')}>
            <HashLink
              className={cn('navigation__link')}
              onClick={() => setIsBurgerOpen(false)}
              to="#contact"
              smooth
            >
              Contact me
            </HashLink>
          </li>
        </ul>
      </nav>
    </>
  );
}
