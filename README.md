## Encrypter WordPress Plugin
A set of encryption/decryption functions based on Laravel Encryption class.
https://github.com/illuminate/encryption

---

### Set Encryption Key
```php
// wp-config.php
define( 'BB_ENCRYPT_KEY', 'SOME_RANDOM_16_CHARACTER_STRING' );
```

---

### Examples
```php
$value = 'some_secret_value';

$encrypt = bb_encrypt($value);
// eyJpdiI6ImZ5QWtsRW83WmJJSVdmWmozcFF6WWc9P...

$decrypt = bb_decrypt($encrypt)
// 'some_secret_value'
```

```php
$query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 5
]);

$encrypt = bb_encrypt($query->posts);
// eyJpdiI6Im9sZ2pBb1FGNFR5Q3hHNDFqZFZ0cnc9P...

$decrypt = bb_decrypt($encrypt)
// an array of posts
```
