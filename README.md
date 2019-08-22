# inhabiTENT

Inhabitent is a a hipster-style WordPress theme for a camping gear company.

## Technologies Used
The theme is built in php and uses some jQuery for the search element and the media loader in the Category Cards Widget (more on that below).

Gulp was used to automate tasks and Query Monitor was used to help debug WP issues

I used MAMP as a local server for the WordPress Site.

## Installation

1. Download folders into the wp-content/themes folder within the WordPress site of your choice.
2. Within WP site, navigate to Appearance > Themes and activate the Inhabitent Theme.

### Personal Learnings and Notes to Self

Despite the project description, this is not a fixed width site. It is optimized for desktops/browsers above 950px in width. It is responsive but does not have break points and will therefore not display properly below 900px.

I learned a lot on this project including how to write basic php, how to activate features in the function.php file, how to understand the WP Hierarchy and how to build my own plugin.


My Custom Widget: Category Cards

I created a custom widget called Category Card so that the end user can edit the text, image and button text of each category card on the front page. This widget required a media uploader and some manipulation of the plugin that we built in class.

Currently, I'm only able to load the widget in a sidebar and not as a block on a page or post. To work around this, I created a new sidebar specifically to display these widgets and load the sidebar on the front page.

As an end user, to use the Category Card widget: 
1. Navigate to the widgets area on the Dashboard and drag and drop the Category Card widget into the Front Page Widget Display.
2. Fill in the required fields.
3. View the Front Page to ensure it's working.

### Areas I Need to Improve

After building and styling most of the main pages I realized I was re-writing a lot of the same code. In the future I need to take a closer look at the overall site and plan my styling a little better in order to reduce the amount of code written.

Future Developments:
- Add an alt text field to the Category Card Image loader.
- Add break points to make the site more responsive.
- Find a way to load the Category Card widget into a post without a sidebar.
- Refactor CSS to be more reusable throughout the theme.
- Use jQuery to load different headers (currently the different headers are controlled with CSS)
