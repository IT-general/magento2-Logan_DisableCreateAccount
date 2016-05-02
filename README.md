# Magento 2 Logan_DisableCreateAccount
Disables the creation of new customer accounts on the frontend by listening for the "controller_action_predispatch_customer_account_create" event and redirecting to current store's base URL

Install
=======

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer config repositories.logandisablecreateaccount git https://github.com/loganstellway/magento2-Logan_DisableCreateAccount.git
    composer require logan/disablecreateaccount:dev-master
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
    php bin/magento module:enable Logan_DisableCreateAccount --clear-static-content
    php bin/magento setup:upgrade
    ```


