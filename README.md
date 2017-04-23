# Website Burger King

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

Ini adalah repositori Website Burger King menggunakan CMS Wordpress untuk keperluan latihan membuat template CMS Wordpress. Untuk versi HTML silahkan kunjungi repositori ini [Burger King HTML](https://github.com/ekuiva/burger-king)

Fitur dari Website Burger King Wordpress ini :
  - Header menu sudah dinamis
  - Homepage sudah bisa custom
  - Footer sudah dinamis dan bisa custom
  
### Installasi

Silahkan ikuti beberapa langkah untuk melakukan installasi dikomputer local.

Clone repositori ini melalui command line:
```sh
$ git clone https://github.com/ekuiva/burger-king-wp.git
```

Buat database dengan nama dan silahkan import database di dalam folder ```DATABASE```.
```sh
burger-king-wp
```

Demo website username & password: 
```sh
URL : bk.ekuiva.com
Username : demo	
Password : demo
```
Akses lokalhost dan arahkan ke folder tersebut:
```sh
burger-king-wp
```

file ```.htaccess``` untuk Development
```sh
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /burger-king-wp/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /burger-king-wp/index.php [L]
</IfModule>
# END WordPress
```

file ```.htaccess``` untuk di CPANEL
```sh
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
```


### License

[The MIT License](https://opensource.org/licenses/MIT)

**Dikembangkan Oleh :**
[Lani Asep Sutisna](https://github.com/laniasepsutisna)

**Free Software, Hell Yeah!**

**Free Software, Hell Yeah!**

