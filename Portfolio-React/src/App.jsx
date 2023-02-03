import React from 'react';

import Button from './components/Button';
import Footer from './components/Footer/Footer';
import Navigation from './components/Navigation/Navigation';

function App() {
  return (
    <div className="app">
      <Navigation />
      <Button>Download cv</Button>
      <Footer />
    </div>
  );
}

export default App;
