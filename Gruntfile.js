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
  });

  // Load the plugin that provides the "less" task.
  grunt.loadNpmTasks('grunt-contrib-less');
  
  // Default task(s).
  grunt.registerTask('dev', ['less']);
};