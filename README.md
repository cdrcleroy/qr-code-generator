# QR Code Generator Script

This project is a PHP script that generates QR codes based on user input. The user provides a URL through the command line, and the script generates a QR code saved as an image file.

## Features

- Interactive CLI for user input
- Generates QR codes from URLs
- Saves the QR code as a PNG file
- Lightweight and easy to use

## Requirements

- PHP 7.4 or later
- Composer

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/qr-code-generator.git
   cd qr-code-generator
   ```

2. Install dependencies using Composer:
   ```bash
   composer install
   ```

## Usage

1. Run the script in the terminal:
   ```bash
   php generate_qrcode.php
   ```

2. Enter the URL when prompted:
   ```
   Enter the link to generate the QR Code: https://example.com
   ```

3. The QR code is generated and saved as `qrcode.png` in the current directory. The script will confirm:
   ```
   QR Code generated successfully! File saved at: /path/to/qrcode.png
   ```

## Customization

- You can modify the default filename or path in the script by editing the variable `$outputFile`.
- Adjust the QR code size, margin, or error correction level in the script's `Builder` configuration.

## Dependencies

This project uses the [endroid/qr-code](https://github.com/endroid/qr-code) library. Ensure that all dependencies are installed via Composer.

## Contributing

Contributions are welcome! Feel free to submit a pull request or open an issue to suggest improvements.
