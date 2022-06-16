## Setup

All environments expects the following dependencies to be installed:
-   [Composer](https://getcomposer.org/), a PHP package manager

Once all the above dependencies are installed, you can proceed with the rest of the setup:

```bash
git clone https://github.com/talha195javed/mail_subscriptions
cd mail_subscriptions

composer install
```

You'll then need to setup your environment variables for database and mail

```bash
cp .env.example .env

php artisan key:generate
php artisan migrate
php aritsan db:seed
```
Use the postman collection sent to make subscriptions and posts

Run the `php artisan send:email && php artisan queue:work` to send the unsent post to subscribed users of the website
