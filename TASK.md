# Task Description: Create a Template Wizard with Vue, Inertia.js, and Laravel Package

- [Getting Started](README.md)
- [MDB4 Vue Pro](https://github.com/FmTod/mdb4-vue-pro)
- [MyListerHub Core](https://github.com/FmTod/mylisterhub-core-package)
- [Guidelines](https://github.com/FmTod)

## Objective
The objective of this task is to develop a Template Wizard as a self-contained Laravel package. 
This wizard will enable users to select a design template and customize it with predefined colors, all within a modal window.
The selected template should be inserted into an existing template editor using an empty Vue event. 
The frontend should use MDBootstrap (Vue) for UI components.

## Template Requirements

### Guidelines
- The tamplates should not have any active content (Javascript)
- The character count should not exceed 500000
- External links/resources (i.e. CSS file) should use HTTPS
- Templates should consist only of CSS and HTML

### Resources
- [Figma Project](https://www.figma.com/file/sJHa8HdMgY19xWKAjRapaZ/Ebay?type=design&node-id=246%3A18&mode=design&t=9ekduHTlZDwLXaEw-1)

## Frontend Requirements

### Technology Stack
- Vue.js v2.7 for the frontend (Typescript, Setup Script, Composition API).
- Inertia.js for seamless integration with Laravel.
- MDBootstrap (Vue) for UI components.

### Modal Window
- Create a modal window that opens when the user triggers the Template Wizard.

### Design Selection
- Provide a list of design templates for the user to choose from.
- Allow the user to preview each design template.
- Once a design is selected, display a preview of the chosen design.

### Color Selection
- Offer a predefined set of colors for the user to choose from.
- Allow the user to select primary and secondary colors from the list.
- Display a preview of the template with the selected colors applied.

### Empty Vue Event
- Leave an empty Vue event that can be triggered to insert the selected template into the template editor in the main application.

## Backend Requirements

### Technology Stack
- Laravel v10 for the backend.

### Self-contained Package
- Develop a self-contained Laravel package to manage the Template Wizard functionality.
- Ensure that the package can be easily integrated into the main Laravel application without requiring access to its source code.

### API Endpoints
- Create necessary API endpoints to retrieve design templates and predefined colors.
- Implement endpoints to save the user's design choices.

## General Requirements

### User Experience
- Ensure a smooth and intuitive user experience throughout the Template Wizard process.

### Validation and Error Handling
- Implement proper validation for user selections.
- Handle errors gracefully and provide meaningful error messages.

### Documentation
- Document the implementation and usage of the Template Wizard package for both frontend and backend.

### Testing
- Write unit tests to verify the functionality of the Template Wizard package.

### Security
- Implement security best practices to protect against potential vulnerabilities within the package.

##  Deliverables
- Templates based on the provided Figma project
- Fully functional Template Wizard package that can be easily integrated into the main Laravel application.
- Documentation detailing the setup and usage of the Template Wizard package.
- Unit tests to verify the functionality of the Template Wizard package.

## Additional Notes

- The main application's source code will not be shared. Instead, you should provide clear instructions on how to trigger the empty Vue event for inserting the selected template into the editor.

- Collaborate with the existing development team to ensure a seamless integration process.

- Regularly communicate progress and any challenges faced during the development process.

## Success Criteria

The Template Wizard package should be successfully developed and integrated into the main Laravel application. Users should be able to select design templates and colors within the modal window and trigger the empty Vue event to insert the selected template into the template editor. The entire process should be user-friendly, secure, well-documented, and easily integrated into the main application.
