'use strict';

module.exports = function (grunt) {

  // load all grunt tasks
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    stylus: {
      compile: {
        options: {
          paths: ['src/**/*']
        },
        files: {
          'dist/app.css': 'src/app.styl'
        }
      }
    },

    jade: {
      compile: {
        options: {
          client: false,
          pretty: false,
          data: function (dest, src) {
            var companies = require('fs').readFileSync(
              __dirname+'/src/companies.json',
              {encoding: 'utf-8'}
            );
            return { companies: JSON.parse(companies) }
          }
        },
        files: [ {
          cwd: 'src/',
          src: ['index.jade', 'companies/**/*'],
          dest: 'dist',
          expand: true,
          ext: '.html'
        } ]
      }
    },

    copy: {
      main: {
        files: [
          {
            expand: true,
            flatten: true,
            src: [
              'src/CNAME',
              'src/**/*.jpg',
              'src/**/*.png',
              'src/*.ico',
              'src/*.html'
              ],
            dest: 'dist/',
            filter: 'isFile'}
        ]
      },
      blog: {
        files: [
          {
            expand: true,
            flatten: false,
            src: [
              'blog/**/*.html',
              ],
            dest: 'dist/',
            filter: 'isFile'}
        ]
      }
    },

    watch: {
      styles: {
        files: ['src/**/*.styl'],
        tasks: ['stylus', 'jade']
      },
      html: {
        files: ['src/**/*.jade'],
        tasks: ['jade']
      }
    },

    'gh-pages': {
      options: {
        base: 'dist',
        clone: 'node_modules/.tmp/'
      },
      src: ['**']
    }
  });

  grunt.registerTask('build',   ['copy', 'stylus', 'jade']);
  grunt.registerTask('publish', ['build', 'gh-pages']);
  grunt.registerTask('default', ['build', 'watch']);
};
