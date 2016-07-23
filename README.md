<VirtualHost *:80>
	ServerName projetoclasses.dev
	DocumentRoot /var/www/ProjetoClasses/public

	<Directory /var/www/ProjetoClasses/public>
		<IfModule mod_rewrite.c>
			Options -MultiViews
			RewriteEngine On
			RewriteCond  %{REQUEST_FILENAME} !-f
			RewriteRule ^ index.php [L]
		</IfModule>		
	</Directory>

	<Proxy *>
		Order deny,allow
		Allow from all
	</Proxy>

	ProxyPass /layout http://localhost/ProjetoClasses/public/vendor/
	ProxyPassReverse /layout http://localhost/ProjetoClasses/public/vendor/
</VirtualHost>
