<?php
// Manual Config for SSL Fix
$config = array();

[general]
installed = Off
base_url = "https://ijaml.com"
session_cookie_name = OJSSID
session_lifetime = 30
disable_path_info = Off
allow_envelope_sender = Off
default_controller = index
start_controller = index
restful_urls = Off
force_ssl = On
trust_x_forwarded_for = On

[database]
driver = mysqli
host = mysql
username = Admin
password = Project@1
name = ojs
persistent = Off
debug = Off

[cache]
object_cache = none
memcache_hostname = localhost
memcache_port = 11211
web_cache = Off
web_cache_hours = 1

[i18n]
locale = en_US
client_charset = utf-8
connection_charset = utf8

[files]
files_dir = /var/www/files
public_files_dir = public

[security]
encryption = sha1
allowed_hosts = "[\"ijaml.com\"]"

[email]
smtp = Off
smtp_auth = PLAIN
smtp_port = 25
allow_envelope_sender = Off

[search]
index_page_content = On
