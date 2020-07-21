import React, { useState, useEffect } from 'react';
import { Button } from 'reactstrap';
const themeStyle = {
  dark: 'dark',
  light: 'light'
};


const WrapperTheme= (props) => {
    const [style, setStyle] = useState(() => {
      if (typeof window !== 'undefined') {
        const val = localStorage.getItem('theme');
        return val ? JSON.parse(val) : themeStyle.light;
      }
      return themeStyle.light;
    });
  
    useEffect(() => {
      if (typeof window !== 'undefined') {
        localStorage.setItem('theme', JSON.stringify(style));
      }
    }, [style]);
  
    const toggleStyle= () => {
      setStyle(style === themeStyle.light ? themeStyle.dark : themeStyle.light);
    };
  
    return (
        <div className= {"app" + " " + style }>
           <Button className="style-type" onClick={ toggleStyle } role="button">cambia stile</Button>
           {props.children}
        </div>
      
    );
  };
  
  export default WrapperTheme;