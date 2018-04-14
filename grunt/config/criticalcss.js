module.exports = function(grunt) {

	grunt.config('criticalcss', {
		default : {
			options: {
				url: 'http://artlantis.test',
				width: 1440,
				height: 900,
				outputfile: '<%= project.styles_critical %>/default.css',
				filename: '<%= project.styles %>/main.css',
				forceInclude: [], // An array of selectors that you want to guarantee will make it from the CSS file into your CriticalCSS output.
				buffer: 800*1024,
			},
		},
		home : {
			options: {
				url: 'http://artlantis.test',
				width: 1440,
				height: 900,
				outputfile: '<%= project.styles_critical %>/home.css',
				filename: '<%= project.styles %>/main.css',
				forceInclude: [], // An array of selectors that you want to guarantee will make it from the CSS file into your CriticalCSS output.
				buffer: 800*1024,
			},
		},
		base : {
			options: {
				url: 'http://artlantis.test/base',
				width: 1440,
				height: 900,
				outputfile: '<%= project.styles_critical %>/base.css',
				filename: '<%= project.styles %>/main.css',
				forceInclude: [], // An array of selectors that you want to guarantee will make it from the CSS file into your CriticalCSS output.
				buffer: 800*1024,
			},
		},
		about : {
			options: {
				url: 'http://artlantis.test/about',
				width: 1440,
				height: 900,
				outputfile: '<%= project.styles_critical %>/about.css',
				filename: '<%= project.styles %>/main.css',
				forceInclude: [], // An array of selectors that you want to guarantee will make it from the CSS file into your CriticalCSS output.
				buffer: 800*1024,
			},
		},
		projects : {
			options: {
				url: 'http://artlantis.test/projects',
				width: 1440,
				height: 900,
				outputfile: '<%= project.styles_critical %>/projects.css',
				filename: '<%= project.styles %>/main.css',
				forceInclude: [], // An array of selectors that you want to guarantee will make it from the CSS file into your CriticalCSS output.
				buffer: 800*1024,
			},
		},
		project : {
			options: {
				url: 'http://artlantis.test/project/asr-dialogue-driven-website',
				width: 1440,
				height: 900,
				outputfile: '<%= project.styles_critical %>/project.css',
				filename: '<%= project.styles %>/main.css',
				forceInclude: [], // An array of selectors that you want to guarantee will make it from the CSS file into your CriticalCSS output.
				buffer: 800*1024,
			},
		},
	});

};
