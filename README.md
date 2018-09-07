
# Nova External URL Field
[![Packagist](https://img.shields.io/packagist/v/qikker-online/external-url.svg?style=flat-square)](https://packagist.org/packages/qikker-online/external-url)
[![Packagist](https://img.shields.io/packagist/l/qikker-online/external-url.svg?style=flat-square)](https://packagist.org/packages/qikker-online/external-url)

Add external URLs to your laravel nova fields

## Installation
1. `composer require qikker-online/external-url`

##Usage

To use this field you can simply add it to your `fields` method on your `Nova/Resource` like this:

```
ExternalUrl::make('URL', 'url'),
```

You can also add a custom title to the URL:
```
ExternalUrl::make('URL', 'url')->customTitle('Click Here'),

ExternalUrl::make('URL', 'url')->customTitle(function() {
    return 'Click Here: '.$this->url;
}),
```

Likewise, you can also add a custom URL, so when the user clicks on the link it will be sent to somewhere else. This might be useful if you want to clean up the url:
```
ExternalUrl::make('URL', 'url')->customUrl('https://www.qikkeronline.nl'),

ExternalUrl::make('URL', 'url')->customUrl(function() {
    return 'https://'.$this->url;
}),
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
