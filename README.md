# Magento 2 Extension — Admin Theme Dark & Light

![Magento](https://img.shields.io/badge/Magento-2.x-orange?logo=magento)  ![PHP](https://img.shields.io/badge/PHP-8.x-blue?logo=php) ![Contributions](https://img.shields.io/badge/Contributions-Welcome-brightgreen)  
  
##### This module adds a modern Dark and Light theme to the Magento 2 Admin Panel, improving visual comfort, readability, and usability for administrators. It applies consistent styling across all admin sections, including menus, grids, forms, configuration pages, and system messages, while remaining fully compatible with Magento’s native UI library. The theme is upgrade-safe, performance-friendly, and designed to enhance the overall admin experience without modifying core files.
---

## Installation  

1. Copy the contents of this repository into:  
   ```bash
   {MAGENTO_ROOT}/app/code/DevScripts/AdminTheme/
   ```
2. Run the following commands in your Magento root directory:  
   ```bash
   php bin/magento setup:upgrade
   php bin/magento setup:static-content:deploy
   php bin/magento cache:flush
   ```
---

## Screenshots  

**Dark Theme**  
![Customer Account Dashboard](https://github.com/inadeemkhan/magento2-profile-picture/blob/feature/admin-dark-theme/images/dark-theme.png) 

**Light Theme**  
![Customer Account Create](https://github.com/inadeemkhan/magento2-profile-picture/blob/feature/admin-dark-theme/images/light-theme.png)  

---

## Prerequisites  

Ensure the following requirements are met before installing this extension:

| Prerequisite | How to Check | Documentation |
|--------------|--------------|---------------|
| Apache / Nginx | `apache2 -v` (Ubuntu)<br><br>`nginx -v` | [Apache Docs](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/apache.html) <br> [Nginx Docs](https://docs.nginx.com/nginx/admin-guide/installing-nginx/installing-nginx-open-source/)|
| PHP >= 8.1 | `php -v` | [PHP on Ubuntu](http://devdocs.magento.com/guides/v2.2/install-gde/prereq/php-ubuntu.html)<br>[PHP on CentOS](http://devdocs.magento.com/guides/v2.2/install-gde/prereq/php-centos.html) |
| MySQL 5.6.x | `mysql -u [root username] -p` | [MySQL Docs](http://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql.html) |

---

## Contribution  

Contributions are welcome!  
The fastest way to contribute is by submitting a [pull request](https://help.github.com/articles/about-pull-requests/) on GitHub.  

---

## Issues & Support  

If you encounter any issues or bugs, please [open an issue](https://github.com/inadeemkhan/magento2-admin-dark-and-light-theme/issues) on GitHub.  

For direct support or feedback, feel free to contact:  
📧 [khannadeem243@gmail.com](mailto:khannadeem243@gmail.com)  
