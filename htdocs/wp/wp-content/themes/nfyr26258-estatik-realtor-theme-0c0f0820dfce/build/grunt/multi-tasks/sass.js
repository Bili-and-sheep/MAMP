'use strict';

module.exports = {
    options: {
        sourcemap: 'none', // prevent output of sourcemap file
    },
    plugin: {
        files: {
            '<%= path %>/css/style.css': 'stylesheets/style.scss', // outputs the front end theme
        }
    },
};
