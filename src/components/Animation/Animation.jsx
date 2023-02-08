import 'aos/dist/aos.css';

import Aos from 'aos';
import PropTypes from 'prop-types';
import React, { useEffect } from 'react';

export default function Animation({ animation, children, delay }) {
  useEffect(() => {
    Aos.init();
  }, []);

  return (
    <div data-aos={animation} data-aos-delay={delay} data-aos-once={true}>
      {children}
    </div>
  );
}

Animation.propTypes = {
  children: PropTypes.node.isRequired,
  animation: PropTypes.string.isRequired,
  delay: PropTypes.string,
};
