# WordPress-Custom-Fields-for-SEO

Add SEO tags (meta title, meta description, and keywords) using custom fields in WordPress

Here's how you can add the custom fields:

1. Place the code from <b><a href="https://github.com/j4np4n0l/WordPress-Custom-Fields-for-SEO/blob/main/WordPress%20Custom%20Fields%20for%20SEO.php" target="_blank">WordPress Custom Fields for SEO.php</a></b> file in Child Theme's <b>functions.php</b>

2. Edit the desired page or post in WordPress admin.

3. In the editing screen, locate the "Custom Fields" box.

4. Add the following custom fields:
<ul>
<li>Field Name: <code>custom_meta_title</code>, Field Value: the desired <b>meta title</b></li>
<li>Field Name: <code>custom_meta_description</code>, Field Value: the desired <b>meta description</b></li>
<li>Field Name: <code>custom_meta_keywords</code>, Field Value: the desired <b>meta keywords</b> <em>(separated by commas)</em></li>
</ul>

5. Update or publish the page or post.

Now, when the page or post is viewed, the code will retrieve the values from the custom fields (<b>custom_meta_title, custom_meta_description, custom_meta_keywords</b>) instead of the default post title, excerpt, and manually defined keywords.

Please note that you should be cautious while modifying template files and working with custom fields. Make sure to test and validate the output to ensure the meta tags are correctly rendered in the HTML header.
