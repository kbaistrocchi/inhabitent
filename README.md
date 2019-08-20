write this as if another developer will be building off of this project.

1. personal analysis of the project

To run Gulp:
1. download gulpfile.js and package.json
2. in Term, from project folder type yarn init
3. skip questions by hitting enter

Personal Learning
A lot!

Created a custom widget for category cards displayed on the font-page. This widget requires a media uploader and some manipulation of the plugin that we built in class.

Currently, I'm only able to load the widget in the sidebar. However, I did find a workaround with another plugin called 'amr shortcode any widget'.

In order to use my custom widget, Category Cards:
1. Drag and drop it into the sidebar.
2. Fill in the required fields.
3. Check to ensure it is displaying properly by visiting a page that loads the sidebar (Journal, Posts or Find Us).
4. Once satisfied, drag the widget out of the sidebar and into the amr sidebar.
5. Navigate to the Gutenberg editor on the page or post that you'd like to use the widget.
6. Add a shortcode element block and type the following:
[do_widget 'widget name']
7. Update/Publish the page and the widget should appear as a category card.
