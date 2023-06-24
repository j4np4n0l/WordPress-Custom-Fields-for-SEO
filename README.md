# WordPress-Custom-Fields-for-SEO

Add SEO tags (meta title, meta description, and keywords) using custom fields in WordPress

Here's how you can add the custom fields:

1. Edit the desired page or post in WordPress admin.

2. In the editing screen, locate the "Custom Fields" box.

3. Add the following custom fields:
Field Name: <code>custom_meta_title</code>, Field Value: the desired meta title
Field Name: custom_meta_description, Field Value: the desired meta description
Field Name: custom_meta_keywords, Field Value: the desired meta keywords (separated by commas)

4. Update or publish the page or post.

Now, when the page or post is viewed, the code will retrieve the values from the custom fields (custom_meta_title, custom_meta_description, custom_meta_keywords) instead of the default post title, excerpt, and manually defined keywords.

Please note that you should be cautious while modifying template files and working with custom fields. Make sure to test and validate the output to ensure the meta tags are correctly rendered in the HTML header.
