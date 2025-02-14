# Magento 2 Wishlist Analytics

## Table of contents

- [Summary](#summary)
- [Installation](#installation)
- [Configurations](#configurations)
- [License](#license)

## Summary

Analyze customer preferences and make data-driven decisions with the Magento 2 Wishlist Analytics extension.

### Key features:
1. View all customer wishlists in a single grid.
2. Track the most popular items in your store.
3. Monitor stock quantities and avoid out-of-stock situations.
4. Edit products with a single click.
5. Sort items by their popularity.

## Installation

You can install the Extension using one of two methods:
 1. Via Composer 
 2. By downloading it directly from the available source.
 
### 1. Install via composer

To install the Extension via Composer, follow these steps in  your Magento 2 root folder:

Run the following command:
```shell
composer require mdbhojwani/magento2-wishlist-analytics
```
After a successful installation, execute the following commands:

```shell
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento c:c
```

With these steps completed, you'll be ready to utilize the Extension.

### 2. Download Directly

To install the Mdbhojwani Save For Later Extension you can download the Extension from below link:

https://github.com/mdbhojwani/magento2-wishlist-analytics

After successfully downloading the module, follow these steps to install it:

1. Unzip the downloaded folder.

2. Place the unzipped extension folder into the following path:

```shell
project-root-directory/app/code/Mdbhojwani/WishlistAnalytics
```

Indeed, after placing the extension folder in the specified directory, follow these Magento commands to complete the installation:
```shell
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento c:c
```

By following these 2 Ways you can easily obtain and install the module. For detailed instructions on its usage, refer to the user guide within this document.


## Configurations

Login to the **Magento Admin**, navigate to ` Customer -> Wishlist Analytics `.

<div>
    <img src="./media/1.png" alt="Wishlist Analytics Menu Section">
</div>
<div>
    <img src="./media/2.png" alt="Wishlist Analytics Page">
</div>

## License

[Open Software License ("OSL") v. 3.0](https://opensource.org/license/osl-3-0-php)

