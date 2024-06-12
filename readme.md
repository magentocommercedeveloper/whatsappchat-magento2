# Ssquare WhatsApp Extension for Magento 2

## Overview

The Ssquare WhatsApp extension for Magento 2 adds WhatsApp chat functionality to your Magento store. With this extension, customers can easily initiate conversations with your store via WhatsApp.

## Features

- Allows customers to initiate WhatsApp chats directly from your store.
- Easy installation and configuration via the Magento Admin panel.
- Supports multiple PHP versions (7.4, 8.0, 8.1).
- Customizable WhatsApp icon and chat message.

## Installation

1. **Composer Installation**:

    You can install the extension via Composer by running the following command in your Magento 2 root directory:

    ```bash
    composer require ssquare/whatsapp
    ```

2. **Manual Installation**:

    Alternatively, you can download the extension package from [GitHub releases](#) and extract it to your Magento 2 `app/code` directory.

3. **Enable the Extension**:

    After installing the extension, enable it by running the following commands from your Magento 2 root directory:

    ```bash
    php bin/magento module:enable Ssquare_Whatsapp
    php bin/magento setup:upgrade
    ```

## Configuration

1. Log in to your Magento Admin panel.
2. Navigate to `Stores` > `Configuration`.
3. Under the `Ssquare` section, select `WhatsApp`.
4. Enter your WhatsApp phone number in the `Receiver Phone Number` field.
5. Customize the WhatsApp icon and chat message as desired.
6. Save the configuration.

## Usage

Once the extension is installed and configured, customers will see the WhatsApp icon on your store. They can click on the icon to initiate a chat with your store via WhatsApp.

## Support

For any issues or questions regarding the extension, please [open a new issue](#) on GitHub or [contact us](mailto:ceo@ssquare.pk).

---

This README provides clear instructions for installing, configuring, and using the extension. Make sure to include any additional details specific to your extension's functionality or requirements.