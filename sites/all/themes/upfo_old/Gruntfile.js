module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.initConfig({
        uglify: {
            my_target: {
                files: {
                    'js/*.js' : ['components/js/*.js']
                } //files
            } //my_target
        },//uglify
        compass: {
            options: {
                config: 'config/compass.rb'                        
                } //options
        },//compass
        
        svgmin: {
            options: {
                    plugins: [
                            { removeViewBox: false }, 
                            //{ removeUselessStrokeAndFill: false }
                    ]
            },
        },//svgmin
        watch: {
            options: {livereload: true },
            svg: {
                files: ['*.svg'],
                tasks: ['svgmin']
            }, //svg
            scripts: {
                files: ['js/*.js'],
                tasks: ['uglify']
            }, //scripts
            compass: {
                files: ['scss/**/*.scss'],
                tasks: ['compass']
              },
          } //watch

    })//initConfig
    var target = grunt.option('target') || 'dev';
    grunt.registerTask('deploy', ['compass:' + target]);
    grunt.registerTask('default', 'watch');
}//exports