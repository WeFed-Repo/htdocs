const sass = require('node-sass');
//require('load-grunt-tasks')(grunt);

module.exports = function(grunt) {
  grunt.initConfig({
    sass: {
      dist: {
        files: {
          './fe/css/priv_base.css': './fe/sass/priv_base.scss',
          './fe/css/priv_generic.css': './fe/sass/priv_generic.scss'
        }
      }
    },
    watch: {
      scripts: {
        files: ['**/*.scss'],
        tasks: ['sass:dist'],
        options: {
          spawn: false,
        },
      },
    },
  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);
};
