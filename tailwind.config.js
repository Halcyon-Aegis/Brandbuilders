module.exports = {
    // Specify the paths to the files where Tailwind CSS classes are used
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/@themesberg/flowbite/**/*.js"
    ],
    theme: {
        // Optionally extend Tailwind CSS with custom styles
        extend: {
            // Add your customizations here
            colors:{
              'primary-blue':'#166AEA',
              'other-blue':'#4286EE'
                
            },
        },
    },
    // Specify Tailwind CSS plugins
    plugins: [
        // Include the Flowbite plugin
        require('@themesberg/flowbite/plugin')
    ],
}
