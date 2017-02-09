module.exports = function(grunt) {


  require('load-grunt-tasks')(grunt);
  // Configuration de Grunt
  grunt.initConfig({

    jshint: {
      all: 'js/global.js',
    },

    uglify: {
      options: {
        mangle: false
      },
      dist: {
        files: {
          'js/global.min.js': 'js/global.js'
        }
      }
    },

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'compressed',
          sourcemap: 'none'
        },
        files: {                         // Dictionary of files
          'style.css': 'scss/style.scss'     // 'destination': 'source'
        }
      }
    },

    watch: {
      js: {
        files: 'js/global.js',
        tasks: ['jshint', 'uglify'],
        options: {
          spawn: false,
        },
      },
      css: {
        files: ['scss/*.scss'],
        tasks: 'sass',
        options: {
          spawn: false,
        },
      }
    },

    sprite:{
      all: {
        src: 'images/*.png',
        dest: 'images/sprite.png',
        destCss: 'scss/_sprites.scss',
        padding: 20
      }
    }

  })

  // Définition des tâches Grunt
  grunt.registerTask('default', ['jshint', 'sass', 'sprite', 'uglify']);

}
