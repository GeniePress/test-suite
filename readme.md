## About GeniePress

GeniePress is a WordPress plugin and theme framework with expressive, elegant syntax.

## Learning GeniePress

Have a look at the [GeniePress documentation](https://geneipress.org)

## Security Vulnerabilities

If you discover a security vulnerability within GeniePress, please send an e-mail to Sunil Jaiswal via [sunil@lnk7.com](mailto:sunil@lnk7.com).

All security vulnerabilities will be promptly addressed.

## License

The GeniePress framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Installing the Test Suite

`composer update`

`npm install`

`npx selenium-standalone install && npx selenium-standalone start`

## Running Tests

Start the selenium driver
`npx selenium-standalone start`

Run the tests

`vendor/bin/codecept run acceptance`

`vendor/bin/codecept run functional`

`vendor/bin/codecept run unit`
