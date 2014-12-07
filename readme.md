Champion Johnny Custom Renderer
===============================
Custom Renderer for the excellent AOE TemplateHints extension created for Johnny.

Facts
-----
- version: 1.0.0
- extension key: Champion_Johnny

Description
-----------
This extension is a custom renderer for the AOE TemplateHints extension. The following are the standout features of this renderer:

 - Displays class name or template in a similar style to the core template hints
 - Uses the AOE template hints convention for block cached blocks and the on-page hints
 - Supports remote call for the class name or template
 - Instead of Ajax, appends a hidden iframe to the bottom of the page when clicking on the remote call link. This is to get around CORS issues when running magento inside a VM.

Requirements
------------
- PHP >= 5.2.0
- AOE_TemplateHints

Compatibility
-------------
- Magento >= 1.4

Installation Instructions
-------------------------
The best way to install this is with composer. The composer file includes a dependency for the AOE Template Hints extension.

Otherwise, you can download the extension files manually and copy them into your Magento directory. This extension is not on Magento Connect at present.

Uninstallation
--------------
If using composer, this is trivial. If not, you'll have to manually remove all the extension files manually. The extension doesn't touch the database at all.

Roadmap / ToDo
--------------
Add a button to the top right of each hint area, which when clicked will show an info box, similar to the one in the OpenTip extension.

FAQs
----
### Why is this extension called 'Johnny'
The original inspiration for this extension was from a developer that complained about the usability of the OpenTip popups in the default extension. I thought:
"Why not make a renderer that has the awesome functionality of the OpenTip renderer, but is easier to use?". Thus, an extension called 'Johnny' was born.

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/champion/Johnny/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2014 Jeremy Champion
