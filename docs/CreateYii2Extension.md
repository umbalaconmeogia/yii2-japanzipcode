# Create Yii2 extension
This is the steps that I created this extension.

This extension intends to provide the below functions:
1. Provide a model to search for an address corresponding to a zipcode.
1. Validate a zipcode.
1. Provide an API that return an address corresponding to a zipcode.

# Create project repository on github
Create a repository for this project at https://github.com/umbalaconmeogia/yii2-japanzipcode

# Clone github to local PC
```shell
git clone https://umbalaconmeogia@github.com/umbalaconmeogia/yii2-japanzipcode.git
```

# Create composer.json and initiate the directory structure.
Run ```composer init```, reply the questions and composer.json is created.
Edit the composer.json if needed. I have a file like this.
```js
{
    "name": "thanh/yii2-japanzipcode",
    "description": "Yii2 extension to search for address responding to a zipcode in Japan.",
    "type": "yii2-extension",
	"keywords": ["japan", "zipcode", "postal", "helper"],
    "license": "MIT",
    "authors": [
        {
            "name": "Tran Trung Thanh",
            "email": "umbalaconmeogia@gmail.com"
        }
    ],
    "minimum-stability": "dev",
    "require": {}
}
```
Then run ```composer install``` to install dependencies into /vendor directory.

# Create JapanZipcode (CSV version)

## Create the test

## Create the model

# Create JapanZipcode (SQLite version)

## Create the migration

## Create command japan-zipcode/import-csv

### Create the test

### Create the model

## Create JapanZipcodeSQLite

### Create the test

### Create the model

## Update JapanZipcodeSQLite to set db name
