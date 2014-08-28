module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      development: {
        options: {
          paths: ["web/assets/less"]
        },
        files: {
          "web/assets/css/main.css": "web/assets/less/main.less",
        }
      },
    },
    
    bowercopy: {
        options: {
            srcPrefix: 'bower_components',
            destPrefix: 'web/assets'
        },
        scripts: {
            files: {
                'js/jquery.js': 'jquery/dist/jquery.js',
                'js/bootstrap.js': 'bootstrap/dist/js/bootstrap.js'
            }
        },
        stylesheets: {
            files: {
                'css/bootstrap.css': 'bootstrap/dist/css/bootstrap.css',
                'css/font-awesome.css': 'font-awesome/css/font-awesome.css'
            }
        },
        fonts: {
            files: {
                'fonts': 'font-awesome/fonts'
            }
        }
    }    
    
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-bowercopy');
  
  // Default task(s).
  grunt.registerTask('dev', ['less', 'bowercopy']);
  grunt.registerTask('dev-watch', ['less']);
};