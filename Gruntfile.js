module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {

            sass: {
              files: [
                'css/**/*.scss'
              ],
              tasks: ['sass']
            }

        },
        sass: {                              // Task
            dist: {                            // Target
                files: {                         // Dictionary of files
                    'dist/css/style.min.css': 'css/style.min.scss',       // 'destination': 'source'
                }
            }
        }
    });
    /*
    grunt.event.on('watch', function(action, filepath, target) {
      grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
    }); */

    // 3. Where we tell Grunt we plan to use this plug-in.
    /*grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');

    grunt.loadNpmTasks('grunt-contrib-jshint'); */
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass', 'watch']);
    grunt.registerTask('exit', 'Just exits.', function() { process.exit(0); });

};
