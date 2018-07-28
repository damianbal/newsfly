# Newsfly
> Platform which lets send news as emails to subscribers.

Platform which lets send news as emails to subscribers, anyone with email can subscribe to any user, users also can unsubscribe at any time.

![Homepage](sample.png?raw=true "Homepage")

## Installation

Clone repo or download then run those commands

```sh
npm install
php artisan migrate
php artisan serve
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1 # start the scheduler, so weekly sending out works
```

Of course you need to setup database connection in .env file, create it based on .env.example


## Build with
* Laravel 5

## Meta

Damian Balandowski – balandowski@icloud.com

[https://github.com/damianbal](https://github.com/damianbal)

