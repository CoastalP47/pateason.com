module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat:{
      options:{
        separator:';',
        stripBanners: true,
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - created: <%= grunt.template.today("mm-dd-yyyy") %> */ \n'
      },
      dist: {
        src: ['js/components/**/*.js'],
        dest: 'js/<%= pkg.name %>.js'
      }
    },
    less:{
      development:{
        options:{
          paths:['assets/less']
        },
        files:{
          "stylesheets/<%= pkg.name %>.css":"less/base.less"
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-less');

  grunt.registerTask('default', ['concat', 'less:development']);

};
