## Time difference shortcode for UM forms

An UM shortcode based on the WordPress function “human_time_diff”. 

### Usage
[my_human_time_diff meta_key="meta_key_time_name" format="%s ago"]

Add the shortcode to your UM form by using the UM form shortcode field.

### Parameter examples
meta_key="meta_key_time_name" use the meta_key you want to get the time difference to current time.

The meta_key value may either be an UNIX time stamp or an user readable format like 2021-07-28 01:26 or any other PHP formatted date/time.

%s is replaced by the time difference to current time text returned by the WordPress function “human_time_diff”.

The default string ( no format parameter used in the shortcode ) for format="%s ago" will give in the UM form the text like: 4 months ago

Any text string can be used like this format="New member since %s ago" and this form field display: New member since 2 weeks ago

### Local languages
Seconds, minutes, hours, days, weeks, months and years are translated according to your WordPress site language setup and you can use your language in creating the format parameter for the shortcode

German example: "Neues Mitglied seit 2 Wochen" by using this parameter string: format="Neues Mitglied seit %s"

French example: "Nouveau membre depuis 2 semaines" and this parameter string: format="Nouveau membre depuis %s"

### Installation
Add this code snippet to your child-theme functions.php file or add to the “Code Snippets” plugin

### Error messages
Nothing is displayed by the shortcode if the meta_key value can't be used as a PHP formatted date/time or is not an UNIX integer timestamp

Missing meta_key parameter will display: Shortcode parameter error
### References
https://developer.wordpress.org/reference/functions/human_time_diff/

https://wordpress.org/plugins/code-snippets/



