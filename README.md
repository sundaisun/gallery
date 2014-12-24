# Gallery

**IMPORTANT: project is still under development.** This is the documentation for a website featuring tiled gallery. 

## File Structure
###First-tier
All pages are coded in php. All first-tier web pages are saved in root directory:

- index.php
- clients.php
- work.php
- contact.php

###Second-tier
- /parts/header.php
- /parts/footer.php

header.php and footer.php are included in all pages.

- /works/_innerPages.php_

the "works" folder has all project detail pages.
**_Note:_** When including header.php and footer.php, don't forget to update relative paths.

- /stylesheets/

this folder contains all css files.

- /js/

this folder contains all javascript files.

- /images/

this folder contains all images. All gallery thumbnails are saved on root level. All clients' logos are saved in "clients". All project detail inner page images are saved in "work-inner".

- /video/

this folder contains all video files

- /bower_components/

all supportive files. Do not touch.

- /source/

source files.

- /scss/

development sass files.

## From Dev to Live

### Files to Upload

- /bower_components/
- /clients.php
- /contact.php
- /images/
- /index.php
- /js/
- /parts/
- /stylesheets/
- /video/
- /work.php
- /works/

### Link paths change

Development files are using document relative paths. However, when going live, please use root-relative paths. This issue will be resolved when I return from vacations. But before that, just use root-relative paths for header.php and footer.php

### Get Rid of .php Extension

Don't forget to include .htaccess (on our server) to get rid of the extension.

