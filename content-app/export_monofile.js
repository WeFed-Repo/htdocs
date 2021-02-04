const fs = require('fs-extra');
const concat = require('concat');

concatenate = async () =>{
    const files = [
        './dist/content-app/runtime.js',
        './dist/content-app/polyfills.js',
        './dist/content-app/main.js'
      ];

      await concat(files, './dist/content-app/content-app.js');
}
concatenate();