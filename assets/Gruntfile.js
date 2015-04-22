module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat:{
      options:{
        separator:';\n',
        stripBanners: true,
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - created: <%= grunt.template.today("mm-dd-yyyy") %> */ \n'
      },
      components: {
        src: ['js/components/functions/**/*.js', 'js/components/base.js'],
        dest: 'js/<%= pkg.name %>.js'
      },
      libs: {
        src: ['js/lib/*.js'],
        dest: 'js/<%= pkg.name %>_lib.js'
      }
    },
    less:{
      development:{
        options:{
          paths:['assets/less'],
          compress: true
        },
        files:{
          "stylesheets/<%= pkg.name %>.css":"less/base.less"
        }
      }
    },
    uglify: {
      lib: {
        files: {
          'js/pateason_lib.min.js': ['js/pateason_lib.js']
        }
      },
      theme: {
        files: {
          'js/pateason.min.js': ['js/pateason.js']
        }
      }
    }


  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');


  grunt.registerTask('default', ['concat:components', 'concat:libs', 'less:development', 'uglify']);

};
