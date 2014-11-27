dragonslair
===========

Exam project 2.2, business academy Aarhus

===========

How to use:

Open XAMPP, start the Apache server AND the mysql server.
In a browser, go to http://localhost/phpmyadmin (login if you've set a username and password previously).
Change the language to English.

If you already created a database named "wp", skip this paragraph.
If not, click on Databases in the top navigation menu.
Under Create database, write wp as the name and click Create.

In the sidebar menu on the left, click on "wp".
If any tables are present, scroll to the very bottom. Under the list of tables, click "Check all" and from the dropdown choose "Dump".
Click Yes.
In the top navigation bar in the main section, click Import.
Click the button next to "Browse your computer" and select wp.sql from the project's root folder (same folder as this file).
On the bottom of the page, click "Go". It's gonna take a while...

Guidelines: 

Head of interaction (Mikkel) works on the project, like, all the time. So whenever you need to work on any of these files, or add new files, remember to go to the Github app and sync.

If you're changing/replacing/editing a file, please inform Mikkel first. If you're adding new files, knock yourself out!

When commiting changes, ALWAYS write an informative summary (if necessary, description) of what you did/added/changed/etc!

When multiple people collaborate on this project at the same time, contact between everyone involved must be established and kept throughout the entire session (preferably through Facebook)!

When adding code, always make sure to make it clear who wrote which part of the code, using comments. If credits aren't given for a piece of code, it will be assumed that Mikkel wrote it. Comment like this:

--------HTML:
	<!-- Name, begin: -->
		<p>Your code</P>
		<section>
			<p>Your code</p>
		</section>
	<!-- Name, end -->

--------CSS, PHP and javaScript:
	/* Name, begin: */
	body {
		sth: xx;
		sthelse: yy;
	}
	/* Name, end */

If you only added a single line of code, add a space after the line, then a comment with just your name:

--------HTML: <!-- Name -->
--------CSS, PHP and javaScript: /* Name */

If you made an entire file by yourself, write a comment on the very first line saying "Made by Name" (using <!-- --> for HTML/PHP files and /* */ for js and CSS files).

Put stuff into the appropriate folders (refer to the coding conventions). If you deem it necessary to create additional sub-folders, make sure to write it in the summary before you commit!

If you create any folders, MAKE SURE THEY HAVE AT LEAST ONE FILE IN THEM (an empty delete.me file can be used as a dummy) - otherwise the folder won't show in the project.