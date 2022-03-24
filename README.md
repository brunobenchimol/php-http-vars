# php-http-vars

Purpose
------------
Useful por testing Openshift / Kubernetes and print out useful information like phpinfo, http headers and enviroment variables.   
Real simple code. Can work with S2I builds or directly deployed into a PHP-capable Web Server.

Requirements
------------
PHP 5.6+  

Tested on
------------
OpenShift 4.9   
PHP 7.4  
UBI 8  


Enviroment Variables
--------------
The following table shows variables used:   

|    Variable      |     Description     |
| ---------------- | ------------------- |
| `TZ`      |  Sets timezone on pod/container | 
| `CUSTOM_VAR`              |  Sample variable, just to show its reading properly. Does not do anything.  |
