/*global module: false */
module.exports = function(grunt) {

	// Project configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		uglify: {
			options: {
				//mangle: false, // Don't change variable and function names
				banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - ' +
						'<%= grunt.template.today("yyyy-mm-dd") %>  - ' +
						'Copyright <%= pkg.author %> */\n'
			},
			uno: {
				files: {
					'js/unoSlider.min.js': ['js/unoSlider.js']
				}
			}
		},
		jshint: {
			options: {
				curly: true,
				eqeqeq: true,
				eqnull: true,
				browser: true,
				globals: {
					jQuery: true
				}
			},
			files: ['js/unoSlider.js']
		},
		watch: {
			scripts: {
				options: {
					interrupt: true
				},
				files: ['js/unoSlider.js'],
				tasks: ['jshint']
			},
			css: {
				files: ['css/unoSlider.css'],
				tasks: ['cssmin']
			}
		},
		csslint: {
			uno: {
				options: {
					import: 2
				},
				src: ['css/unoSlider.css']
			},
		},
		cssmin: {
			uno: {
				files: [
					{
						src: 'css/unoSlider.css',
						dest: 'css/unoSlider.min.css'
					}
				]

			}
		}
	});

	// Load the plugins
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-csslint');

	// Development
	grunt.registerTask('dev', 'Development build', function(args) {
		grunt.task.run([
			'jshint', // Detect errors in JS
			'csslint' // Detect errors in CSS
		]);
	});

	// Production
	grunt.registerTask('prod', 'Production build', function(args) {
		grunt.task.run([
			'jshint',  // Detect errors in JS
			'uglify',  // Minify JS
			'csslint', // Detect errors in CSS
			'cssmin'   // Minify CSS
		]);
	});

	// Default task (Force to development build)
	grunt.registerTask('default', 'dev');
};
