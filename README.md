# Amazon Product Advertising API 5.0 PHP SDK

![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-purple)
[![Amazon API](https://img.shields.io/badge/Amazon%20CreatorsAPI-%23FD9B15)](https://affiliate-program.amazon.in/creatorsapi/docs/en-us/introduction)
[![Latest Version](https://img.shields.io/packagist/v/rajpurohithitesh/amazon-creatorsapi-php-sdk)](https://packagist.org/packages/rajpurohithitesh/amazon-creatorsapi-php-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/rajpurohithitesh/amazon-creatorsapi-php-sdk.svg?style=flat)](https://packagist.org/packages/rajpurohithitesh/amazon-creatorsapi-php-sdk)
[![License](https://img.shields.io/badge/License-Apache_2.0-blue)](LICENSE.txt)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=RajpurohitHitesh_amazon-creatorsapi-php-sdk&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=RajpurohitHitesh_amazon-creatorsapi-php-sdk)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=RajpurohitHitesh_amazon-creatorsapi-php-sdk&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=RajpurohitHitesh_amazon-creatorsapi-php-sdk)
[![CI](https://github.com/rajpurohithitesh/amazon-creatorsapi-php-sdk/actions/workflows/ci.yml/badge.svg)](https://github.com/rajpurohithitesh/amazon-creatorsapi-php-sdk/actions/workflows/ci.yml)
[![PHP Composer](https://github.com/rajpurohithitesh/amazon-creatorsapi-php-sdk/actions/workflows/php.yml/badge.svg)](https://github.com/rajpurohithitesh/amazon-creatorsapi-php-sdk/actions/workflows/php.yml)

# Creators API PHP SDK Example

## Prerequisites

### PHP Version Support
- **Supported**: To run the SDK you need PHP version 8.1 or higher.

## Setup Instructions

### 1. Install and Configure PHP

For PHP installation, you can download it from the official website: https://www.php.net/downloads

```bash
# Check PHP version
php --version
```

### 2. Install Dependencies
```bash
cd {path_to_dir}/creatorsapi-php-sdk
composer install
```

### 3. Run Sample Code
Navigate to the examples directory to run the samples.

```bash
cd examples
```

Before running the samples, you'll need to configure your API credentials in the sample files by replacing the following placeholders:

- `<YOUR CREDENTIAL ID>` - Your API credential ID
- `<YOUR CREDENTIAL SECRET>` - Your API credential secret  
- `<YOUR CREDENTIAL VERSION>` - Your credential version (e.g., "2.1" for NA, "2.2" for EU, "2.3" for FE region)
- `<YOUR MARKETPLACE>` - Your marketplace (e.g., "www.amazon.com" for US marketplace)
- `<YOUR PARTNER TAG>` - Add valid Partner Tag for the requested marketplace in applicable sample code snippet files

Run the following commands to run the sample files:

**Get detailed product information:**
```bash
php SampleGetItems.php
```

**Search for products:**
```bash
php SampleSearchItems.php
```

#### Other Samples
Check the `examples` directory for additional sample files with various API operations.
