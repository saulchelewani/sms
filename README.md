# TNM SMS
## Installation
1. Install via composer
```
composer require tnmdev/sms
```
 2. Publish config
```
php artisan vendor:publish --provider=TNM\SMS\SmsServiceProvider
```
3. Update authentication params in `/config/sms.php`

## Testing
 ```
phpunit tests
```
