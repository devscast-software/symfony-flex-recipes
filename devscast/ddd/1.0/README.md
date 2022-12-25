# Devscast DDD

## 1. Backend

### setup generic dependencies
```sh
composer require symfony/apache-pack \
symfony/rate-limiter \
symfony/string \
symfony/uid \
vich/uploader-bundle \
knplabs/knp-paginator-bundle \
erusev/parsedown \
geoip2/geoip2 \
league/csv
```

### setup mardown email
```sh
composer require twig/cssinliner-extra \
twig/extra-bundle \
twig/markdown-extra \
twig/string-extra
```

### setup Symfony UX components
```sh
composer require symfony/ux-autocomplete \
symfony/ux-chartjs \
symfony/ux-dropzone \
symfony/ux-turbo \
symfony/ux-cropperjs
```

### setup two factor authentication tools
```sh
composer require scheb/2fa-backup-code \
scheb/2fa-bundle \
scheb/2fa-email \
scheb/2fa-google-authenticator \
scheb/2fa-trusted-device
```

### setup fixtures developpment tools

```sh
composer require dama/doctrine-test-bundle \
nelmio/alice \
doctrine/doctrine-fixtures-bundle \
hautelook/alice-bundle \
theofidry/alice-data-fixtures  --dev
```

### setup developpment quality tools
```sh 
composer require phpstan/phpstan \
phpstan/phpstan-doctrine \
phpstan/phpstan-phpunit \
phpstan/phpstan-symfony \
phpunit/phpunit \
rector/rector \
squizlabs/php_codesniffer \
symplify/easy-coding-standard \
vimeo/psalm --dev
```

## 2. Frontend

### setup generic dependencies
```sh
yarn add axios \
flatpickr \
htm \
sweetalert2
```

### setup tailwindcss (tailus)
```sh
yarn add tailwindcss \
postcss \
postcss-import \
postcss-loader \
sass \
sass-loader -D
```

### setup serviceWorker with workbox
```sh
yarn add workbox-cacheable-response \
workbox-expiration \
workbox-navigation-preload \
workbox-precaching \
workbox-routing \
workbox-strategies \
workbox-webpack-plugin \
workbox-window -D
```
